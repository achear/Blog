<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redis;
use App\Model\Cate;
use App\Model\Article;

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
        $data = Article::find($id);
        //dd($data);
        //$v = json_decode($data,true);
        return view('home.article.info',['data'=>$data]);
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
