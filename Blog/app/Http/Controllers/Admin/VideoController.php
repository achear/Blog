<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Video;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $data = Video::all();
        //   dd($data);
          return view('admin.video.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.video.add');
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
        $input = $request->except('_token','video_file');
        // dd($input);
        $fiel = $this->upload($request);
        $input['video_field'] = $fiel;
        $res = Video::create($input);
        if($res and $fiel){
            return back()->with('msg','添加成功');
        }else{
            return back()->with('msg','添加失败');
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
        $field = Video::where('video_id',$id)->first();
        return view('admin.video.edit',['id'=>$id,'field'=>$field]);
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
            $result =  Video::find($id)->delete();
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
    public function upload($request)
    {

        // $file = Request::file('video_field');
        // dump($file);

        // //生成新的文件名
        // $newfilename = md5(date('YmdHis').rand(1000,9999).uniqid()).'.'.$ext;

        // $path = Request::file('video_field')->move("./video",'1.mp4');
        // dump($path->getPathname());
        // dump($path->getRealPath());
        // dump($path->getExtension());

        // 1、获取上传文件
        $file = $request->file('video_field');
        // return $file;
        // 2、判断上传文件的有效性
        if($file->isValid()){
            //获取文件的后缀名
            $ext = $file->getClientOriginalExtension();
            // return $ext;
            //生成新的文件名
            $newfilename = md5(date('YmdHis').rand(1000,9999).uniqid()).'.'.$ext;
            // 移动文件到指定位置
            // return $newfilename;
            $res = $file->move(public_path().'./video',$newfilename);
            //将文件上传的位置返回给客户端
            return './upload/'.$newfilename;
        }
    }
}
