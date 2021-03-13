<?php namespace Kamenev\Parseinstagram\Controllers;

use Kamenev\Parseinstagram\Models\ParseInstagram;
use Backend\Classes\Controller;
use BackendMenu;
use Response;
use Log;

class ParseInstagramController extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Kamenev.Parseinstagram', 'parse-inst-menu-item');
    }

    public function apiRequest()
    {
        $inst = ParseInstagram::all()->first();
        if ($inst == null) {
            return Response::make(['message' => 'Not found info!'], 200);      
        }

        $instApi = new InstagramApi();

        if ($inst->access_token === '') {
            Log::error('Instagram: Ошибка! Нужно получить токен доступа в кабинете разработчика Facebook');
            return [];
        }

        if ($this->checkExpiresToken($inst->time_created, $inst->expires_in)) {
            $access_token = $instApi->updateAccessToken($inst);
            $inst->access_token = $access_token;
            $inst->time_created = date('Y-m-d', time());
            $inst->expires_in = 30;
            $inst->save();
        }

        $parametrs = [
            "id", "media_type", "media_url", "permalink",
        ];
        $posts = $instApi->getProfileInfo($parametrs, $inst);

        // echo '<pre>' . print_r($posts, true) . '</pre>';
        return response()->json([
            'success' => 1,
            'posts' => $posts, 
        ], 200);
    }

    public function checkExpiresToken($time_created, $expires_in)
    {
        $secPerDay = 86400;
        $oldDate = strtotime($time_created);
        $curDate = time();
        $dateDiff = ($curDate - $oldDate) / $secPerDay;
        if ($dateDiff > $expires_in) {
            return true;
        } else {
            return false;
        }
    }
}
