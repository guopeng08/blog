<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
 * 前台页面
 *
 * */
Route::group(['namespace' => 'Home'], function () {
    // 首页
    Route::get('/', 'HomeIndexController@index');




    //ajax提交类


});

/*
 * 后台页面
 *
 */
Route::group(['prefix' => 'administrator', 'namespace' => 'Admin'], function () {
    Route::get("login", 'LoginController@login');//后台登陆页
    Route::post("checkLogin", 'LoginController@checkLogin');
    Route::post('send', 'CommonController@sendMobileVerifyCode');//登录获取手机验证码



    //ajax提交类





});
