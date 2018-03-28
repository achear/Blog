<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use \Symfony\Component\HttpFoundation\Cookie;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\home_user;
use \Illuminate\Support\Facades\Crypt;
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
        return View('Home.Index.registration');
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
        //return $input;
        $name =  $input['username'];

        // 错误显示信息
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
        $user = home_user::where('username',$name)->first();
        // dd($user);
        // return Crypt::decrypt($user->password);
        if($input['password'] ==  Crypt::decrypt($user->password)){
            //如果登录成功，将登录用户信息保存到session中
            session()->put('users',$user);
            return 1;
            
            // return redirect('/')->with('errors','用户名不存在');
        }else{
            return 2;
  
        }
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
