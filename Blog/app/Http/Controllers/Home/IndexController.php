<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Model\Carousel;
use App\Model\home_user;
use App\Model\Article;
use App\Model\Cate;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *  前台首页
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Carousel::get();
        //$text = Article::take(3)->get();
        $article = Article::paginate(4);
        //dd($article);
        $cate = Cate::where('cate_pid','0')->get();
        //dd($cate);
        return View('home/index/index',['data'=>$data,'article'=>$article,'cate'=>$cate]);
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $user = new home_user;
        $user->username = $data['username'];
        $user->password = $data['password'];

        $res = $user->save();
        if ($res) {
            return redirect('/')->with('success','注册成功');
        } else {
            return back()->with('error','注册失败');
        }
    }

    public function show()
    {
        echo 456;
    }
 
}
