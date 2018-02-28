<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *  前台首页
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return View('home/index/index');
    }

 
}
