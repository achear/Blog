<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    //关联的表名
    public $table = 'blog_category';
    public $primaryKey = 'cate_id';
    public $guarded = [];
//  public $fillable=['cate_name','cate_title','cate_keywords'];

    public $timestamps = false;


    //返回格式化的分类数据
    public function getTree()
    {
        $cates = $this->orderBy('cate_order','asc')->get();
       // Cate::orderBy('cate_id','asc')->paginate($request->input('num', 5));
        return $this->tree($cates);
    }


    //数据格式化（缩进、排序）
    public function tree($Category,$pid=0)
    {
        //1.声明一个空数组存放格式化后的分类数据
        $arr = [];
        //2.获取所有的一级类
        //每获取一个一级类，接着获取此一级类下的二级类
        foreach($Category as $v){
            //        找一级类
            if($v['cate_pid'] == $pid){
                //存放到arr中
                $v['cate_names'] = $v['cate_name'];
                $arr[] = $v;
                foreach ($Category as $m){
                    //获取此一级类下的二级类
                    if($m['cate_pid'] == $v['cate_id']){
                        //如果是二级类，在分类名称前添加几个空格
                        $m['cate_names'] = '├── '.$m['cate_name'];
                        $arr[] = $m;
                    }
                }
            }
        }



        //3. 返回格式化后的数据，即返回$arr;
        return $arr;
    }
}
