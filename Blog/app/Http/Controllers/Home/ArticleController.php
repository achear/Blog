<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redis;
use App\Model\Cate;
use App\Model\Article;
use App\Model\home_user;
use Illuminate\Support\Facades\Session;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *  前台文章详情页
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Cate::first();
        // return $data;
        $data->c_article;
        $v = json_decode($data,true);
        //dd($v);
  
        return View('home.article.article',['data'=>$v]);
    }

    /**
     * Show the form for creating a new resource.
     *  前台文章列表页
     * @return \Illuminate\Http\Response
     */
    public function list($id)
    {
        // $data = Cate::first();
        // // return $data;
        // $data->c_article;
        // $v = json_decode($data,true);
        $data = Article::where('cate_id',$id)->paginate(2);
        //dd($data);

        return View('home.article.business',['data'=>$data]);

    }

    public function search(Request $request)
    {
        // $input = implode('',$request->only('search'));
        // dd($input);
        $data = Article::where(function($query) use($request){
            //将传过来的数组转换成字符串
            $search = implode('',$request->only('search'));

            if (!empty($search)) {
                $query->where('art_title','like','%'.$search.'%');
            }
        })->paginate(2);
        

        return view('home.article.search',['data'=>$data]);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Article::find($id);
        //dd($data);
        //$v = json_decode($data,true);
        return view('home.article.info',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *  前台文章发表页
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function publish(Request $request)
    {
        //
        return view('home.article.publish');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
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
     * Remove the specified resource from storage.
     * 前台添加文章
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addarti(Request $request)
    {

  
    

        $input = $request->except('_token','file_upload');
       
        $user = session::get('users');
        //dd($user['user_id']);
        $input['user_id'] = $user['id'];
        $res = Article::create($input);
  
        if($res){
            return redirect('/')->with('发布成功，正在跳转。。。。');
        }else{
            return back();
        }
    }

    // 文章发表2
    public function style2()
    {
        return view('home.article.style2');
    }

        /**
     * 个人中心文章列表
     */

    public function youart($id)
    {

       // home_user::where()
  
       $data = Article::where('user_id',$id)->get();
    

       return view('home.index.youart',['data'=>$data]);
   
    }
}
