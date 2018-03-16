<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Model\Carousel;
use App\Model\home_user;
use App\Model\Article;
use App\Model\Cate;
use \Illuminate\Support\Facades\Crypt;
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
        $article = Article::get();
        //dd($article);
        // $cate = Cate::get();
        // //获取所有的子分类
        // $zcate = [];
        // //获取所有的父类
        // foreach($cate as $v) {
        //     if ($v['cate_pid'] == 0) {
        //         //$arr['cate_id'] = $v['cate_id'];
        //         //array_push($arr,$v['cate_id']);
        //         //dump($arr['cate_id']);
        //         foreach($cate as $m) {
        //             if ($m['cate_pid'] == $v['cate_id']) {
        //                 $zcate[] = $m;
        //                 //dump($m);
        //             }
        //         }
        //     }
        // }
        //获取父分类
        $cate = Cate::where('cate_pid','0')->get();
        //dd($zcate);
        //return $arr;
        //dd($arr);
        return View('home/index/index',['data'=>$data,'article'=>$article,'cate'=>$cate]);
    }

    

    public function store(Request $request)
    {

      
        $data = $request->except('_token');
        $user = new home_user;
        $user->username = $data['username'];
        $user->password = Crypt::encrypt($data['password']);
        
        $res = $user->save();
        if ($res) {
            return redirect('/')->with('success','注册成功');
        } else {
            return back()->with('error','注册失败');
        }
    }

    public function show()
    {
        
        return view('home.index.personal');
    }

    /**
     * 个人中心页
     */
    public function personal()
    {
      
        return view('home.index.personal');
    }    


   
 
}
