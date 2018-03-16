@extends('home.layouts.index')

@section('article')

        <!-- CONTENT BEGIN -->
        <div id="content" class="right_sidebar">
        	<div class="inner">
            	<div class="general_content">
                	<div class="main_content">
                    	<div class="block_breadcrumbs">
                        	<div class="text"><p>你在这里:</p></div>
                            
                            <ul>
                            	<li><a href="/">首页</a></li>
                                <li><a href="{{url('home/article/'.$data->cate_id.'/list')}}">文章列表</a></li>
                                <li>文章详情</li>
                            </ul>
                        </div>
                        <div class="separator" style="height:30px;"></div>
                        
                        <article class="block_single_news">
                        	
                        <p class="title"><a href="#">{{$data['art_title']}}</a></p>
                            <p class="subtitle">{{$data['art_description']}}</p>
                            
                            <div class="info">
                                <div class="date"><p>{{$data['art_time']}}</p></div>
                                <div class="author"><p>作者: <a href="#">{{$data['art_editor']}}</a></p></div>
                                    
                            	<div class="r_part">
                                	<div class="category"><p><a href="#">查看</a></p></div>
                                    <a href="#" class="views">220</a>
                                    <a href="#" class="comments">25</a>
                                </div>
                            </div>
                            
                            <div class="content">
                            	<p style="word-wrap:break-word;">{!!$data['art_content']!!}</p>
                            </div>
                        </article>
                        
                        <div class="separator" style="height:4px;"></div>
                        
                        <div class="block_post_tags">
                        	<p>描述: <a href="#">{{$data['art_tag']}}</a></p>
                        </div>
                        
                        <div class="block_post_social">
                        	<h4><span>B</span></h4>
                            
                            <section class="rating">
                            	<p class="title"><span>评分</span></p>
                                
                                <ul>
                                	<li><span>1024</span>查看</li>
                                    <li>
                                        <span>{{$num}}</span>评论
                                    </li>
                                </ul>
                            </section>
                            
                            <section class="subscribe">
                            	<p class="title"><span>订阅</span></p>
                                <a href="#"><p>点击订阅</p></a>
                            </section>
                            
                            <section class="recommend">
                            	<p class="title"><span>推荐给朋友</span></p>
                                <!-- JiaThis Button BEGIN -->
                                <div style="padding: 20px; box-sizing: border-box; padding-left: 40px;">
                                    <div class="jiathis_style_24x24">
                                        <a class="jiathis_button_qzone"></a>
                                        <a class="jiathis_button_tsina"></a>
                                        <a class="jiathis_button_tqq"></a>
                                        <a class="jiathis_button_weixin"></a>
                                        <a class="jiathis_button_renren"></a>
                                        <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
                                        <a class="jiathis_counter_style"></a>
                                    </div>
                                </div>
                                <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
                                <!-- JiaThis Button END -->
                            </section>
                            <div class="clearboth"></div>
                        </div>
                        
                        <div class="line_2" style="margin:22px 0px 29px;"></div>
                        
                        <div class="block_related_posts">
                        	<h3>相关文章</h3>
                            
                            <div class="block_main_news">
                            	<article class="block_news_post">
                                <p class="title">
                                        @if($prev)
                                            <a href="{{url('/home/article/'.$prev->art_id.'/info')}}">上一篇：{{$prev->art_title}}</a>
                                        @else   
                                            <a href="javascript:;">没有上一篇了。</a>
                                        @endif
                                    </p>
                                </article>
                                
                                <article class="block_news_post">
                                    <p class="title">
                                        @if($next)
                                            <a href="{{url('/home/article/'.$next->art_id.'/info')}}">下一篇：{{$next->art_title}}</a>
                                        @else   
                                            <a href="return false;">没有下一篇了。</a>
                                        @endif
                                    </p>
                                </article>
                                
                                
                                
                            	<div class="clearboth"></div>
                            </div>
                        </div>
                        
                        <div class="line_2" style="margin:5px 0px 30px;"></div>
                        
                        <div class="block_comments_type_2">
                        	<h3>
                                @if($num == 0)
                                    现在还没有人评论，快来抢一波沙发吧!
                                @else
                                    {{$num}} 评论
                                @endif
                            </h3>
                            <a href="#" class="add_new">添加新评论</a>
                            @foreach($commit as $v)
                            <div class="comment">
                            	<div class="userpic"><a href="#"><img src="" alt="" /></a></div>
                                
                                <div class="comment_wrap">
                                    <div class="name"><p><a href="#" style="color: #3E73B5;">{{$v->user_name}}</a></p></div>
                                    <div class="content" style="width: 620px;">
                                        <p style="margin-top:20px;">{{$v->commit_content}}</p>
                                    </div>
                                    <div class="date" style="width: 620px; margin-top:20px;"><p>{{$v->commit_time}}</p></div>
                                </div>
                                
                                <div class="line_3"></div>
                            </div>
                            @endforeach
                            
                            
                        </div>
                        
                        <div class="separator" style="height:30px;"></div>
                        @if(session('users'))
                        <div class="block_leave_reply">
                        	<h3>发布评论</h3>
                        	<p class="text">您的个人信息不会被公开。必填项已标记<span>*</span></p>
                            
                            <form  class="layui-form">
                            <!-- {{csrf_field()}} -->
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="user_id" value="{{session('users')->id}}">
                                <input type="hidden" name="commit_id" value="{{$data['art_id']}}">
                            	<p>姓名<span>*</span></p>
                                <div class="field"><input type="text" name="username" class="req" /></div>
                                
                                <p>评论内容</p>
                                <div class="textarea"><textarea cols="1" rows="1" name="commit_content"></textarea></div>
                                
                                <button  class="layui-btn" lay-filter="add" lay-submit="">
                                    发布评论
                                </button>
                            </form>
                        </div>
                        @else
                        <div class="general_info_box error">
                        	<a href="" class="close">Close</a>
                            <p><b>提醒：</b> 请登录后，再进行评论</p>
                        </div>
                        @endif
                    </div>
                    <script>
                        layui.use(['form','layer'],function(){
                            $ = layui.jquery;
                            var form = layui.form
                            ,layer = layui.layer;

                            //监听提交
                            form.on('submit(add)',function(data){
                                $.ajax({
                                    type:"POST",
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    },
                                    url:'/home/comment',
                                    data:data.field,
                                    dataType:"JSON",
                                    success:function (result) {
                                         //console.log(result);
                                        
                                        if (result.status == 0) {
                                            layer.msg('评论成功');
                                            location.reload();
                                        } else {
                                            layer.msg('评论失败');
                                        }
                                    }
                                });
                                return false;
                                
                            });
                        });
                    </script>
@endsection