@extends('home.layouts.index')
{{--  文章列表  --}}
@section('business')

        <!-- CONTENT BEGIN -->
        <div id="content" class="right_sidebar">
        	<div class="inner">
            	<div class="general_content">
                	<div class="main_content">
                    	<div class="block_breadcrumbs">
                        	<div class="text"><p>You are here:</p></div>
                            
                            <ul>
                            	<li><a href="index.html">首页</a></li>
                                <li>商业</li>
                            </ul>
                        </div>
                        <div class="separator" style="height:30px;"></div>
                        
                        <h2>商业</h2>
                        
                        <p class="general_subtitle">Eestablished fact that a reader will be distracted by the readable content of a page when looking at its layout are many variations of passages have suffered alteration.</p>
                        
                        <div class="line_4" style="margin:0px 0px 18px;"></div>
                        
                        <article class="block_topic_post_feature">
                        	<div class="f_pic"><a href="news_post.html" class="general_pic_hover scale"><img src="images/pic_business_big.jpg" alt="" /></a></div>
                            
                            <div class="content">
                            	<p class="title"><a href="news_post.html">Publishing packages and web page editors now use.</a></p>
                                
                                <div class="info">
                                	<div class="date"><p>11 July, 2012</p></div>
                                    
                                    <div class="r_part">
                                    	<div class="category"><p><a href="#">Business</a></p></div>
                                        <a href="#" class="views">220</a>
                                    </div>
                                </div>
                                    
                                <p class="text">Many variations of passages of available, but the majority have suffered alteration in some form. Humour, or randomised words which don't look even slightly believable. If you are going to use a passage of you need to be sure.</p>
                            </div>
                            
                            <div class="clearboth"></div>
                        </article>
                        
                        <div class="line_2" style="margin:21px 0px 21px;"></div>
                        
                        <div class="block_topic_news">
                            @foreach($data as $v)
                        	<article class="block_topic_post">
                            	<p class="title"><a href="{{url('/home/article/'.$v->art_id.'/info')}}">{{$v->art_title}}</a></p>
                                <div class="f_pic"><a href="news_post.html" class="general_pic_hover scale"><img src="{{$v->art_thumb}}" style="width: 256px; height: 121.86px;"/></a></div>
                                <p class="text" style="height: 30px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">{{$v->art_content}}</p>
                                <div class="info">
                                	<div class="date"><p>11 July, 2012</p></div>
                                    
                                    <div class="r_part">
                                    	<div class="category"><p><a href="#">Business</a></p></div>
                                        <a href="#" class="views">183</a>
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