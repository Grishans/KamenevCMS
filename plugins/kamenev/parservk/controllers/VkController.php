<?php namespace Kamenev\Parservk\Controllers;

use Kamenev\Parservk\Models\Info;
use Backend\Classes\Controller;
use BackendMenu;
use Response;
use Request;
use Input;
use Redirect;
use Log;

class VkController extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Kamenev.Parservk', 'main-menu-item');
    }

    public function onGetAccess()
    {
        $client_id     = post('Info[client_id]');
        $client_secret = post('Info[client_secret]');
        $service_key   = post('Info[service_key]');
        $auth_url      = post('Info[auth_url]');
        $redirect_url  = post('Info[redirect_url]');
        $count_posts   = post('Info[count_posts]');
        $getCodeURI = $auth_url . "authorize?client_id=" . $client_id . "&display=page&redirect_uri=" . $redirect_url . "&scope=offline&response_type=code&v=5.52";

        return Redirect::to($getCodeURI);
    }

    public function getToken() {
        if (Input::has('code')) {
            $code = Input::get('code');
        } else {
            Log::error('VK: Отсутствует код для получения токена');
            return Redirect::to(Request::getBaseUrl() . '/backend/kamenev/parservk/vkcontroller/update/' . $info->id);
        }

        $info = Info::all()->first();
        if ($info == null) {
            Log::error('VK: Отсутствуют запрашиваемые данные!');
            return Redirect::to(Request::getBaseUrl() . '/backend/kamenev/parservk/vkcontroller/update/' . $info->id);
        }

        $vkApi = new Vkapi();
        $response = $vkApi->getAccessToken($code, $info);
        if ($response == 0) {
            return Redirect::to(Request::getBaseUrl() . '/backend/kamenev/parservk/vkcontroller/update/' . $info->id);
        }

        $info->access_token = $response->access_token;
        $info->time_created = date('Y-m-d', time());
        $info->expires_in = ($response->expires_in != 0) ? ceil($response->expires_in / 86400) : 0;
        $info->vk_user_id = isset($response->user_id) ? $response->user_id : die("Not user id");

        $info->save();

        return Redirect::to(Request::getBaseUrl() . '/backend/kamenev/parservk/vkcontroller/update/' . $info->id);      
    }
    
    public function requestAPI()
    {
        $info = Info::all()->first();
        if ($info == null) {
            $errorMsg = 'VK: Отсутствуют запрашиваемые данные!';
            Log::error($errorMsg);
            return [
                'success' => 0,
                'error_msg' => $errorMsg,
            ];
        }
        
        $vkApi = new Vkapi();
        $posts = $vkApi->request('wall.get', $info);
        // echo '<pre>' . print_r($posts, true) . '</pre>';
        $response = [
            'success' => 1,
            'url' => 'https://vk.com/' . $info->screen_name . '?w=wall',
            'posts' => $posts,
        ];
        return $response;
    }
}
