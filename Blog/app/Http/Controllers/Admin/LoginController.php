<?php


namespace App\Http\Controllers\Admin;
use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Org\code\Code;
require_once app_path().'/Org/code/Code.class.php';
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Model\users;

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

    //处理用户登录逻辑
    public function doLogin(Request $request)
    {
        //dd('123');
          $input = $request->except('_token');
//          2. 验证数据有效性
//        $validator = Validator::make(需要验证的数据，验证规则，错误提示信息);

//        验证规则
          $rule = [
              'username'=>'required|between:5,18',
              'password'=>'required|between:5,20|alpha_dash'
          ];

//          错误提示信息
        $msg =[
            'username.required'=>'用户名必须输入',
            'username.between'=>'用户名应该在5到18位之间',
            'password.required'=>'密码必须输入',
            'password.between'=>'密码应该在5到20位之间',
            'password.alpha_dash'=>'密码必须是数字字母下划线',
        ];
        $validator = Validator::make($input,$rule,$msg);
        //如果验证失败
        if($validator->fails()){
            return redirect('admin/login')->withErrors($validator)->withInput();
        }


//        3. 验证用户是否存在

        $user = Users::where('user_name',$input['username'])->first();
        if(empty($user)){
            return redirect('admin/login')->with('errors','用户名不存在');
        }

//        4. 密码是否正确
        if($input['password'] !=  $user->user_pwd ){
            return redirect('admin/login')->with('errors','密码不对');
        }

//        5. 验证码
        if(strtolower($input['code'])  != strtolower(session('code')) ){
            return redirect('admin/login')->with('errors','验证码不对');
        }

        //如果登录成功，将登录用户信息保存到session中

        session()->put('user',$user);
        //dd($res);
        return redirect('admin/index');

    }

    public function session()
    {
        //清空session
        //session()->flush();
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
