@extends('home.layouts.index')

@section('article')

        <!-- CONTENT BEGIN -->
        <div id="content" class="right_sidebar">
        	<div class="inner">
            	<div class="general_content">
                	<div class="main_content">
                    	<div class="block_breadcrumbs">
                        	<div class="text"><p>You are here:</p></div>
                            
                            <ul>
                            	<li><a href="index.html">首页</a></li>
                                <li><a href="business.html">文章列表</a></li>
                                <li>文章详情</li>
                            </ul>
                        </div>
                        <div class="separator" style="height:30px;"></div>
                        
                        <article class="block_single_news">
                        	<div class="f_pic"><a href="#"><img src="images/pic_news_post_1.jpg" alt="" /></a></div>
                        <p class="title"><a href="#">{{$data['c_article']['art_title']}}</a></p>
                            <p class="subtitle">{{$data['c_article']['art_description']}}</p>
                            
                            <div class="info">
                                <div class="date"><p>{{$data['c_article']['art_time']}}</p></div>
                                <div class="author"><p>作者: <a href="#">{{$data['c_article']['art_editor']}}</a></p></div>
                                    
                            	<div class="r_part">
                                	<div class="category"><p><a href="#">查看</a></p></div>
                                    <a href="#" class="views">220</a>
                                    <a href="#" class="comments">25</a>
                                </div>
                            </div>
                            
                            <div class="content">
                            	<p>{!!$data['c_article']['art_content']!!} 
                            </div>
                        </article>
                        
                        <div class="separator" style="height:4px;"></div>
                        
                        <div class="block_post_tags">
                        	<p>描述: <a href="#">{{$data['c_article']['art_tag']}}</a></p>
                        </div>
                        
                        <div class="block_post_social">
                        	<h4><span>B</span></h4>
                            
                            <section class="rating">
                            	<p class="title"><span>评分</span></p>
                                
                                <ul>
                                	<li><span>1024</span>视图</li>
                                    <li><span>4</span>评论</li>
                                </ul>
                            </section>
                            
                            <section class="subscribe">
                            	<p class="title"><span>订阅</span></p>
                                <a href="#">订阅评论</a>
                            </section>
                            
                            <section class="recommend">
                            	<p class="title"><span>推荐给朋友</span></p>
                                
                                <ul>
                                	<li><a href="http://www.facebook.com/share.php?u=http://google.com" target="_blank"><img src="images/button_social_1.png" alt="" /></a></li>
                                    <li><a href="https://twitter.com/share?text=I like BusinessNews Template and You?" target="_blank"><img src="images/button_social_2.png" alt="" /></a></li>
                                    <li><a href="https://plusone.google.com/_/+1/confirm?url=http://google.com" target="_blank"><img src="images/button_social_3.png" alt="" /></a></li>
                                    <li><a href="http://pinterest.com/pin/create/button/?url=http://google.com" target="_blank"><img src="images/button_social_4.png" alt="" /></a></li>
                                </ul>
                            </section>
                            
                            <div class="clearboth"></div>
                        </div>
                        
                        <div class="line_2" style="margin:22px 0px 29px;"></div>
                        
                        <div class="block_related_posts">
                        	<h3>相关文章</h3>
                            
                            <div class="block_main_news">
                            	<article class="block_news_post">
                                    <div class="f_pic"><a href="#" class="general_pic_hover scale_small"><img src="images/pic_main_news_9.jpg" alt="" /></a></div>
                                  <p class="category"><a href="#">photography</a></p>
                                    <p class="title"><a href="#">Many desktop publishing packages and web page editors.</a></p>
                                    <div class="info">
                                        <div class="date"><p>11 July, 2012</p></div>
                                        <a href="#" class="views">183</a>
                                        
                                        <div class="clearboth"></div>
                                    </div>
                                </article>
                                
                                <article class="block_news_post">
                                    <div class="f_pic"><a href="#" class="general_pic_hover scale_small"><img src="images/pic_main_news_4.jpg" alt="" /></a></div>
                                  <p class="category"><a href="#">sport</a></p>
                                    <p class="title"><a href="#">Many desktop publishing packages and web page editors.</a></p>
                                    <div class="info">
                                        <div class="date"><p>11 July, 2012</p></div>
                                        <a href="#" class="views">183</a>
                                        
                                        <div class="clearboth"></div>
                                    </div>
                                </article>
                                
                                <article class="block_news_post">
                                    <div class="f_pic"><a href="#" class="general_pic_hover scale_small"><img src="images/pic_main_news_6.jpg" alt="" /></a></div>
                                  <p class="category"><a href="#">business</a></p>
                                    <p class="title"><a href="#">Many desktop publishing packages and web page editors.</a></p>
                                    <div class="info">
                                        <div class="date"><p>11 July, 2012</p></div>
                                        <a href="#" class="views">183</a>
                                        
                                        <div class="clearboth"></div>
                                    </div>
                                </article>
                                
                                <article class="block_news_post">
                                    <div class="f_pic"><a href="#" class="general_pic_hover scale_small"><img src="images/pic_main_news_13.jpg" alt="" /></a></div>
                                  <p class="category"><a href="#">video</a></p>
                                    <p class="title"><a href="#">Many desktop publishing packages and web page editors.</a></p>
                                    <div class="info">
                                        <div class="date"><p>11 July, 2012</p></div>
                                        <a href="#" class="views">183</a>
                                        
                                        <div class="clearboth"></div>
                                    </div>
                                </article>
                                
                            	<div class="clearboth"></div>
                            </div>
                        </div>
                        
                        <div class="line_2" style="margin:5px 0px 30px;"></div>
                        
                        <div class="block_comments_type_2">
                        	<h3>3 个评论</h3>
                            <a href="#" class="add_new">添加新评论</a>
                            
                            <div class="comment">
                            	<div class="userpic"><a href="#"><img src="images/ava_default_1.jpg" alt="" /></a></div>
                                
                                <div class="comment_wrap">
                                    <div class="name"><p><a href="#">John Doe</a></p></div>
                                    <div class="date"><p>Febr 16, 2012 at 4:43 pm</p></div>
                                    <div class="content">
                                        <p>Established fact that a reader will be distracted by the readable content of a page.</p>
                                    </div>
                                </div>
                                <div class="clearboth"></div>
                                <div class="line_3"></div>
                            </div>
                            
                            <div class="comment">
                            	<div class="userpic"><a href="#"><img src="images/ava_default_1.jpg" alt="" /></a></div>
                                
                                <div class="comment_wrap">
                                    <div class="name"><p><a href="#">Sara Jonson</a></p></div>
                                    <div class="date"><p>Febr 16, 2012 at 4:43 pm</p></div>
                                    <div class="content">
                                        <p>Established fact that a reader will be distracted by the readable content of a page. When looking at its layout. The point of using is that it has a more-or-less normal distribution of letters.</p>
                                    </div>
                                </div>
                                <div class="clearboth"></div>
                                <div class="line_3"></div>
                            </div>
                            
                            <div class="comment">
                            	<div class="userpic"><a href="#"><img src="images/ava_default_1.jpg" alt="" /></a></div>
                                
                                <div class="comment_wrap">
                                    <div class="name"><p><a href="#">Mark Defo</a></p></div>
                                    <div class="date"><p>Febr 16, 2012 at 4:43 pm</p></div>
                                    <div class="content">
                                        <p>Page when looking at its layout. The point of usinghas a more-or-less normal distribution.</p>
                                    </div>
                                </div>
                                <div class="clearboth"></div>
                                <div class="line_3"></div>
                            </div>
                            
                        </div>
                        
                        <div class="separator" style="height:30px;"></div>
                        
                        <div class="block_leave_reply">
                        	<h3>发布评论</h3>
                        	<p class="text">您的电子邮件地址不会被公开。必填项已标记 <span>*</span></p>
                            
                        	<form class="w_validation" action="#" />
                            	<p>姓名<span>*</span></p>
                            	<div class="field"><input type="text" class="req" /></div>
                                
                                <p>电子邮件<span>*</span></p>
                            	<div class="field"><input type="text" class="req" /></div>
                                
                                <p>评论内容</p>
                                <div class="textarea"><textarea cols="1" rows="1"></textarea></div>
                                
                                <input type="submit" class="general_button" value="发布评论" />
                            </form>
                        </div>
                        
                    </div>
@endsection