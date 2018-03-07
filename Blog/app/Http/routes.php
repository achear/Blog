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


//后台欢迎页
Route::get('/admin/welcome','Admin\LoginController@welcome');
//用户模块路由
Route::resource('/admin/user','Admin\UserController');
//中间件
Route::group(['middleware' => 'login'],function(){
});

//分类模块
Route::resource('/admin/cate','Admin\CateController');
Route::post('/admin/cate/changeorder','Admin\CateController@changeOrder');

//文章模块

//文件上传
Route::post('/admin/article/uploads','Admin\ArticleController@upload');
Route::resource('/admin/article','Admin\ArticleController');
//访问的update方法的路由
// Route::post('/admin/article/modify/{id}','Admin\ArticleController@update1');