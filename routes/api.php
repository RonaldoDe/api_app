<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
    Route::post('login', 'Api\Auth\LoginController@login');
    Route::get('/', 'admin_web\PageController@blog');
    Route::get('post/{id}', 'admin_web\PageController@blogDetails');
    //ruta protegida por el auth 
    Route::middleware('auth:api')->group(function () {    
        Route::get('profile', 'admin_web\ProfileController@profile');
        Route::get('offerts', 'admin_web\PageController@offerts');
        Route::post('register', 'Api\Auth\RegisterController@register');
    });
    