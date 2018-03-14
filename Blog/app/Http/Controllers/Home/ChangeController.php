<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use \App\Model\home_user;
use \Symfony\Component\HttpFoundation\Session;
use \Symfony\Component\HttpFoundation\Cookie;
use \Illuminate\Support\Facades\Crypt;

class ChangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *个人中心页
     * @return \Illuminate\Http\Response
     */
    public function personal()
    {
        return view('home.index.personal');
    } 

    /**
     * Show the form for creating a new resource.
     *个人中心修改
     * @return \Illuminate\Http\Response
     */
   
    // public function changepass()
    // {
    //         //修改密码
    public function modify_password(Request $request)
    {

        // $res =     Crypt::decrypt(123123);
        // dd($res);
        if($request->isMethod('post')){
            $input = $request->all();
     
            $rules = [
                'password_o'=>'required',
                'password'=>'required|between:6,20|confirmed',
            ];
            $messages = [
                'password_o.required'=>'旧密码不能为空',
                'password.required'=>'新密码不能为空',
                'password.between'=>'新密码必须在6至20位之间',
                'password.confirmed'=>'新密码与确认密码不一致',
            ];
            $validator = Validator::make($input,$rules,$messages);
            // dd($validator);
            if($validator->fails()){
                return back()->withErrors($validator);
            }else{
                //$userModel = new User();
               
               
                $user = home_user::find(session('users')->id);
            
                if($input['password_o'] != Crypt::decrypt($user->password)){
                    return back()->with('errors','原密码错误');
                }else{
                    $user->password = Crypt::encrypt($input['password']);
                    if($user->save()){
                        
                        return back()->with('errors','修改成功');
                      
                    }else{
                        return back()->with('errors','修改失败');
                    }
                }
            }
        }
        return view('home.index.personal');
    }
    // }

}
