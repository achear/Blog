<?php

namespace App\Http\Middleware;

use App\Model\User;
use Closure;

class HasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


//        1. 获取当前访问的路由  admin/user/{id}/edit
//        $uri = $request->path();
//        $url = $request->url();

//        获取当前路由对应的控制器的方法名 "App\Http\Controllers\Admin\LoginController@index"
        $route = \Route::current()->getActionName();
//        dd($route);


//        判断session中是否有当期用户的权限
        if(session('auth')){
            if(in_array($route,session('auth'))){
                return $next($request);
            }else{
                //如果没有权限，返回一个提示
                return redirect('noaccess');
            }
        }else{
            //        定义一个数组，存放当前用户拥有的所有的权限
            $own_permission = [];

//        2. 获取当前用户拥有的权限（也就找到当前用户可以访问哪些路由）
//            2.1 获取当前用户拥有的角色
//            $user = User::find(session('user')->user_id);
            $user = session('user');
            $roles = $user->role;
//            dd($roles);
//        2.2 根据拥有的角色查找关联的权限
            foreach ($roles as $role) {
                //查找当前角色的拥有的权限
                $perms = $role->permission;
//            dd($perms);
//            获取当前权限对应的路由对应的控制器的方法名
                foreach ($perms as $perm) {
                    $own_permission[] = $perm->per_url;

                }
//            dd($own_permission);
            }
//            dd($own_permission);
            //去掉重复的权限
            $own_permission = array_unique($own_permission);
            //存入session中
            session()->push('auth',$own_permission);
//        dd($own_permission);

//        2. 判断当前访问路由是否在用户权限列表中，如果在放行；如果不在，给一个没有权限的提示
            if(in_array($route,$own_permission)){
                return $next($request);
            }else{
                //如果没有权限，返回一个提示
                return redirect('noaccess');
            }

        }



    }
}
