<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redis;
use App\Model\Cate;
use App\Model\Comment;
use App\Model\Article;
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
        
        // $v = json_decode($data,true);
        $data = Article::where('cate_id',$id)->paginate(2);
        $cate = Cate::find($id);
        //dd($cate);
        return View('home.article.business',['data'=>$data,'cate'=>$cate]);

    }

    public function search(Request $request)
    {
        // $input = implode('',$request->only('search'));
        
        $data = Article::where(function($query) use($request){
            //将传过来的数组转换成字符串
            $search = implode('',$request->only('search'));

            if (!empty($search)) {
                $query->where('art_title','like','%'.$search.'%');
            }
        })->paginate(2);


        return view('home.article.business',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //文章详情
        $data = Article::find($id);
        //上一篇文章
        $prev = Article::where('art_id','<',$id)->orderBy('art_id','desc')->first();
        //dd($prev);
        //下一篇文章
        $next = Article::where('art_id','>',$id)->orderBy('art_id','asc')->first();
        //评论
        $commit = Comment::where('commit_id',$id)->get();
        //评论数量
        $num = count(Comment::where('commit_id',$id)->get());
        //dd($num);
        //$v = json_decode($data,true);
        return view('home.article.info',['data'=>$data,'commit'=>$commit,'num'=>$num,'prev'=>$prev,'next'=>$next]);
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
    }
}
