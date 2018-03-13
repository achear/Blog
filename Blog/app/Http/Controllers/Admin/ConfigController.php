<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Model\config;

class ConfigController extends Controller
{
    /*
     * 将数据表config的对应字段的内容写入config目录下的webconfig.php文件
     */
    public function putContent()
    {
        //1. 从数据库中读取相关内容数据
        $content = Config::lists('config_content','config_name')->all();


        //数组不能直接写入文件，向文件中只能写字符（数组格式的字符串）
        //将数组变成字符串
        $str = '<?php return '.var_export($content,true).';';

        //2. 创建webconfig.php文件
        //3. 将数据写入webconfig.php文件
        file_put_contents(config_path().'/webconfig.php',$str);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
        if( !empty( trim($input['config_name'])  )   and  !empty( trim($input['config_content'])  ) ){
            $res = config::create($input);        
            if($res){
                //如果网站配置项添加成功，调用putContent（）将数据同步到webconfig.php文件
                $this->putContent();
                // return redirect('admin/config');
                return back();
            }else{
                return back();
            }
        }else{
            return back();
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
        $config = config::find($id);

        $config->delete();

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = config::where('config_id',$id)->first();
        // dd($data);
        return view('Admin/config/edit',['id'=>$id,'data'=>$data]);
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
        // $config = config::where('config_id',$id)->get();
        preg_match('/\d{1,11}/',$id,$config_id);
        $config = config::find($config_id)[0];
        //dd($config[0]);
        $input = $request->except(['_token','_method']);
        // dd($input);
        if( !empty( trim($input['config_name'])  )   and  !empty( trim($input['config_content'])  ) ){
             //到数据库执行修改
            $config->config_title = $input['config_title'];
            $config->config_name = $input['config_name'];
            $config->config_content = $input['config_content'];
            $config->config_order = $input['config_order'];
            $config->config_tips = $input['config_tips'];
            $config->config_type = $input['config_type'];
            
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
}
