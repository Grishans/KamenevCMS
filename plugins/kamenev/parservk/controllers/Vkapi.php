<?php namespace Kamenev\Parservk\Controllers;

use Log;

class Vkapi
{
    private $vk;

    public function __construct()
    {
    }

    public function getAccessToken($code, $vk)
    {
        $uri = $vk->auth_url . "access_token?client_id=" . $vk->client_id . "&client_secret=" . $vk->client_secret . "&redirect_uri=" . $vk->redirect_url . "&code=" . $code;

        $vkCnct = curl_init();
        curl_setopt($vkCnct, CURLOPT_URL, $uri);
        curl_setopt($vkCnct, CURLOPT_RETURNTRANSFER, 1);
        $response = json_decode(curl_exec($vkCnct));
        curl_close($vkCnct);

        if ($response == null) {
            Log::error('VK: Данные не вернулись, либо сервер не отвечает!');
            return 0;
        } else if(isset($response->error)) {
            Log::error('VK: Ошибка при получении данных. ' . $response->error->error_msg);
            return 0;
        }
        
        return $response;
    }

    public function request($method, $vk)
    {
        $parametrs = [
            'owner_id=' . $vk->vk_user_id,
            'domain=' . $vk->screen_name,
            'count=' . $vk->count_posts,
            'filter=all',
        ];

        $parametrsStr = implode("&", $parametrs);

        $uri = "https://api.vk.com/method/" . $method . "?" . $parametrsStr . "&access_token=" . $vk->access_token . "&v=" . $vk->version_api;

        $vkCnct = curl_init();
        curl_setopt($vkCnct, CURLOPT_URL, $uri);
        curl_setopt($vkCnct, CURLOPT_RETURNTRANSFER, 1);
        $response = json_decode(curl_exec($vkCnct));
        curl_close($vkCnct);

        if ($response == null) {
            Log::error('VK: Данные не вернулись, либо сервер не отвечает!');
            return [];
        } else if(isset($response->error)) {
            Log::error('VK: Ошибка при получении данных. ' . $response->error->error_msg);
            return [];
        }
        
        $handlerVk = new HandlerVK($response->response->items);
        $posts = $handlerVk->getPostData($vk->image->path);

        return $posts;
    }
}