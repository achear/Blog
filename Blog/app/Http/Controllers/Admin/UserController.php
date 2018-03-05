<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Model\users;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Users::orderBy('user_id','asc')
            ->where(function($query) use($request){
                //检测关键字
                $username = $request->input('keywords1');
                $email = $request->input('keywords2');

                //如果用户名不为空
                if(!empty($username)) {
                    $query->where('user_name','like','%'.$username.'%');
                }
                //如果邮箱不为空
                if(!empty($email)) {
                    $query->where('user_email','like','%'.$email.'%');
                }
            })
            ->paginate($request->input('num', 5));
            //如果用户选择了每页显示多少条，那就按照传过来的参数显示，如果没有，那就默认一页两条
        return view('admin.user.list',['user'=>$user, 'request'=> $request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //return $data;
        $user = new Users;
        $user->user_name = $data['user_name'];
        $user->user_sex = $data['user_sex'];
        $user->user_qq = $data['user_qq'];
        $user->user_pwd = $data['user_pwd'];

        $res = $user->save();

        if ($res) {
            $data = [
                'status'=>0,
                'msg'=>'添加成功'
            ];
        } else {
            $data = [
                'status'=>1,
                'msg'=>'添加失败'
            ];
        }

        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Users::find($id);
        return view('admin.user.pass',['user'=>$user]);
    }

    public function pass(Request $request,$id)
    {
        $user = Users::find($id);
        $input = $request->all();
        if ($input['oldpass'] != $user->user_pwd) {
            $data = [
                'status'=> 1,
                'msg' => '原密码错误'
            ];
            return $data;
        }

        if ($input['newpass'] == $user->user_pwd) {
            $data = [
                'status'=> 1,
                'msg' => '不能使用相同的密码'
            ];
            return $data;
        }

        $user->user_pwd = $input['newpass'];
        $res = $user->save();

        if ($res) {
            $data = [
                'status'=>0,
                'msg'=>'修改密码成功'
            ];
        } else {
            $data = [
                'status'=>1,
                'msg'=>'修改密码失败'
            ];
        }

        return $data;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Users::findOrFail($id);
        return view('admin.user.edit')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Users::find($id);
        //获取提交的数据
        $input = $request->all();
        //到数据库执行修改
        $user->user_name = $input['user_name'];
        $user->user_sex = $input['user_sex'];
        $user->user_qq = $input['user_qq'];
        

        $res = $user->save();

        if ($res) {
            $data = [
                'status'=>0,
                'msg'=>'修改成功'
            ];
        } else {
            $data = [
                'status'=>1,
                'msg'=>'修改失败'
            ];
        }

        return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //        找到要删除的记录，并删除
       $res =  Users::find($id)->delete();
       if($res){
           $data = [
               'status'=>0,
               'msg'=>'删除成功'
           ];
       }else{
           $data = [
               'status'=>1,
               'msg'=>'删除失败'
           ];
       }

       return $data;
    }

    //修改用户状态
    public function changeState(Request $request)
    {
        $input = $request->all();
        //dd($input);
//        return $input;
        //根据id获取要修改状态的用户
        $user = Users::find($input['id']);
        
        $st = ($user->user_freeze == 0)? 1:0;
        //更改状态
        
        $user->user_freeze = $st;
        $res = $user->save();
        
        if($res){
            $data = [
                'status'=>0,
                'msg'=>'添加成功'
            ];
        }else{
            $data = [
                'status'=>1,
                'msg'=>'添加失败'
            ];
        }

        return $data;
    }

    //批量删除用户
    public function del(Request $request)
    {
        $input = $request->input('ids');
        return $input;
//        return $input;
        $res = Users::destroy($input);

        if($res){
            $data = [
                'status'=>0,
                'msg'=>'删除成功'
            ];
        }else{
            $data = [
                'status'=>1,
                'msg'=>'删除失败'
            ];
        }

        return $data;
    }

    //修改用户密码
    public function xgmm($id)
    {
        return $id;
    }
}
