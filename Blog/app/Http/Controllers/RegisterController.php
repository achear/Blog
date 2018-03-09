<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\home_user;


class RegisterController extends Controller
{
    //加载邮箱注册页面
    public function index()
    {
        return view('email.email');
    }
    //注册邮箱激活
    public function active()
    {

    }

    public function doRegister(Request $request)
    {
        //获取用户提交信息
        $input = $request->except('_token');
        //向用户的注册邮箱发送激活邮件
        //Mail::send('email.active',)
    }

    //邮箱注册处理
    public function email(Request $request)
    {
        $data = $request->except('_token');
        
        if(preg_match("/^[a-zA-Z0-9_]+@[a-zA-Z0-9]+(\.[a-zA-z]+){1,3}$/", $data['email'])){
            $data['email'] = $data['email'];
        }else{
            return back()->with("error","邮箱格式不正确");
        }

        //验证密码格式和重复密码是否一致
         if(preg_match("/^\S{3,18}$/", $data['password'])){
            $data['password'] = $data['password'];
        }else{
            return back()->with("error","密码格式不正确");
        }

        $user = home_user::create($data);
        if ($user) {
            return 1;
        } else {
            return 0;
        }
    }
}
