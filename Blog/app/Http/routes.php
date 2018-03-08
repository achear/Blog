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

Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
    //后台登录
    Route::get('login','LoginController@login')->name('admin.login');
//获取验证码
    Route::get('yzm','LoginController@yzm');
    //提交后台登录处理逻辑
    Route::post('dologin','LoginController@doLogin');

});

Route::get('/','Home\IndexController@index');


//前台首页
Route::get('/','Home\IndexController@index');
// 前台注册页
Route::resource('/home/index/registration','Home\LoginController@index');
Route::resource('/home/index/DoLogin','Home\LoginController@DoLogin');
// 退出登录
Route::resource('/home/index/loginout','Home\LoginController@loginout');


// 轮播图配置
Route::get('/admin/config','Admin\ConfigController@CaroEdit');
Route::get('/admin/config/CarUpdata','Admin\ConfigController@CarUpdata');
Route::get('/admin/config/CaroEdit','Admin\ConfigController@CaroEdit');
Route::get('/admin/config/CarChange','Admin\ConfigController@CarChange');
Route::post('/admin/config/upload','Admin\ConfigController@upload');
// Route::get('/','Home\IndexController@index');
// // 前台注册页
Route::resource('/home/index','Home\IndexController');
Route::resource('/home/login/registration','Home\LoginController');
Route::resource('/home/login/DoLogin','Home\LoginController@DoLogin');
//验证用户是否存在
Route::controller('/home/user','Home\UserController');


// // 轮播图配置
// Route::get('/admin/config','Admin\ConfigController@CaroEdit');
// Route::get('/admin/config/CarUpdata','Admin\ConfigController@CarUpdata');
// Route::get('/admin/config/CaroEdit','Admin\ConfigController@CaroEdit');
// Route::get('/admin/config/CarChange','Admin\ConfigController@CarChange');
// Route::get('/admin/config/upload','Admin\Controller@upload');

// //修改用户状态路由
// Route::get('/admin/user/changestate','Admin\UserController@changeState');
// //修改用户密码
// Route::get('/admin/user/pass/{id}','Admin\UserController@pass');
// //批量删除用户路由
// Route::get('/admin/user/del','Admin\UserController@del');
// Route::resource('/admin/user','Admin\UserController');
// //后台欢迎页
// Route::get('/admin/welcome','Admin\LoginController@welcome');
// //用户模块路由
// Route::resource('/admin/user','Admin\UserController');
// //中间件
// Route::group(['middleware' => 'login'],function(){
// });
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['login']],function(){

    
    // 前台注册页
    Route::get('/home/index/registration','Home\LoginController@index');
    //后台首页
    Route::get('/index','LoginController@index');
    // 轮播图配置
    Route::get('/config','ConfigController@CaroEdit');
    Route::get('/config/CarUpdata','ConfigController@CarUpdata');
    Route::get('/config/CaroEdit','ConfigController@CaroEdit');
    Route::get('/config/CarChange','ConfigController@CarChange');
    Route::get('/config/upload','Controller@upload');
    
    //修改用户状态路由
    Route::get('/user/changestate','UserController@changeState');
    //修改用户密码
    Route::get('/user/pass/{id}','UserController@pass');
    //批量删除用户路由
    Route::get('/user/del','UserController@del');
    Route::resource('/user','UserController');
    //后台欢迎页
    Route::get('/welcome','LoginController@welcome');
    //用户模块路由
    Route::resource('/user','UserController');
    //后台退出登录
    Route::get('logout','LoginController@logout');
    
 });
