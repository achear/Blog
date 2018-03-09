<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Carousel;
use DB;
class ConfigController extends Controller
{
    /**
     * 后台显示轮播图
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function CaroEdit(Request $request)
    {
        
        $car = Carousel::orderBy('carousel_order','desc')->get();
        return View('admin.config.carousel',['data'=>$car]);
    }
    /**
     * 点击切换轮播图展示页
     */
    public function CarUpdata(Request $request)
    {
        
        $id = $request->input('id');
        $max = DB::table('carousel')->max('carousel_order')+1;
        $res = Carousel::find($id);
        $res->carousel_order = $max;
        $res->save();
        if($res){
            $data = 1;
        }else{
            $data = 0;
        }
        return $data;
    }

    /**
     * 轮播图后台修改
     */
    public function CarChange(Request $request)
    {

        $data = $request->all();
        
        $id = $data['carousel_id'];
        $car = Carousel::find($id);
        $car->carousel_title = $data['carousel_title'];
        $car->carousel_content = $data['carousel_content'];
        $car->carousel_photo = $data['carousel_photo'];
        $res = $car->save();
        return redirect('/admin/config')->with('msg','添加成功');
        
    }
    
    /** 
    * 文件上传处理
    */
    public function upload(Request $request)
    {
        //1.获取上传文件
        $file = $request->file('file');
//        2.判断上传文件的有效性
        if($file->isValid()){
//            获取文件后缀名
            $ext = $file->getClientOriginalExtension();    //文件拓展名
            //生成新文件名
            $newfilename = md5(date('YmdHis').rand(1000,9999).uniqid()).'.'.$ext;
            //1.上传到本地服务器
//            return $newfilename;
            $res = $file->move(public_path().'/Home/img', $newfilename);

            return explode("img",$newfilename);

        }
    
    }

}
