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
        
        // $i = $request->$i;
        
        // $id = $request->input('id',1);
        // $car = new Carousel;
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
        
        //     $file = $data['carousel_photo'];    //接文件
        //     //文件是否上传成功
        //     // dd($file);
        //     if($file->isValid()){	//判断文件是否上传成功
        //         $originalName = $file->getClientOriginalName(); //源文件名
        //         $ext = $file->getClientOriginalExtension();    //文件拓展名
        //         $type = $file->getClientMimeType(); //文件类型
        //         $realPath = $file->getRealPath();   //临时文件的绝对路径
        //         $fileName = date('Y-m-d-H-i-s').'-'.uniqid().'.'.$ext;  //新文件名
        //         $bool = Storage::disk('upload')->put($fileName,file_get_contents($realPath));   //传成功返回bool值
        //         //将文件从临时目录移动到制定目录
        //         $path = $file->move(public_path().'/layout/images',$newName);
              
        //     }
        // dd($path);
        // dd();
        // $data = $request->all();
        // return $data;
        $id = $data['carousel_id'];
        $car = Carousel::find($id);
        // dd($car);
        $car->carousel_title = $data['carousel_title'];
        $car->carousel_content = $data['carousel_content'];
        $car->carousel_photo = $data['carousel_photo'];

        $res = $car->save();
        dump($res);
  

   
    }

    public function PhotoUp()
    {
        // Storage::disk('local')->put('2.jpg',file_get_contents(public_path().'/1.jpg'));


    }
    
    /*
     * 文件上传处理
     */
    public function upload(Request $request)
    {
        //1.获取上传文件
        $file = $request->file('file_upload');
//        return $file;
//        2.判断上传文件的有效性
        if($file->isValid()){
//            获取文件后缀名
            $ext = $file->getClientOriginalExtension();    //文件拓展名

            //生成新文件名

            $newfilename = md5(date('YmdHis').rand(1000,9999).uniqid()).'.'.$ext;



            //1.上传到本地服务器
//            return $newfilename;
           $res = $file->move(public_path().'/Home/images', $newfilename);


            return $newfilename;

        }
    
    }

}
