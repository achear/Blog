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


Route::get('/', function () {
    return view('welcome');
});



// Route::get('/', function () {
//     return View('home/index/index');
// });

//后台登陆
Route::resource('/admin/login','Admin\LoginController@login');
//获取验证码
Route::get('/admin/yzm','Admin\LoginController@yzm');
//后台首页
Route::get('/admin/index','Admin\LoginController@index');


//前台首页
Route::get('/','Home\IndexController@index');
// 前台注册页
Route::get('/home/index/registration','Home\LoginController@index');

// 轮播图配置
Route::get('/admin/config','Admin\ConfigController@CaroEdit');
Route::get('/admin/config/CarUpdata','Admin\ConfigController@CarUpdata');
Route::get('/admin/config/CaroEdit','Admin\ConfigController@CaroEdit');
Route::get('/admin/config/CarChange','Admin\ConfigController@CarChange');


//后台欢迎页
Route::get('/admin/welcome','Admin\LoginController@welcome');
//用户模块路由
Route::resource('/admin/user','Admin\UserController');
//中间件
Route::group(['middleware' => 'login'],function(){
});
