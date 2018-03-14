<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Cate;
class CateController extends Controller
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
        //              dd($cates);
        //数据格式化（排序、缩进）

        return view('admin.cate.list',compact('cates'));
    }

    /**
     * Show the form for creating a new resource.
     * 添加分类
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
    //        1 获取提交的分类数据
        $input = $request->except('_token','file_upload');
    //        2. 添加到数据库
        //dd($input);
        $res =  Cate::create($input);
    //        3.判断添加是否成功
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
         $cate = Cate::find($id);
         return view('admin.cate.list',['cate'=>$cate]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($cate_id)
    {
        $field = Cate::find($cate_id);
        $cateone = Cate::where('cate_pid',0)->get();
        return view('admin.cate.edit',compact('field','cateone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)   //更新分类
    {
        
        //获取提交的数据
        $cate = Cate::find($id);
        $input = $request->except(['_token']);
        $cate->cate_name = $input['cate_name'];
        $cate->cate_title = $input['cate_title'];
        $cate->cate_keywords = $input['cate_keywords'];
        $cate->cate_description  = $input['cate_description'];
        

        $res = $cate->save();

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
      // 是否有二级类
       $count =  Cate::where('cate_pid',$id)->count();
       $res =  Cate::find($id);
       if($res->cate_pid == 0 && $count){
            $data = [
               'status'=>2,
               'msg'=>'一级分类不允许删除'
           ];
           return $data;
         }

    //        找到要删除的记录，并删除
        $result =  Cate::find($id)->delete();
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


    //批量删除用户
    // public function del(Request $request)
    // {
    //     $input = $request->input('ids');
    // //  return $input;
    // //        return $input;
    //     $res = Cate::destroy($input);

    //     if($res){
    //         $data = [
    //             'status'=>0,
    //             'msg'=>'删除成功'
    //         ];
    //     }else{
    //         $data = [
    //             'status'=>1,
    //             'msg'=>'删除失败'
    //         ];
    //     }

    //     return $data;
    // }
 
}
