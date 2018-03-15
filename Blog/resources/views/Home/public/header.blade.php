<!DOCTYPE html>
<html>


<head>
  <title><?php 
    $a = require '../config/webconfig.php';
    if(isset($a['title'])){
      echo $a['title'];
    }else{
      echo '';
    }

    if(isset($a['title_fujia'])){
      echo $a['title_fujia'];
    }else{
      echo '';
    }

  ?> </title>

<!-- 关键字 -->
  <meta name="keywords" content="  <?php 
    $a = require '../config/webconfig.php';
    if(isset($a['keywords'])){
      echo $a['keywords'];
    }else{
      echo '';
    }
  ?> " />


  <!-- 描述 -->
  <meta name="description" content="  <?php 
    if(isset($a['description'])){
      echo $a['description'];
    }else{
      echo '';
    }
  ?> " />

 <!-- laravel token -->
  <meta name="csrf-token" content="{{csrf_token()}}"/>
   <!-- 字符集 -->
   <meta http-equiv="content-type" content="text/html;charset=utf-8">
  <!-- 爬虫的索引方式 -->
  <meta name="robots" content="all">
  <!-- 爬虫的重访时间 -->
  <meta name="revisit-after" content="7 days" >
  <!-- 作者 -->
  <meta name="author" content="兄弟连198期某小组二期项目作品">
  <!-- 多核浏览器默认渲染方式 -->
  <meta name="renderer" content="chrome">
  <!-- 浏览器采取何种版本渲染当前页面 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <!-- 指定请求和响应遵循的缓存机制 -->
  <meta http-equiv="Cache-Control" content="no-siteapp" />




  <!--[if lt IE 9]>
<script type="text/javascript" src="layout/plugins/html5.js"></script>
<![endif]-->

  <!-- 图标 -->
  <link rel="Shortcut Icon" href="https://www.easyicon.net/api/resizeApi.php?id=1176042&size=16" type="image/ico" />

  <!-- <link rel="stylesheet" href="layout/style.css" type="text/css" /> -->
  <link rel="stylesheet" href="{{ asset('layout/style.css') }}">
  {{--  <link href="http://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel="stylesheet" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic" rel="stylesheet" type="text/css" />  --}}


  <script type="text/javascript" src="/Home/layout/js/jquery.js"></script>
  <script type="text/javascript" src="/Admin/lib/layui/layui.js" charset="utf-8"></script>

  <!-- PrettyPhoto start -->
  <link rel="stylesheet" href="/Home/layout/plugins/prettyphoto/css/prettyPhoto.css" type="text/css" />
  <script type="text/javascript" src="/Home/layout/plugins/prettyphoto/jquery.prettyPhoto.js"></script>
  <!-- PrettyPhoto end -->


  <!-- jQuery tools start -->
  <script type="text/javascript" src="/Home/layout/plugins/tools/jquery.tools.min.js"></script>
  <!-- jQuery tools end -->


  <!-- Calendar start -->
  <link rel="stylesheet" href="/Home/layout/plugins/calendar/calendar.css" type="text/css" />
  <script type="text/javascript" src="/Home/layout/plugins/calendar/calendar.js"></script>
  <!-- Calendar end -->


  <!-- ScrollTo start -->
  <script type="text/javascript" src="/Home/layout/plugins/scrollto/jquery.scroll.to.min.js"></script>
  <!-- ScrollTo end -->


  <!-- MediaElements start -->
  <link rel="stylesheet" href="/Home/layout/plugins/video-audio/mediaelementplayer.css" />
  <script src="/Home/layout/plugins/video-audio/mediaelement-and-player.js"></script>
  <!-- MediaElements end -->


  <!-- FlexSlider start -->
  <link rel="stylesheet" href="/Home/layout/plugins/flexslider/flexslider.css" type="text/css" />
  <script type="text/javascript" src="/Home/layout/plugins/flexslider/jquery.flexslider-min.js"></script>
  <!-- FlexSlider end -->


  <!-- iButtons start -->
  <link rel="stylesheet" href="/Home/layout/plugins/ibuttons/css/jquery.ibutton.css" type="text/css" />
  <script type="text/javascript" src="/Home/layout/plugins/ibuttons/lib/jquery.ibutton.min.js"></script>
  <!-- iButtons end -->


  <!-- jQuery Form Plugin start -->
  <script type="text/javascript" src="/Home/layout/plugins/ajaxform/jquery.form.js"></script>
  <!-- jQuery Form Plugin end -->


  <script type="text/javascript" src="/Home/layout/js/main.js"></script>


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
                
                 
                </ul>
              </div>
            </div>
            @if(!session('users'))
            <div class="fr">
              <div class="block_top_menu">
                <ul>
                  <li class="current">
                    <a href="{{url('#login')}}" class="open_popup">登录</a>
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
                        <a href="JavaScript:;">{{session('users')['username']}}</a>
                      </li>
                      <li>
                        <a href="{{url('home/index/personal')}}">个人中心</a>
                      </li>
                      <li>
                        <a href="{{url('/home/index/loginout')}}">退出登录</a>
                      </li>
                    </ul>
                  </div>
                  @endif

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
                <img src="{{asset('Home/images/logo_top.png')}}" alt="BusinessNews" title="BusinessNews" />
                <img src="/Home/images/logo_top.png" alt="BusinessNews" title="BusinessNews" />
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
                  {{--  <p>Language:</p>  --}}
                </div>
                <ul>
                  <li class="current">
                    {{--  <a href="#" class="eng">English</a>  --}}
                  </li>
                  <li>
                    {{--  <a href="#" class="french">French</a>  --}}
                  </li>
                  <li>
                    {{--  <a href="#" class="ger">German</a>  --}}
                  </li>
                </ul>

                <div class="clearboth"></div>
              </div>

              <div class="block_search_top">
                <form action="{{url('/home/article/search')}}" method="get">
                <div class="field">
                  <input type="text" name="search" value="" class="w_def_text" title="在这里搜索文章" />
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
                  <a href="/">首页</a>

                 
                </li>
              @foreach($cates as $v)
                <li class="big_dropdown"><a href="{{url('home/article/'.$v->cate_id.'/list')}}">{{$v->cate_name}}</a>
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
              @endforeach
              <li class="current_page_item">
                <a href="{{url('home/article/publish')}}">发帖</a>

               
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
                
                </div>

                <div class="clearboth"></div>
              </div>
            </div>

            <div class="block_big_dropdown" data-menu="technology">
              <div class="content">
                <div class="image">
                  <a href="blog_post.html" class="pic">

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
                    <img src="{{asset('Home/images/pic_big_drop_2.jpg')}}" alt="" />
                    <img src="/Home/images/pic_big_drop_2.jpg" alt="" />
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
                
                <div class="clearboth"></div>
              </div>
            </div>
          </div>
        </section>

        <section class="section_secondary_menu">
          <div class="inner">
            <nav class="secondary_menu">
           
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
