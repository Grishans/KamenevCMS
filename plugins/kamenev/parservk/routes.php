<?php

Route::group(['namespace' => 'Kamenev\Parservk\Controllers'], function() {
    Route::get('backend/kamenev/parservk/vkcontroller/get-access', 'VkController@getToken');
    Route::get('backend/kamenev/parservk/vkcontroller/get-wall', 'VkController@requestAPI');
});