<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Advert;

class AdvertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          //
          $data = Advert::all();
          //dd($data);
          return view('admin.advert.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.advert.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $input = $request->except('_token','file_upload');
        $res = Advert::create($input);
        if($res){
            return redirect('admin/advert');
        }else{
            return back();
        }
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
        $field = Advert::where('advert_id',$id)->first();
        return view('admin.advert.edit',['id'=>$id,'field'=>$field]);
    }

    /**i
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        echo 1;

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
        //
            //        找到要删除的记录，并删除
            $result =  Advert::find($id)->delete();
            if($result){
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

    /*
     *文件上传处理   
    */
    public function upload(Request $request)
    {
        // 1、获取上传文件
        $file = $request->file('file_upload');
        return $file;
        // 2、判断上传文件的有效性
        if($file->isValid()){
            //获取文件的后缀名
            $ext = $file->getClientOriginalExtension();
            // return $ext;
            //生成新的文件名
            $newfilename = md5(date('YmdHis').rand(1000,9999).uniqid()).'.'.$ext;
            // 移动文件到指定位置
            // return $newfilename;
            $res = $file->move(public_path().'/upload',$newfilename);
            //将文件上传的位置返回给客户端
            return '/upload/'.$newfilename;
        }
    }
}
