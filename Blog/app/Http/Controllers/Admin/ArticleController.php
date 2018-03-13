<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Model\Cate;
use App\Model\Article;

class ArticleController extends Controller
{
    /*
     *文件上传处理   
    */
    public function upload(Request $request)
    {
        // 1、获取上传文件
        $file = $request->file('file_upload');
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
            $res = $file->move(public_path().'/upload',$newfilename);
            //将文件上传的位置返回给客户端
            return '/upload/'.$newfilename;
        }
    }

    /**
     *返回文章分类
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if ($cate_id) {
        //     $articles = Article::where('cate_id',$id)->get();
        // } else {
            
        // }
        $articles = Article::get();
        //获取文章分类数据
        
        return view('admin.article.list',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //获取格式化的分类数据
        $cates = (new Cate())->getTree();
        // return 1;
        return view('Admin.article.add',compact('cates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except('_token','file_upload');
        $user = session::get('user');
        //dd($user['user_id']);
        $input['user_id'] = $user['user_id'];
        $res = Article::create($input);
        if($res){
            return redirect('admin/article');
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
        $articles = Article::where('cate_id',$id)->get();
        
        return view('admin.article.list',compact('articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
        
        $res =  Article::find($id)->delete();
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
    
}
