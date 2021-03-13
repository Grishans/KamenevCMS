<?php namespace Kamenev\Parseinstagram\Controllers;

use Log;

class InstagramApi
{
    public function updateAccessToken($inst)
    {
        $instagramCnct = curl_init();
        curl_setopt($instagramCnct, CURLOPT_URL, $inst->refresh_url . $inst->access_token);
        curl_setopt($instagramCnct, CURLOPT_RETURNTRANSFER, 1);
        $response = json_decode(curl_exec($instagramCnct));
        curl_close($instagramCnct);
        
        return $response->access_token;
    }

    public function getProfileInfo($parametrs, $inst)
    {
        $baseURL = $inst->base_url . implode(",", $parametrs) . "&access_token=" . $inst->access_token;
        $instagramCnct = curl_init();
        curl_setopt($instagramCnct, CURLOPT_URL, $baseURL);
        curl_setopt($instagramCnct, CURLOPT_RETURNTRANSFER, 1);
        $media = json_decode(curl_exec($instagramCnct));
        curl_close($instagramCnct);

        if ($media == null) {
            Log::error("Instagram: Нет ответа, либо сервер не вернул данные");
            return [];
        } else if (isset($media->error)) {
            Log::error("Instagram: Ошибка при получении данных. " . $media->error->message);
            return [];
        }

        return isset($media->data) ? $media->data : [];
    }
}