<!DOCTYPE html>
<html>


<head>
  <title>博客首页</title>

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


  <!--[if lt IE 9]>
<script type="text/javascript" src="layout/plugins/html5.js"></script>
<![endif]-->


  <!-- <link rel="stylesheet" href="layout/style.css" type="text/css" /> -->
  <link rel="stylesheet" href="{{ asset('layout/style.css') }}"> {{--
  <link href="http://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel="stylesheet" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic" rel="stylesheet" type="text/css" /> --}}


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
    jQuery(function () { });
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
                    <a href="#">网站地图</a>
                  </li>
                  <li>
                    <a href="typography.html">活版印刷</a>
                  </li>
                  <li>
                    <a href="contact.html">接触</a>
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
                        <a href="#login" class="open_popup">{{session('users')['username']}}</a>
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

                  <ul>
                    <li>
                      <a href="index.html">主页样式-1</a>
                    </li>
                    <li>
                      <a href="home_style_2.html">主页样式-2</a>
                    </li>
                  </ul>
                </li>
              @foreach($cates as $v)
                <li class="big_dropdown"><a href="{{url('home/article/'.$v->cate_id.'/list')}}">{{$v->cate_name}}</a>
                  <ul>
                    @foreach($zcate as $z)
                      @if ($z->cate_pid == $v->cate_id)
                        <li>
                          <a href="{{url('home/article/'.$z->cate_id.'/list')}}">{{$z->cate_name}}</a>
                        </li>
                      @endif
                    @endforeach
                  </ul>
                </li>
              @endforeach
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
        <!-- CONTENT END -->
        @section('popup')
        <!-- POPUP BEGIN -->
        <div id="overlay"></div>
        <div id="login" class="block_popup">
          <div class="popup">
            <a href="#" class="close">关闭</a>

            <div class="content">
              <div class="title">
                <p>进入网站</p>
              </div>
              {{-- @if(count($errors)>0) @foreach($errors->all() as $value {{$value}} @endforeach @endif --}}

              <div class="form">
                <form id="addForm" method="POST">
                  {{csrf_field()}}
                  <div class="column">
                    <p class="label">账号：
                      <span>
                        <font color="red"></font>
                      </span>
                    </p>
                    <div class="field">
                      <input type="text" name="username" value="" />
                    </div>
                  </div>

                  <div class="column">
                    <p class="label">密码：
                      <span>
                        <font color="red"></font>
                      </span>
                    </p>
                    <div class="field">
                      <input type="password" name="password" />
                    </div>
                  </div>

                  <div class="column_2">
                    <div class="remember">
                      <div class="checkbox">
                        <input type="checkbox" value="1" />
                      </div>
                      <div class="remember_label">
                        <p>记住我</p>
                      </div>
                    </div>
                  </div>

                  <div class="column_2">
                    <p class="forgot_pass">
                      <a href="#">忘记密码？</a>
                    </p>
                  </div>

                  <div class="column button">
                    <button type="button" id="submitAdd">确认</button>
                    {{--
                    <a href="#" class="enter"> --}} {{--
                      <input type="submit" value="登录"> --}} {{--
                      <input type="button" value="登录"> --}} {{--
                      <span>登录</span> --}} {{-- </a> --}}
                  </div>

                  <div class="clearboth"></div>
                </form>
              </div>

              <div class="subtitle">
                <p>以用户身份登录</p>
              </div>

              <div class="fb_button">
                <a href="javscript:;" style="pointer-events: none;">
                  <img src="{{ asset('Home/layout/images/button_fb_login.png') }}" alt="" />
                </a>
              </div>
              <div class="text">
                <p>在社交网络Facebook上使用您的帐户，在Blog上创建个人资料</p>
              </div>
            </div>
          </div>
        </div>
        <script>
          $("#submitAdd").click(function () {

            var targetUrl = $("#addForm").attr("action");
            var data = new FormData($("#addForm")[0]);
            $.ajax({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              type: 'post',
              url: '/home/index/DoLogin',
              cache: false,    //上传文件不需缓存
              processData: false, //需设置为false。因为data值是FormData对象，不需要对数据做处理
              contentType: false, //需设置为false。因为是FormData对象，且已经声明了属性enctype="multipart/form-data"
              data: data,
              dataType: 'json',
              success: function (data) {
                alert('登录成功');
                location.reload();
              },
              error: function () {
                alert("账号或密码有误")
                return false;


              }
            })

          })
          // $.ajax({
          //         type : "POST", //提交方式
          //         headers: {
          //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          //         },
          //         url : '/home/index/DoLogin',//路径
          //         data : data.field,//数据，这里使用的是Json格式进行传输
          //         dataType : "Json",
          //         success : function(result) {//返回数据根据结果进行相应的处理
          //            console.log(result);
                      // 如果ajax的返回数据对象的status属性值是0，表示用户添加成功；弹添加成功的提示信息
          //            if(result.status == 0){
          //                layer.alert(result.msg, {icon: 6},function () {
                              // 获得frame索引
                              // var index = parent.layer.getFrameIndex(window.name);
                              //关闭当前frame
                              // parent.layer.close(index);

                              //刷新父页面
          //                    parent.location.reload();
          //                });
          //            }else{
          //                layer.alert(result.msg, {icon: 6},function () {
                             // 获得frame索引
                             // var index = parent.layer.getFrameIndex(window.name);
                              //关闭当前frame
                             // parent.layer.close(index);

          //                    parent.location.reload();
          //                });
          //            }
          //         }
          //     });



          //     console.log(data);
          //   //发异步，把数据提交给php

          //   return false;
          // });
        </script> @endsection
    </header>
    <!-- HEADER END -->