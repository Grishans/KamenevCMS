<?php namespace Kamenev\Parservk\Classes\VK;

class Vkapi
{
    private $vk;

    public function __construct()
    {
        echo "ll";

    }

    public function getAccessToken($code, $vk)
    {
        $uri = $vk->auth_url . "access_token?client_id=" . $vk->client_id . "&client_secret=" . $vk->client_secret . "&redirect_uri=" . $vk->redirect_url . "&code=" . $code;
        echo "Get token redirect " . $uri . "<br>";

        $vkCnct = curl_init();
        curl_setopt($vkCnct, CURLOPT_URL, $uri);
        curl_setopt($vkCnct, CURLOPT_RETURNTRANSFER, 1);
        $response = json_decode(curl_exec($vkCnct));
        echo "<pre>" . print_r(curl_getinfo($vkCnct), true) . "</pre>";
        curl_close($vkCnct);
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

        $uri = "https://api.vk.com/method/" . $method . "?" . $parametrsStr . "&access_token=" . $vk->access_token . "&v=" . $vk->version;

        $vkCnct = curl_init();
        curl_setopt($vkCnct, CURLOPT_URL, $uri);
        curl_setopt($vkCnct, CURLOPT_RETURNTRANSFER, 1);
        $response = json_decode(curl_exec($vkCnct));
        curl_close($vkCnct);

        if (isset($response) || isset($response->error)) {
            return $response;
        }

        $handlerVk = new HandlerVK($response->response->items);
        $posts = $handlerVk->getPostData();
        
        return $posts;
    }
}