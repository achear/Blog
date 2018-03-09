<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Cate;

class CateController extends Controller
{
    /**
     * 修改排序
     */
    public function changeOrder(Request $request)
    {
        $input = $request->all();
        //return $input;
        $cate = Cate::findOrFail($input['id']);
        $res = $cate->update(['cate_order'=>$input['order']]);
        //给客户端返回修改是否成功的提示信息
        if($res){
            $data=[
                'status'=>0,
                'msg'=>'修改成功'
            ];
        }else{
            $data=[
                'status'=>0,
                'msg'=>'修改失败'
            ];
        }
        return $data;
    }

    /**
     * 返回分类列表
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取分类数据
        //$cates = Cate::get();
        $cates = (new Cate())->getTree();
        // 数据格式化（排序、缩进）
        //dd($cates);
        return view('admin.cate.list',compact('cates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 获取一级分类
        // $cate = new Cate;
        $cateone = Cate::where('cate_pid',0)->get();
        return view('admin.cate.add',compact('cateone')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //1. 获取提交的分类数据
        $input = $request->except('_token');
       //var_dump($input);
        //2.添加到数据库
        $res = Cate::create($input);
        //3.判断添加是否成功
        if($res){
            return redirect('admin/cate')->with('msg','添加成功');
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
