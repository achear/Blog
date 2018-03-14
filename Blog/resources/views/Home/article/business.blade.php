@extends('home.layouts.index')
{{--  文章列表  --}}
@section('business')

        <!-- CONTENT BEGIN -->
        <div id="content" class="right_sidebar">
        	<div class="inner">
            	<div class="general_content">
                	<div class="main_content">
                    	<div class="block_breadcrumbs">
                        	<div class="text"><p>你在这里:</p></div>
                            
                            <ul>
                            	<li><a href="/">首页</a></li>
                                <li>{{$cate['cate_name']}}</li>
                            </ul>
                        </div>
                        <div class="separator" style="height:30px;"></div>
                        
                        <h2>{{$cate['cate_name']}}</h2>
                        
                        <p class="general_subtitle">{{$cate['cate_title']}}</p>
                        
                        <div class="line_4" style="margin:0px 0px 18px;"></div>
                        
                        <article class="block_topic_post_feature">
                        	<div class="f_pic"><a href="news_post.html" class="general_pic_hover scale"><img src="images/pic_business_big.jpg" alt="" /></a></div>
                            
                            <div class="content">
                            	<p class="title"><a href="news_post.html">{{$cate['cate_keywords']}}</a></p>
                                
                                <div class="info">
                                	<div class="date"><p>2012年11月</p></div>
                                    
                                    <div class="r_part">
                                    	<div class="category"><p><a href="#">查看次数</a></p></div>
                                        <a href="#" class="views">{{$cate['cate_view']}}</a>
                                    </div>
                                </div>
                                    
                                <p class="text">{{$cate['cate_description']}}</p>
                            </div>
                            
                            <div class="clearboth"></div>
                        </article>
                        
                        <div class="line_2" style="margin:21px 0px 21px;"></div>
                        
                        <div class="block_topic_news">
                            @foreach($data as $v)
                        	<article class="block_topic_post">
                            	<p class="title"><a href="{{url('/home/article/'.$v->art_id.'/info')}}">{{$v->art_title}}</a></p>
                                <div class="f_pic"><a href="{{url('/home/article/'.$v->art_id.'/info')}}" class="general_pic_hover scale"><img src="{{$v->art_thumb}}" style="width: 266px; height: 121.86px;"/></a></div>
                                
                                <div class="info">
                                	<div class="date"><p>11 July, 2012</p></div>
                                    
                                    <div class="r_part">
                                    	<div class="category"><p><a href="#">查看次数</a></p></div>
                                        <a href="#" class="views">{{$v->art_view}}</a>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                        </div>
                        
                        <div class="line_2" style="margin:25px 0px 25px;"></div>
                        
                        <div class="block_pager">
                        	<a href="#" class="prev">Previous</a>
                            <a href="#" class="next">Next</a>
                            
                            <div class="pages">
                                
                                    {!! $data->render() !!}
                                
                            	
                            </div>
                            
                            <div class="clearboth"></div>
                        </div>
                        
                    </div>
                    

             
                            
         
    
    	<!-- CONTENT END -->
  


@endsection