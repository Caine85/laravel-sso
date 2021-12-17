<?php

/**
 * Routes which is neccessary for the SSO server.
 */

Route::middleware('api')->prefix('api/sso')->group(function () {
    Route::post('login', 'Aperion\LaravelSSO\Controllers\ServerController@login');
    Route::post('logout', 'Aperion\LaravelSSO\Controllers\ServerController@logout');
    Route::get('attach', 'Aperion\LaravelSSO\Controllers\ServerController@attach');
    Route::get('userInfo', 'Aperion\LaravelSSO\Controllers\ServerController@userInfo');
});
