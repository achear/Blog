

{{--  头部开始  --}}
<!DOCTYPE html>
<html>


<head>
  <title>博客首页</title>


  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="csrf-token" content="{{csrf_token()}}"/>

  <meta charset="utf-8" />
  {{--  <meta name="viewport" content="width=device-width" />  --}}


  <!--[if lt IE 9]>
<script type="text/javascript" src="layout/plugins/html5.js"></script>
<![endif]-->


  <!-- <link rel="stylesheet" href="layout/style.css" type="text/css" /> -->
  <link rel="stylesheet" href="{{ asset('layout/style.css') }}">
  {{--  <link href="http://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel="stylesheet" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic" rel="stylesheet" type="text/css" />  --}}


  <script type="text/javascript" src="/Home/layout/js/jquery.js"></script>


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
                    <a href="index.html">首页</a>
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
                        <a href="#login" class="open_popup">{{session('users')['username']}}</a>
                      </li>
                      <li>
                        <a href="{{url('home/index/registration')}}">个人中心</a>
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
                  <input type="text" name="search" value="" class="w_def_text" title="Enter Your Email Addres" />
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

{{--  头部结束  --}}
<div id="content" class="right_sidebar">
  <div class="inner">
      <div class="general_content">
          <div class="main_content">
              <div class="block_breadcrumbs">
                  <div class="text"><p>发表文章:</p></div>
<div class="separator" style="height:30px;"></div>
                        
<div class="block_leave_reply">
  <h3>编写你的文章</h3>
  <p class="text"></p>
    
  <form id="art_form" class="w_validation" action="{{url('/home/article/addarti')}}" method="POST" />
<input type="hidden" name="_token" value="{{csrf_token()}}">
{{--  {{ csrf_field() }}  --}}
      <p>标题</p>
      <div class="field"><input type="text" class="req" name="art_title"/></div>
       
        <p>描述</p>
      <div class="field"><input type="text" class="req" name="art_description"/></div>
          
      <p>标签</p>
      <div class="field"><input type="text" class="req" name="art_tag"/></div>

   
        <div class="layui-form-item">
        
          <p>图片</p>
          <div class="file"><input type="file" id="file_upload" name="file_upload" value=""></div>
          <script type="text/javascript">
              $(function () {
                  $("#file_upload").change(function () {
                      uploadImage();
                  })
              })
              function uploadImage() {
                  //  判断是否有选择上传文件
                  var imgPath = $("#file_upload").val();
                  if (imgPath == "") {
                      alert("请选择上传图片！");
                      return;
                  }
                  //判断上传文件的后缀名
                  var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);
                  if (strExtension != 'jpg' && strExtension != 'gif'
                      && strExtension != 'png' && strExtension != 'bmp') {
                      alert("请选择图片文件");
                      return;
                  }
                  //将整个表单打包进formData
                  var formData = new FormData($('#art_form')[0]);
           
                  $.ajax({
                      type: "POST",
                      url: "/home/article/update",
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      },
                      data: formData,
                      contentType: false,
                      processData: false,
                      async: true,
                      cache: false,
                      success: function (data) {

                          $('#thumb').attr('src', data);
                          //显示上传到OSS上的图片
                          // $('#thumb').attr('src','oss的域名'+data);
                          // $('#thumb').attr('src','{{ env('ALIOSS_DOMAIN') }}'+data);
                          $('#art_thumb').val(data);
                      },
                      error: function (XMLHttpRequest, textStatus, errorThrown) {
                          alert("上传失败，请检查网络后重试");
                      }
                  });
              }
          </script>
          <div class="" style="height:20px;width:40px;"></div>
        <p>内容</p>
        <div class="" style="height:20px;width:40px;"></div>
        <div class="layui-input-block">
            <script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
            <script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
            <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
            <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
            <script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>

            <script name="art_content" id="editor" type="text/plain" style="width:600px;height:300px;"></script>

            <script type="text/javascript">

                //实例化编辑器
                //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
                var ue = UE.getEditor('editor');
            </script>
        </div>


        
        
        <input type="submit" class="general_button" value="提交" />
    </form>
    <div class="" style="height:20px;width:40px;"></div>
</div>

</div>

<div class="sidebar">
<div class="block_subscribes_sidebar" style="display:none;">
  

</div>

<div class="clearboth"></div>
</div>
</div>
</div>


<div class="" style="height:80px;width:40px;"></div>

{{--  list开始  --}}
<div class="sidebar">
  <div class="block_subscribes_sidebar">
    <div class="service">
      <a href="#" class="rss">
        <span class="num">11 234</span>
        <span class="people">用户</span>
      </a>
    </div>

    <div class="service">
      <a href="#" class="tw">
        <span class="num">781</span>
        <span class="people">用户</span>
      </a>
    </div>

    <div class="service">
      <a href="#" class="fb">
        <span class="num">341</span>
        <span class="people">用户</span>
      </a>
    </div>
  </div>

  <div class="separator" style="height:31px;"></div>

  <div class="block_popular_posts">
    <h4>热门帖子</h4>

    <div class="article">
      <div class="pic">
        <a href="#" class="w_hover">
          <img src="/Home/images/pic_popular_post_1.jpg" alt="" />
          <span></span>
        </a>
      </div>

      <div class="text">
        <p class="title">
          <a href="#">网页编辑他们的默认模型文本，并进行搜索.</a>
        </p>
        <div class="date">
          <p>xxxx</p>
        </div>
        <div class="icons">
          <ul>
            <li>
              <a href="#" class="views">41</a>
            </li>
            <li>
              <a href="#" class="comments">22</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="line_3"></div>

    <div class="article">
      <div class="pic">
        <a href="#" class="w_hover">
          <img src="/Home/images/pic_popular_post_2.jpg" alt="" />
          <span></span>
        </a>
      </div>

      <div class="text">
        <p class="title">
          <a href="#">网页编辑他们的默认模型文本，并进行搜索.</a>
        </p>
        <div class="date">
          <p>07 July, 2012</p>
        </div>
        <div class="icons">
          <ul>
            <li>
              <a href="#" class="views">24</a>
            </li>
            <li>
              <a href="#" class="comments">16</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="line_3"></div>

    <div class="article">
      <div class="pic">
        <a href="#" class="w_hover">
          <img src="/Home/images/pic_popular_post_3.jpg" alt="" />
          <span></span>
        </a>
      </div>

      <div class="text">
        <p class="title">
          <a href="#">Editors their default model text, and a search uncover.</a>
        </p>
        <div class="date">
          <p>05 July, 2012</p>
        </div>
        <div class="icons">
          <ul>
            <li>
              <a href="#" class="views">33</a>
            </li>
            <li>
              <a href="#" class="comments">25</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="line_2"></div>
  </div>

  <div class="separator" style="height:31px;"></div>

  <div class="block_popular_stuff">
   
      </div>
   
    </div>

    <div class="info">
    
    </div>

    

  </div>
    </div>
  </div>
  </div>
  </div>
</div>
</div>
</div>
</div>
{{--  list - end  --}}
{{--  @endsection  --}}

{{--  尾部开始  --}}
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


{{-- 登录开始 --}}

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
              <form action="/home/index/DoLogin" id="addForm" method="POST">
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

      </script> 

      <!-- POPUP END -->




</body>

</html>

{{--  尾部结束  --}}