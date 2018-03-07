<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Org\code\Code;
require_once app_path().'/Org/code/Code.class.php';

class LoginController extends Controller
{
    public function index()
    {
        return view('Admin/index');
    }

    public function login()
    {
        return view('Admin/login');
    }

    public function yzm()
    {
        $code = new Code;
        return $code->make();
    }

    public function welcome()
    {
        return view('Admin/welcome');
    }

    //    退出登录
    public function logout(){
//        清空用户信息
        session()->flush();
//        跳转到登录页
        return redirect()->route('admin.login');
    }
}
