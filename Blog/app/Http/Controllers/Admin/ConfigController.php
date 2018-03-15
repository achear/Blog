<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Model\config;
use App\Model\Carousel;

class ConfigController extends Controller
{
    /*
     * 将数据表config的对应字段的内容写入config目录下的webconfig.php文件
     */
    public function putContent()
    {
        //1. 从数据库中读取相关内容数据
        $content = Config::lists('conf_content','conf_name')->all();
        dd($content);


        //数组不能直接写入文件，向文件中只能写字符（数组格式的字符串）
        //将数组变成字符串
        $str = '<?php return '.var_export($content,true).';';

        //2. 创建webconfig.php文件
        //3. 将数据写入webconfig.php文件
        file_put_contents(config_path().'/webconfig.php',$str);

    }
    
    /**
     * 配置列表
     * 
     */
    public function index()
    {
        $config = config::all();
        $count = $config->count();

        return view('Admin/config/list',['config'=>$config,'count'=>$count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/config/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except('_token');
        if( !empty( trim($input['conf_name'])  )   and  !empty( trim($input['conf_content'])  ) ){
            $res = config::create($input);        
            if($res){
                //如果网站配置项添加成功，调用putContent（）将数据同步到webconfig.php文件
                $this->putContent();
                // return redirect('admin/config');
                return back()->with('msg','添加成功');
            }else{
                return back()->with('msg','添加失败');
            }
        }else{
            return back()->with('msg','名称和内容不能为空');
        }


    }

    /**
     * 删除
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $config = config::find($id);

        $config->delete();

        return back();
    }

    /**
     * 修改页
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = config::where('conf_id',$id)->first();
        // dd($data->conf_content);
        return view('Admin/config/edit',['id'=>$id,'data'=>$data]);
    }

    /**
     * 修改操作
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $config = config::where('config_id',$id)->get();
        //开发中$id传过来是｛  num  ｝形式，用正则把他取出来
        preg_match('/\d{1,11}/',$id,$config_id);
        //当前数据库的内容
        $config = config::find($config_id[0]);
        //传过来的内容
        $input = $request->except(['_token','_method']);

        // var_dump($config->conf_content);
        // die;
        // dd($input);
        if( !empty( trim($input['conf_name'])  )   and  !empty( trim($input['conf_content'])  ) ){
             //到数据库执行修改
            $config->conf_title = $input['conf_title'];
            $config->conf_name = $input['conf_name'];
            $config->conf_content = $input['conf_content'];
            $config->conf_order = $input['conf_order'];
            $config->conf_tips = $input['conf_tips'];
            $config->field_type = $input['field_type'];
            $config->field_value = $input['field_value'];
            
            //  dd($config);
            $res = $config->save();
            // $res = config::where('config_id',$id)->update($input);
            // dd($res);
            if($res){
                //如果网站配置项添加成功，调用putContent（）将数据同步到webconfig.php文件
                $this->putContent();
                return back()->with('msg','操作成功');
            }else{
                return back()->with('msg','操作失败');
            }
        }else{
            return back()->with('msg','名称和内容不能为空');
        }
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
