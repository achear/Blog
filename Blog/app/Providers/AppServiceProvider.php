<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\Cate;
use App\Model\Links;
use App\Model\Advert;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $cate = Cate::get();
        //获取所有的子分类
        $zcate = [];
        //获取所有的父类
        foreach($cate as $v) {
            if ($v['cate_pid'] == 0) {
                //$arr['cate_id'] = $v['cate_id'];
                //array_push($arr,$v['cate_id']);
                //dump($arr['cate_id']);
                foreach($cate as $m) {
                    if ($m['cate_pid'] == $v['cate_id']) {
                        $zcate[] = $m;
                        //dump($m);
                    }
                }
            }
        }
        //获取父分类
        $cates = Cate::where('cate_pid','0')->get();
        //获取友情链接
        $links = Links::get();
        //获取广告
        $advert = Advert::get();
        view()->share('zcate',$zcate); 
        view()->share('cates',$cates);
        view()->share('links',$links);
        view()->share('advert',$advert);  
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
