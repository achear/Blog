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


// Route::get('/', function () {
//     return view('welcome');
// });



// Route::get('/', function () {
//     return View('home/index/index');
// });

Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
    //后台登录
    Route::get('login','LoginController@login')->name('admin.login');
//获取验证码
    Route::get('yzm','LoginController@yzm');
    //提交后台登录处理逻辑
    Route::post('dologin','LoginController@doLogin');

});

//后台登陆
//Route::resource('/admin/login','Admin\LoginController@login');
//Route::post('/admin/dologin','Admin\LoginController@doLogin');
//获取验证码
//Route::get('/admin/yzm','Admin\LoginController@yzm');
//后台首页



Route::get('/admin/index','Admin\LoginController@index');


//前台首页
Route::get('/','Home\IndexController@index');
//修改用户状态路由
Route::get('/admin/user/changestate','Admin\UserController@changeState');

//批量删除用户路由
Route::get('/admin/user/del','Admin\UserController@del');
Route::resource('/admin/user','Admin\UserController');
//后台欢迎页
Route::get('/admin/welcome','Admin\LoginController@welcome');
//用户模块路由
Route::resource('/admin/user','Admin\UserController');
//配置模块路由
Route::resource('/admin/config','Admin\ConfigController');
//中间件
Route::group(['middleware' => 'login'],function(){
});
