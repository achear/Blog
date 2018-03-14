


<head>
  <title>博客首页</title>


  <meta name="keywords" content="" />
  <meta name="description" content="" />


  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <meta name="csrf-token" content="{{csrf_token()}}" />

  <!--[if lt IE 9]>
<script type="text/javascript" src="layout/plugins/html5.js"></script>
<![endif]-->


  <!-- <link rel="stylesheet" href="layout/style.css" type="text/css" /> -->
  <link rel="stylesheet" href="{{ asset('layout/style.css') }}">
  {{--  <link href="http://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel="stylesheet" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic" rel="stylesheet" type="text/css" />  --}}


  <script type="text/javascript" src="{{asset('layout/js/jquery.js')}}"></script>


  <!-- PrettyPhoto 图片 start -->
  <link rel="stylesheet" href="{{asset('layout/plugins/prettyphoto/css/prettyPhoto.css')}}" type="text/css" />
  <script type="text/javascript" src="{{asset('layout/plugins/prettyphoto/jquery.prettyPhoto.js')}}"></script>
  <!-- PrettyPhoto end -->


  <!-- jQuery 工具 start -->
  <script type="text/javascript" src="{{asset('layout/plugins/tools/jquery.tools.min.js')}}"></script>
  <!-- jQuery 工具 end -->


  <!-- 日历 start -->
  <link rel="stylesheet" href="{{asset('layout/plugins/calendar/calendar.css')}}" type="text/css" />
  <script type="text/javascript" src="{{asset('layout/plugins/calendar/calendar.js')}}"></script>
  <!--  日历 end -->


  <!-- ScrollTo start -->
  <script type="text/javascript" src="{{asset("layout/plugins/scrollto/jquery.scroll.to.min.js")}}"></script>
  <!-- ScrollTo end -->


  <!-- MediaElements start -->
  <link rel="stylesheet" href="{{asset('layout/plugins/video-audio/mediaelementplayer.css')}}" />
  <script src="{{asset('layout/plugins/video-audio/mediaelement-and-player.js')}}"></script>
  <!-- MediaElements end -->


  <!-- FlexSlider start -->
  <link rel="stylesheet" href="{{asset('layout/plugins/flexslider/flexslider.css')}}" type="text/css" />
  <script type="text/javascript" src="{{asset('layout/plugins/flexslider/jquery.flexslider-min.js')}}"></script>
  <!-- FlexSlider end -->


  <!-- iButtons start -->
  <link rel="stylesheet" href="{{asset('layout/plugins/ibuttons/css/jquery.ibutton.css')}}" type="text/css" />
  <script type="text/javascript" src="{{asset('layout/plugins/ibuttons/lib/jquery.ibutton.min.js')}}"></script>
  <!-- iButtons end -->


  <!-- jQuery 表单插件开始  -->
  <script type="text/javascript" src="{{asset('layout/plugins/ajaxform/jquery.form.js')}}"></script>
  <!-- jQuery表单插件结束 -->
  <link rel="stylesheet" href="{{asset('home/bootstrap/css/bootstrap.min.css')}}">

  <script type="text/javascript" src="{{asset('layout/js/main.js')}}"></script>


  <script type="text/javascript">
    jQuery(function () {});
  </script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>


