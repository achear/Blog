<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Links;

class LinksController extends Controller
{

    /**
     * 修改排序
     */
    public function changeOrder(Request $request)
    {
        $input = $request->all();
        //return $input;
        $links = Links::findOrFail($input['id']);
        $res = $links->update(['link_order'=>$input['order']]);
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
     * 全部友情链接列表
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Links::orderBy('link_order','asc')->get();
        //dd($data);
        return view('admin.links.list',compact('data'));
    }

    /**
     * 添加友情链接
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $link = (new Links())->get();
        return view('admin.links.add',compact('link'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           //        1 获取提交的分类数据
           $input = $request->except('_token');
           //        2. 添加到数据库
              // dd($input);
               $res =  Links::create($input);
           //        3.判断添加是否成功
               if($res){
                   return redirect('admin/links')->with('msg','添加成功');
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
     *   编辑友情链接
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($link_id)
    {
        $field = Links::find($link_id);
        return view('admin.links.edit',compact('field'));
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
         //获取提交的数据
         $link = Links::find($id);
         $input = $request->except(['_token']);
         $link->link_name = $input['link_name'];
         $link->link_title = $input['link_title'];
         $link->link_url = $input['link_url'];        
         $link->link_order = $input['link_order'];  

         $res = $link->save();
 
         if ($res) {
             $data = [
                 'status'=>0,
                 'msg'=>'修改成功'
             ];
         } else {
             $data = [
                 'status'=>1,
                 'msg'=>'修改失败'
             ];
         }
 
         return $data;
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
            //        找到要删除的记录，并删除
            $result =  Links::find($id)->delete();
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
    
}
