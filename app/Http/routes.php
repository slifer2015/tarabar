<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/','IndexController@index');
});

Route::group(['middleware' => 'web'], function () {
    //Route::auth();
    Route::get('/login','Auth\AuthController@showLoginForm');
    Route::post('/login', 'Auth\AuthController@login');
    Route::get('/register','Auth\AuthController@showRegistrationForm');
    Route::post('/register', 'Auth\AuthController@register');
    Route::get('/logout','Auth\AuthController@logout');

    /*
     * Created By Iman on 94/11/25
     * register admin routes
     */
    Route::group(['prefix'=>'xadmin','middleware'=>'auth','as'=>'xadmin.'],function(){
        Route::get('/',['as'=>'home','uses'=>'AdminController@index']);

        /*
         * Created By Iman on 94/11/25
         * register news routs
         */
        Route::group(['prefix'=>'news','as'=>'news.'],function(){
           Route::get('/create',['as'=>'create','uses'=>'NewsController@create']);
        });
    });

    Route::get('/home', 'HomeController@index');
});
