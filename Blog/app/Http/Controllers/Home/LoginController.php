<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use \Symfony\Component\HttpFoundation\Cookie;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\home_user;
class LoginController extends Controller
{
    /**
     * 注册页.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return 111;
        return View('home.index.registration');
    }

    /**
     * 前台用户登录
     *
     * @return \Illuminate\Http\Response
     */
    public function DoLogin(Request $request)
    {
        //

        // return 11;
        $input = $request->except('_token');
        // 错误显示信息
        // dd($input);
        $rule = [
            'username'=>'required',
            'password'=>'required|between:5,20|alpha_dash'
        ];

        $msg =[
            'username.required'=>'用户名必须输入',
            // 'username.between'=>'用户名应该在5到18位之间',
            'password.required'=>'密码必须输入',
            'password.between'=>'密码应该在5到20位之间',
            'password.alpha_dash'=>'密码必须是数字字母下划线',
        ];
        $user = home_user::where('username',$input['username'])->first();
        // dd($user);
        if(empty($user)){
            return redirect('/')->with('errors','用户名不存在');
        }

//        4. 密码是否正确
        if($input['password'] !=  $user->password ){
            return redirect('/#login')->with('errors','密码不对');
        }

        //如果登录成功，将登录用户信息保存到session中
        session()->put('users',$user);
        // return View('home.index.index',['data'=>$user]);
    }

    /**
     * 退出登录
     * 清空前台session数据
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function loginout(Request $request)
    {
        Session()->forget('users');
        return back();
    }
    
}
