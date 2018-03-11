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
    public function list()
    {
        //
        

        return View('home.article.business');

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