<body>
    <div class="wrapper sticky_footer">
        <!-- HEADER BEGIN -->
        <header>
            <div id="header">
                <section class="top">
                    <div class="inner">
                        <div class="fl">
                            <div class="block_top_menu">
                                <ul>
                                    <li class="current">
                                        <a href="/">首页</a>
                                    </li>
                                    <li>
                                        <a href="#">Site Map</a>
                                    </li>
                                    <li>
                                        <a href="typography.html">Typography</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @if(!session('users'))
                        <div class="fr">
                            <div class="block_top_menu">
                                <ul>
                                    <li class="current">
                                        <a href="#login" class="open_popup">登录</a>
                                    </li>
                                    <li>
                                        <a href="{{url('home/login/registration')}}">注册</a>
                                    </li>
                                    <li>
                                        <a href="#">订阅</a>
                                    </li>
                                </ul>
                            </div>
                            @else
                            <div class="fr">
                                <div class="block_top_menu">
                                    <ul>
                                        <li class="current">
                                            <a href="#" class="open_popup">{{session('users')['username']}}</a>
                                        </li>
                                        <li>
                                            <a href="{{url('home/index/registration')}}">个人中心</a>
                                        </li>
                                        <li>
                                            {{--  <a href="{{url('/home/index/loginout')}}">退出登录</a>  --}}
                                        </li>
                                    </ul>
                                </div>
                         
                                <div class="block_social_top">
                                    <ul>
                                        <li>
                                            <a href="#" class="fb">Facebook</a>
                                        </li>
                                        <li>
                                            <a href="#" class="tw">Twitter</a>
                                        </li>
                                        <li>
                                            <a href="#" class="rss">RSS</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="clearboth"></div>
                        </div>
                </section>

                <section class="bottom">
                    <div class="inner">
                        <div id="logo_top">
                            <a href="index.html">
                                <img src="/Home/images/logo_top.png" alt="BusinessNews" title="BusinessNews" />
                            </a>
                        </div>

                        <div class="block_today_date">
                            <div class="num">
                                <p id="num_top" />
                            </div>
                            <div class="other">
                                <p class="month_year">
                                    <span id="month_top"></span>,
                                    <span id="year_top"></span>
                                </p>
                                <p id="day_top" class="day" />
                            </div>
                        </div>

                        <div class="fr">
                            <div class="block_languages">
                                <div class="text">
                                    {{--
                                    <p>Language:</p> --}}
                                </div>
                                <ul>
                                    <li class="current">
                                        {{--
                                        <a href="#" class="eng">English</a> --}}
                                    </li>
                                    <li>
                                        {{--
                                        <a href="#" class="french">French</a> --}}
                                    </li>
                                    <li>
                                        {{--
                                        <a href="#" class="ger">German</a> --}}
                                    </li>
                                </ul>

                                <div class="clearboth"></div>
                            </div>

                            <div class="block_search_top">
                                <form action="#" />
                                <div class="field">
                                    <input type="text" class="w_def_text" title="Enter Your Email Addres" />
                                </div>
                                <input type="submit" class="button" value="Search" />

                                <div class="clearboth"></div>
                                </form>
                            </div>
                        </div>

                        <div class="clearboth"></div>
                    </div>
                </section>

                <section class="section_main_menu">
                    <div class="inner">
                        <nav class="main_menu">
                            <ul>
                                <li class="current_page_item">
                                    <a href="index.html">首页</a>

                                    <ul>
                                        <li>
                                            <a href="index.html">主页样式-1</a>
                                        </li>
                                        <li>
                                            <a href="home_style_2.html">主页样式-2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="big_dropdown" data-content="business">
                                    <a href="business.html">业务</a>
                                </li>
                                <li class="big_dropdown" data-content="technology">
                                    <a href="technology.html">科技</a>
                                </li>
                                <li class="big_dropdown" data-content="education">
                                    <a href="education.html">教育</a>
                                </li>
                                <li>
                                    <a href="media.html">媒体</a>

                                    <ul>
                                        <li>
                                            <a href="media.html">媒体</a>
                                        </li>
                                        <li>
                                            <a href="media_item.html">媒体项目页面</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">页</a>

                                    <ul>
                                        <li>
                                            <a href="about.html">关于我们</a>
                                        </li>
                                        <li>
                                            <a href="about_author.html">作者页面</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">联系我们</a>
                                        </li>
                                        <li>
                                            <a href="registration.html">注册页面</a>
                                        </li>
                                        <li>
                                            <a href="main_news.html">新闻页面</a>
                                        </li>
                                        <li>
                                            <a href="news_post_w_slider.html">带滑动条的新闻稿</a>
                                        </li>
                                        <li>
                                            <a href="news_post_w_video.html">视频新闻发布</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog.html">博客</a>

                                    <ul>
                                        <li>
                                            <a href="blog.html">我们的博客1</a>
                                        </li>
                                        <li>
                                            <a href="blog_style_2.html">我们的博客2</a>
                                        </li>
                                        <li>
                                            <a href="blog_post.html">博客页面</a>
                                        </li>
                                        <li>
                                            <a href="blog_post_w_slider.html">新闻滑块</a>
                                        </li>
                                        <li>
                                            <a href="blog_post_w_video.html">视频滑块</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="typography.html">短码</a>

                                    <ul>
                                        <li>
                                            <a href="accordion.html">手风琴</a>
                                        </li>
                                        <li>
                                            <a href="blockquote.html">块引用</a>
                                        </li>
                                        <li>
                                            <a href="table.html">表</a>
                                        </li>
                                        <li>
                                            <a href="columns.html">纵列</a>
                                        </li>
                                        <li>
                                            <a href="pricing_table.html">定价表</a>
                                        </li>
                                        <li>
                                            <a href="testimonials.html">推荐</a>
                                        </li>
                                        <li>
                                            <a href="boxes.html">信息框</a>
                                        </li>
                                        <li>
                                            <a href="dropcaps.html">Dropcaps</a>
                                        </li>
                                        <li>
                                            <a href="tabs.html">标签</a>
                                        </li>
                                        <li>
                                            <a href="lists.html">样式列表</a>
                                        </li>
                                        <li>
                                            <a href="buttons.html">按钮</a>
                                        </li>
                                        <li>
                                            <a href="video.html">视频</a>
                                        </li>
                                        <li>
                                            <a href="typography.html">排版</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </section>

                <section class="section_big_dropdown">
                    <div class="inner">
                        <div class="block_big_dropdown" data-menu="business">
                            <div class="content">
                                <div class="image">
                                    <a href="blog_post.html" class="pic">
                                        <img src="/Home/images/pic_big_drop_3.jpg" alt="" />
                                    </a>
                                    <p>
                                        <a href="blog_post.html">隐藏在中间的尴尬东西</a>
                                    </p>
                                </div>
                                <div class="line"></div>

                                <div class="image">
                                    <a href="blog_post.html" class="pic">
                                        <img src="/Home/images/pic_big_drop_4.jpg" alt="" />
                                    </a>
                                    <p>
                                        <a href="blog_post.html">查看时的页面内容.</a>
                                    </p>
                                </div>
                                <div class="line"></div>

                                <div class="popular_posts">
                                    <div class="title">
                                        <p>热门帖子</p>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="blog_post.html">
                                                <span>11 July, 2012</span>Established fact that a reader.</a>
                                        </li>
                                        <li>
                                            <a href="blog_post_w_slider.html">
                                                <span>08 July, 2012</span>Editors now use as their default model text.</a>
                                        </li>
                                        <li>
                                            <a href="blog_post_w_video.html">
                                                <span>05 July, 2012</span>Embarrassing hidden in the middle.</a>
                                        </li>
                                        <li>
                                            <a href="blog_post.html">
                                                <span>01 July, 2012</span>Anything embarrassing hidden in the middl.</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="line"></div>

                                <div class="more">
                                    <div class="title">
                                        <p>更多商业</p>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="#">商业</a>
                                        </li>
                                        <li>
                                            <a href="#">钱</a>
                                        </li>
                                        <li>
                                            <a href="#">投资者计划</a>
                                        </li>
                                        <li>
                                            <a href="#">银行</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="clearboth"></div>
                            </div>
                        </div>

                        <div class="block_big_dropdown" data-menu="technology">
                            <div class="content">
                                <div class="image">
                                    <a href="blog_post.html" class="pic">
                                        <img src="{{asset('/Home/images/pic_big_drop_5.jpg')}}" alt="" />
                                    </a>
                                    <p>
                                        <a href="blog_post.html">简单的虚拟文本的印刷.</a>
                                    </p>
                                </div>
                                <div class="line"></div>

                                <div class="image">
                                    <a href="blog_post.html" class="pic">
                                        <img src="/Home/images/pic_big_drop_6.jpg" alt="" />
                                    </a>
                                    <p>
                                        <a href="blog_post.html">互联网倾向于重复预定义的块.</a>
                                    </p>
                                </div>
                                <div class="line"></div>

                                <div class="popular_posts">
                                    <div class="title">
                                        <p>热门帖子</p>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="blog_post.html">
                                                <span>11 July, 2012</span>Publishing packages and web page</a>
                                        </li>
                                        <li>
                                            <a href="blog_post_w_slider.html">
                                                <span>08 July, 2012</span>Generators on the Internet tend to repeat.</a>
                                        </li>
                                        <li>
                                            <a href="blog_post_w_video.html">
                                                <span>05 July, 2012</span>Anything embarrassing hidden in the middle.</a>
                                        </li>
                                        <li>
                                            <a href="blog_post.html">
                                                <span>01 July, 2012</span>Words which don't look even slightly.</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="line"></div>

                                <div class="more">
                                    <div class="title">
                                        <p>更多技术</p>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="#">Web开发</a>
                                        </li>
                                        <li>
                                            <a href="#">程序设计</a>
                                        </li>
                                        <li>
                                            <a href="#">技术</a>
                                        </li>
                                        <li>
                                            <a href="#">汽车</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="clearboth"></div>
                            </div>
                        </div>

                        <div class="block_big_dropdown" data-menu="education">
                            <div class="content">
                                <div class="image">
                                    <a href="blog_post.html" class="pic">
                                        <img src="{{asset('/Home/images/pic_big_drop_1.jpg')}}" alt="" />
                                    </a>
                                    <p>
                                        <a href="blog_post.html">许多桌面软件包和网页编辑器.</a>
                                    </p>
                                </div>
                                <div class="line"></div>

                                <div class="image">
                                    <a href="blog_post.html" class="pic">
                                        <img src="/Home/images/pic_big_drop_2.jpg" alt="" />
                                    </a>
                                    <p>
                                        <a href="blog_post.html">有很多变化的段落</a>
                                    </p>
                                </div>
                                <div class="line"></div>

                                <div class="popular_posts">
                                    <div class="title">
                                        <p>热门帖子</p>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="blog_post.html">
                                                <span>11 July, 2012</span>Many desktop publishing packages and web page</a>
                                        </li>
                                        <li>
                                            <a href="blog_post_w_slider.html">
                                                <span>08 July, 2012</span>Randomised words which don't look even.</a>
                                        </li>
                                        <li>
                                            <a href="blog_post_w_video.html">
                                                <span>05 July, 2012</span>Anything embarrassing hidden in the middle.</a>
                                        </li>
                                        <li>
                                            <a href="blog_post.html">
                                                <span>01 July, 2012</span>Established fact that a reader.</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="line"></div>

                                <div class="more">
                                    <div class="title">
                                        <p>更多教育</p>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="#">中学</a>
                                        </li>
                                        <li>
                                            <a href="#">Univercity</a>
                                        </li>
                                        <li>
                                            <a href="#">学院</a>
                                        </li>
                                        <li>
                                            <a href="#">学生们</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="clearboth"></div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section_secondary_menu">
                    <div class="inner">
                        <nav class="secondary_menu">
                            <ul>
                                <li>
                                    <a href="main_news_europe.html">欧洲</a>
                                </li>
                                <li>
                                    <a href="main_news_usa.html">美国</a>
                                </li>
                                <li>
                                    <a href="main_news_m_east.html">中东</a>
                                </li>
                                <li>
                                    <a href="main_news_money.html">钱</a>
                                </li>
                                <li>
                                    <a href="main_news_science.html">科学和IT</a>
                                </li>
                                <li>
                                    <a href="main_news_culture.html">文化</a>
                                </li>
                                <li>
                                    <a href="main_news_top.html">热门新闻</a>
                                </li>
                            </ul>
                        </nav>

                        <div class="block_clock">
                            <p>Time:
                                <span id="time"></span>
                            </p>
                        </div>
                    </div>
                </section>
                </div>
        </header>
        <!-- HEADER END -->

        <!-- CONTENT BEGIN -->
        <div id="content" class="">
            <div class="inner">
                <div class="general_content">
                    <div class="main_content">
                        <div class="block_breadcrumbs">
                            <div class="text">
                                <p>你在这里:</p>
                            </div>

                            <ul>
                                <li>
                                    <a href="index.html">首页</a>
                                </li>
                                <li>个人中心</li>
                            </ul>
                        </div>
                        <div class="separator" style="height:28px;"></div>

                        <p class="general_title">
                            <span>修改信息</span>
                        </p>
                        <div class="separator" style="height:39px;"></div>
                       
                      
                            
                          
                          @endif
                          @if(count($errors)>0)
                          @if(is_object($errors))

                              @foreach($errors->all() as $v)
                              <div class="general_info_box success">
                                  <a href="#" class="close">Close</a>
                                  <p><b>Note:</b>{{$v}}</p>
                                </div>
                              @endforeach
                          @else
                          <div class="general_info_box success" style="width:750px; margin:auto;">
                              <a href="#" class="close">Close</a>
                              <p style=" text-align:center;"><b>Note:</b>{{$errors}}</p>
                            </div>
                          @endif
                      @endif
                        <div class="block_registration">
                            <form action="{{url('/home/index/modify_password')}}" method="post" class="w_validation" id="myform">
                                {{ csrf_field() }}  
                                <div class="form-group">
                                    <label for="inputPassword" class="col-sm-2 control-label">用户名</label>
                                    <div class="col-sm-10">
                                      <input type="password" class="form-control" id="username" name="username" placeholder="{{session('users')->username}}" disabled="disabled">
                                    </div>
                                  </div>
                                  <div class="clearboth" style="height:30px;"></div>
                                <div class="form-group">
                                    <label for="inputPassword" class="col-sm-2 control-label">旧密码</label>
                                    <div class="col-sm-10">
                                      <input type="password" class="form-control" id="password_o" name="password_o" placeholder="Password">
                                    </div>
                                  </div>
                                  <div class="clearboth" style="height:30px;"></div>
                                
                       
                                  <div class="form-group">
                                      <label for="inputPassword" class="col-sm-2 control-label">新密码</label>
                                      <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                      </div>
                                      <div class="clearboth" style="height:15px;" ></div>
                       
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-sm-2 control-label">确认密码</label>
                                        <div class="col-sm-10">
                                          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password">
                                        </div>
                                      </div>
                                  
                                  
                                <div class="clearboth" style="height:50px;"></div>
                       

                             
                                    <input type="submit" class="general_button" value="提交修改" />
                                </p>
                          
                            </form>
                        </div>

                        <div class="line_3" style="margin:42px 0px 0px;"></div>

                    </div>

                    <div class="clearboth"></div>
                </div>
            </div>
        </div>
        <!-- CONTENT END -->
        <footer>
            <div id="footer">
                <section class="top">
                    <div class="inner">
                        <div id="logo_bottom">
                            <a href="index.html">
                                <img src="/Home/images/logo_bottom.png" alt="" />
                            </a>
                        </div>

                        <div class="block_to_top">
                            <a href="#">回到顶部</a>
                        </div>
                    </div>
                </section>

                <section class="middle">
                    <div class="inner">
                        <div class="line_1"></div>

                        <div class="block_footer_widgets">
                            <div class="column">
                                <h3>flickr上的照片</h3>

                                <div class="block_flickr_footer">
                                    <ul>
                                        <li>
                                            <a href="http://www.flickr.com/" target="_blank">
                                                <img src="/Home/images/pic_flickr_1.png" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.flickr.com/" target="_blank">
                                                <img src="/Home/images/pic_flickr_2.png" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.flickr.com/" target="_blank">
                                                <img src="/Home/images/pic_flickr_3.png" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.flickr.com/" target="_blank">
                                                <img src="/Home/images/pic_flickr_4.png" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.flickr.com/" target="_blank">
                                                <img src="/Home/images/pic_flickr_5.png" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.flickr.com/" target="_blank">
                                                <img src="/Home/images/pic_flickr_6.png" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.flickr.com/" target="_blank">
                                                <img src="/Home/images/pic_flickr_7.png" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.flickr.com/" target="_blank">
                                                <img src="/Home/images/pic_flickr_8.png" alt="" />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="column">
                                <h3>标签</h3>

                                <div class="block_tags">
                                    <ul>
                                        <li>
                                            <a href="#">商业</a>
                                        </li>
                                        <li>
                                            <a href="#">科学</a>
                                        </li>
                                        <li>
                                            <a href="#">会议</a>
                                        </li>
                                        <li>
                                            <a href="#">图片</a>
                                        </li>
                                        <li>
                                            <a href="#">教育</a>
                                        </li>
                                        <li>
                                            <a href="#">AI</a>
                                        </li>
                                        <li>
                                            <a href="#">运动</a>
                                        </li>
                                        <li>
                                            <a href="#">移动</a>
                                        </li>
                                        <li>
                                            <a href="#">技术</a>
                                        </li>
                                        <li>
                                            <a href="#">电脑</a>
                                        </li>
                                        <li>
                                            <a href="#">视频</a>
                                        </li>
                                        <li>
                                            <a href="#">apple</a>
                                        </li>
                                        <li>
                                            <a href="#">新闻</a>
                                        </li>
                                        <li>
                                            <a href="#">欧元</a>
                                        </li>
                                        <li>
                                            <a href="#">文化</a>
                                        </li>
                                        <li>
                                            <a href="#">室内</a>
                                        </li>
                                        <li>
                                            <a href="#">中东</a>
                                        </li>
                                        <li>
                                            <a href="#">设计</a>
                                        </li>
                                        <li>
                                            <a href="#">euro 2018</a>
                                        </li>
                                        <li>
                                            <a href="#">花卉</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="column">
                                <h3>大部分阅读新闻</h3>

                                <div class="block_most_read_news">
                                    <div class="article">
                                        <div class="pic">
                                            <a href="news_post.html" class="w_hover">
                                                <img src="/Home/images/pic_most_read_1.png" alt="" />
                                                <span></span>
                                            </a>
                                        </div>

                                        <div class="text">
                                            <p class="title">
                                                <a href="news_post.html">随机化页面的内容.</a>
                                            </p>
                                            <p class="date">08 July, 2012</p>
                                        </div>
                                    </div>
                                    <div class="line_1"></div>

                                    <div class="article">
                                        <div class="pic">
                                            <a href="news_post.html" class="w_hover">
                                                <img src="/Home/images/pic_most_read_2.png" alt="" />
                                                <span></span>
                                            </a>
                                        </div>

                                        <div class="text">
                                            <p class="title">
                                                <a href="news_post.html">Established fact that a will be distracted.</a>
                                            </p>
                                            <p class="date">08 July, 2012</p>
                                        </div>
                                    </div>
                                    <div class="line_1"></div>

                                    <div class="article">
                                        <div class="pic">
                                            <a href="news_post.html" class="w_hover">
                                                <img src="/Home/images/pic_most_read_3.png" alt="" />
                                                <span></span>
                                            </a>
                                        </div>

                                        <div class="text">
                                            <p class="title">
                                                <a href="news_post.html">Distracted by the readable content of a page.</a>
                                            </p>
                                            <p class="date">08 July, 2012</p>
                                        </div>
                                    </div>
                                    <div class="line_1"></div>

                                </div>
                            </div>

                            <div class="column">
                                <h3>联系小工具</h3>

                                <div class="block_contact_footer">
                                    <form action="#" />
                                    <p class="text">用户名:</p>
                                    <div class="field">
                                        <input type="text" />
                                    </div>

                                    <p class="text">邮箱:</p>
                                    <div class="field">
                                        <input type="text" />
                                    </div>

                                    <p class="text">信息:</p>
                                    <div class="textarea">
                                        <textarea cols="1" rows="1"></textarea>
                                    </div>

                                    <div class="clear_form">
                                        <input type="reset" value="Clear form" />
                                    </div>
                                    <div class="send">
                                        <input type="submit" class="general_button" value="发送" />
                                    </div>

                                    <div class="clearboth"></div>
                                    </form>
                                </div>
                            </div>

                            <div class="clearboth"></div>
                        </div>
                    </div>
                </section>

                <section class="bottom">
                    <div class="inner">
                        <div class="line_1"></div>

                        <div class="fr">
                            <div class="block_menu_footer">
                                <ul>
                                    <li>
                                        <a href="business.html">商业</a>
                                    </li>
                                    <li>
                                        <a href="technology.html">技术</a>
                                    </li>
                                    <li>
                                        <a href="education.html">教育</a>
                                    </li>
                                    <li>
                                        <a href="media.html">媒体</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="block_social_footer">
                                <ul>
                                    <li>
                                        <a href="#" class="fb">Facebook</a>
                                    </li>
                                    <li>
                                        <a href="#" class="tw">Twitter</a>
                                    </li>
                                    <li>
                                        <a href="#" class="rss">RSS</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="block_copyrights">
                            <p>&copy; 2018年商业新闻。 版权所有.</p>
                        </div>
                    </div>
                </section>
            </div>
        </footer>
        <!-- FOOTER END -->
        </div>




</body>

</html>