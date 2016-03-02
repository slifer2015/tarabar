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
    Route::get('/',['as'=>'home','uses'=>'IndexController@index']);
});

Route::group(['middleware' => 'web'], function () {
    //Route::auth();
    Route::get('/login','Auth\AuthController@showLoginForm');
    Route::post('/login', 'Auth\AuthController@login');
    Route::get('/register','Auth\AuthController@showRegistrationForm');
    Route::post('/register', 'Auth\AuthController@register');
    Route::get('/logout','Auth\AuthController@logout');
    /*Route::post('password/email','Auth\PasswordController@sendResetLinkEmail');
    Route::post('password/reset','Auth\PasswordController@reset');
    Route::get('password/reset/{token?}','Auth\PasswordController@showResetForm');*/

    //Order Form Routs
    Route::get('/requestaquote',['as'=>'orderForm','uses'=>'OrderController@index']);
    Route::post('/requestaquote',['as'=>'orderSubmit','uses'=>'OrderController@store']);

    /*
     * Contactus Route
     *
     */
    Route::get('/contact',['as'=>'contact','uses'=>'ContactController@index']);
    Route::post('/contact',['as'=>'store.contact','uses'=>'ContactController@store']);

    /*
     * Created By Iman on 94/11/25
     * register admin routes
     */
    Route::group(['prefix'=>'xadmin','middleware'=>'auth','as'=>'xadmin.'],function(){
        Route::get('/',['as'=>'index','uses'=>'AdminController@index']);
        Route::get('/password',['as'=>'password.change','uses'=>'PasswordController@change']);
        Route::post('/password',['as'=>'password.submit','uses'=>'PasswordController@submit']);

        /*
         * Created By Iman on 94/11/25
         * register news routs
         */
        Route::group(['prefix'=>'news','as'=>'news.'],function(){
           Route::get('/',['as'=>'index','uses'=>'NewsController@adminIndex']);
           Route::get('/create',['as'=>'create','uses'=>'NewsController@create']);
           Route::post('/create',['as'=>'store','uses'=>'NewsController@store']);
           Route::get('/edit/{news}',['as'=>'edit','uses'=>'NewsController@edit']);
           Route::post('/update/{news}',['as'=>'update','uses'=>'NewsController@update']);
        });

        /*
         * Created By Iman on 94/12/02
         * register order admin route
         */
        Route::get('/order',['as'=>'order.index','uses'=>'OrderController@adminIndex']);

        /*
         * Created By Iman on 94/12/08
         * register Contact admin route
         */
        Route::get('/contact',['as'=>'contact.index','uses'=>'ContactController@adminIndex']);

        /*
         * Created By Iman on 94/12/08
         * register Links Route
         */
        Route::group(['prefix'=>'link','as'=>'link.'],function(){
           Route::get('/',['as'=>'index','uses'=>'LinkController@adminIndex']);
           Route::get('/create',['as'=>'create','uses'=>'LinkController@create']);
           Route::post('/store',['as'=>'store','uses'=>'LinkController@store']);
           Route::get('/delete/{link}',['as'=>'delete','uses'=>'LinkController@delete']);
           Route::get('/edit/{link}',['as'=>'edit','uses'=>'LinkController@edit']);
           Route::post('/edit/{link}',['as'=>'update','uses'=>'LinkController@update']);
        });
    });

    /*
     * Created By Iman on 94/12/01
     * Ajax Routs
     */
    Route::group(['prefix'=>'ajax', 'as'=>'ajax.'],function(){
        Route::group(['prefix'=>'news', 'as'=>'news.'],function(){
            Route::post('/uploadSummernote',['as'=>'uploadSummernote','uses'=>'NewsController@uploadSummernote']);
            Route::delete('/deleteSummernote',['as'=>'deleteSummernote','uses'=>'NewsController@deleteSummernote']);
        });
    });

    Route::get('/home', 'HomeController@index');
    Route::get('/test/{order_id}',function($order_id){
        $order=\App\Order::findOrFail($order_id);
        return view('email.order',compact('order'));
    });

    Route::group(['prefix'=>'news','as'=>'news.'],function(){
       Route::get('/',['as'=>'index', 'uses'=>'NewsController@index']);
       Route::get('/show/{news}',['as'=>'show', 'uses'=>'NewsController@show']);
    });
});
