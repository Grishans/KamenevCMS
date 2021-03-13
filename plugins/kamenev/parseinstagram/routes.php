<?php

Route::group(['namespace' => 'Kamenev\Parseinstagram\Controllers'], function() {
    Route::get('backend/kamenev/instagram/parseinstagramcontroller/get-posts', 'ParseInstagramController@apiRequest');
});