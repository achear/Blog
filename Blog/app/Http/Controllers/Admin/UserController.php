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
        $user = new Users;
        //获取所有的用户数据
        $user = Users::all();
        //导入到首页中
        return view('admin.user.list',['user'=>$user]);
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
        //
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
