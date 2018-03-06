@extends('home.layouts.index')

@section('content')
   <!-- CONTENT BEGIN -->
   <div id="content" class="right_sidebar">
    <div class="inner">
      <div class="general_content">
        <div class="main_content">
          <div class="block_special_topic">
            <div class="type">
              <p>专题</p>
            </div>
            <div class="title">
              <p>
                <a href="#">  长期以来确定的事实是读者分心.</a>
              </p>
            </div>
          </div>
          <div class="separator" style="height:17px;"></div>

          <div class="block_home_slider">
            <div id="home_slider" class="flexslider">
              <ul class="slides">
                {{--  遍历轮播图  --}}
                @foreach($data as $v)
                <li>
                  <div class="slide">
                    <img src="/Home/images/{{ $v->carousel_photo }}" alt="" />
                    <div class="caption">
                      <p class="title">{{ $v->carousel_title}}</p>
                      <p>{{$v->carousel_content}}</p>
                    </div>
                  </div>
                </li>
                @endforeach
                {{--  <li>
                  <div class="slide">
                    <img src="/Home/images/pic_home_slider_2.jpg" alt="" />
                    <div class="caption">
                      <p class="title">Many desktop publishing packages.</p>
                      <p>There are many variations of passages of available, but the majority have suffered alteration in
                        some form, by injected humour, or randomised.</p>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="slide">
                    <img src="/Home/images/pic_home_slider_3.jpg" alt="" />
                    <div class="caption">
                      <p class="title">Many desktop publishing packages and web page.</p>
                      <p>There are many variations of passages of available, but the majority.</p>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="slide">
                    <img src="/Home/images/pic_home_slider_4.jpg" alt="" />
                    <div class="caption">
                      <p class="title">Many desktop publishing packages and web page.</p>
                      <p>There are many variations of passages of available, but the majority have suffered alteration in
                        some form, by injected humour, or randomised, but the majority have suffered alteration in some
                        form, by injected humour, or randomised.</p>
                    </div>
                  </div>
                </li>  --}}
              </ul>
            </div>

            <script type="text/javascript">
              $(function () {
                $('#home_slider').flexslider({
                  animation: 'slide',
                  controlNav: true,
                  directionNav: true,
                  animationLoop: true,
                  slideshow: true,
                  useCSS: true
                });

              });
            </script>
            
          </div>

          <div class="line_2" style="margin:34px 0px 28px;"></div>

          <div class="block_home_col_1">
            <div class="block_home_post">
              <div class="pic">
                <a href="news_post.html" class="w_hover">
                  <img src="/Home/images/pic_home_news_1.jpg" alt="" />
                  <span></span>
                </a>
              </div>

              <div class="text">
                <p class="title">
                  <a href="news_post.html">There are many variations of of available, but the majority.</a>
                </p>
                <div class="date">
                  <p>11 July, 2012</p>
                </div>
                <div class="icons">
                  <ul>
                    <li>
                      <a href="#" class="views">56</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="line_3" style="margin:14px 0px 17px;"></div>

            <div class="block_home_post">
              <div class="pic">
                <a href="news_post.html" class="w_hover">
                  <img src="/Home/images/pic_home_news_2.jpg" alt="" />
                  <span></span>
                </a>
              </div>

              <div class="text">
                <p class="title">
                  <a href="news_post.html">Variations of of available, but the majority have suffered.</a>
                </p>
                <div class="date">
                  <p>11 July, 2012</p>
                </div>
                <div class="icons">
                  <ul>
                    <li>
                      <a href="#" class="views">74</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="line_3" style="margin:14px 0px 17px;"></div>

            <div class="block_home_post">
              <div class="pic">
                <a href="news_post.html" class="w_hover">
                  <img src="/Home/images/pic_home_news_3.jpg" alt="" />
                  <span></span>
                </a>
              </div>

              <div class="text">
                <p class="title">
                  <a href="news_post.html">Majority alteration in some form, by injected humour.</a>
                </p>
                <div class="date">
                  <p>11 July, 2012</p>
                </div>
                <div class="icons">
                  <ul>
                    <li>
                      <a href="#" class="views">88</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

          </div>

          <div class="block_home_col_2">
            <div class="line_3 first" style="margin:14px 0px 17px;"></div>
            <div class="block_home_post">
              <div class="pic">
                <a href="news_post.html" class="w_hover">
                  <img src="/Home/images/pic_home_news_4.jpg" alt="" />
                  <span></span>
                </a>
              </div>

              <div class="text">
                <p class="title">
                  <a href="news_post.html">Many variations of of available, but the majority.</a>
                </p>
                <div class="date">
                  <p>11 July, 2012</p>
                </div>
                <div class="icons">
                  <ul>
                    <li>
                      <a href="#" class="views">56</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="line_3" style="margin:14px 0px 17px;"></div>

            <div class="block_home_post">
              <div class="pic">
                <a href="news_post.html" class="w_hover">
                  <img src="/Home/images/pic_home_news_5.jpg" alt="" />
                  <span></span>
                </a>
              </div>

              <div class="text">
                <p class="title">
                  <a href="news_post.html">Readable content of a page when looking readable content.</a>
                </p>
                <div class="date">
                  <p>11 July, 2012</p>
                </div>
                <div class="icons">
                  <ul>
                    <li>
                      <a href="#" class="views">74</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="line_3" style="margin:14px 0px 17px;"></div>

            <div class="block_home_post">
              <div class="pic">
                <a href="news_post.html" class="w_hover">
                  <img src="/Home/images/pic_home_news_6.jpg" alt="" />
                  <span></span>
                </a>
              </div>

              <div class="text">
                <p class="title">
                  <a href="news_post.html">Randomised words which don't look even slightly believable.</a>
                </p>
                <div class="date">
                  <p>11 July, 2012</p>
                </div>
                <div class="icons">
                  <ul>
                    <li>
                      <a href="#" class="views">88</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
          <div class="clearboth"></div>

          <div class="line_3" style="margin:14px 0px 13px;"></div>
          <a href="main_news.html" class="lnk_all_news fl">All News</a>
          <div class="clearboth"></div>
          <div class="line_3" style="margin:13px 0px 35px;"></div>

          <h3 style="font-size:16px;">Main News</h3>
          <div class="line_4" style="margin:-4px 0px 18px;"></div>

          <div class="block_topic_news">
            <article class="block_topic_post">
              <p class="title">
                <a href="news_post.html">Many desktop publishing packages and web page editors now use.</a>
              </p>
              <div class="f_pic">
                <a href="news_post.html" class="general_pic_hover scale">
                  <img src="/Home/images/pic_home_main_news_1.jpg" alt="" />
                </a>
              </div>
              <p class="text">There are many variations of passages of available, but the majority have alteration.</p>
              <div class="info">
                <div class="date">
                  <p>11 July, 2012</p>
                </div>

                <div class="r_part">
                  <div class="category">
                    <p>
                      <a href="#">Business</a>
                    </p>
                  </div>
                  <a href="#" class="views">183</a>
                </div>
              </div>
            </article>

            <article class="block_topic_post">
              <p class="title">
                <a href="news_post.html">Many desktop publishing packages and web page editors now use.</a>
              </p>
              <div class="f_pic">
                <a href="news_post.html" class="general_pic_hover scale">
                  <img src="/Home/images/pic_home_main_news_2.jpg" alt="" />
                </a>
              </div>
              <p class="text">There are many variations of passages of available, but the majority have alteration.</p>
              <div class="info">
                <div class="date">
                  <p>11 July, 2012</p>
                </div>

                <div class="r_part">
                  <div class="category">
                    <p>
                      <a href="#">Business</a>
                    </p>
                  </div>
                  <a href="#" class="views">183</a>
                </div>
              </div>
            </article>

            <article class="block_topic_post">
              <p class="title">
                <a href="news_post.html">Many desktop publishing packages and web page editors now use.</a>
              </p>
              <div class="f_pic">
                <a href="news_post.html" class="general_pic_hover scale">
                  <img src="/Home/images/pic_home_main_news_3.jpg" alt="" />
                </a>
              </div>
              <p class="text">There are many variations of passages of available, but the majority have alteration.</p>
              <div class="info">
                <div class="date">
                  <p>11 July, 2012</p>
                </div>

                <div class="r_part">
                  <div class="category">
                    <p>
                      <a href="#">Business</a>
                    </p>
                  </div>
                  <a href="#" class="views">183</a>
                </div>
              </div>
            </article>

            <article class="block_topic_post">
              <p class="title">
                <a href="news_post.html">Many desktop publishing packages and web page editors now use.</a>
              </p>
              <div class="f_pic">
                <a href="news_post.html" class="general_pic_hover scale">
                  <img src="/Home/images/pic_home_main_news_4.jpg" alt="" />
                </a>
              </div>
              <p class="text">There are many variations of passages of available, but the majority have alteration.</p>
              <div class="info">
                <div class="date">
                  <p>11 July, 2012</p>
                </div>

                <div class="r_part">
                  <div class="category">
                    <p>
                      <a href="#">Business</a>
                    </p>
                  </div>
                  <a href="#" class="views">183</a>
                </div>
              </div>
            </article>

          </div>

          <div class="line_3" style="margin:20px 0px 24px;"></div>

          <div class="block_pager">
            <a href="#" class="prev">Previous</a>
            <a href="#" class="next">Next</a>

            <div class="pages">
              <ul>
                <li class="current">
                  <a href="#">1</a>
                </li>
                <li>
                  <a href="#">2</a>
                </li>
                <li>
                  <a href="#">3</a>
                </li>
                <li>
                  <a href="#">4</a>
                </li>
                <li>
                  <a href="#">5</a>
                </li>
                <li>
                  <a href="#">6</a>
                </li>
              </ul>
            </div>

            <div class="clearboth"></div>
          </div>

          <div class="line_2" style="margin:24px 0px 35px;"></div>

          <h3 style="font-size:16px;">Best Materials</h3>
          <div class="line_4" style="margin:-4px 0px 18px;"></div>

          <div class="block_best_materials">
            <div class="slider">
              <div id="best_materials_slider" class="flexslider">
                <ul class="slides">
                  <li>
                    <div class="block_best_material_post">
                      <div class="f_pic">
                        <a href="news_post.html" class="w_hover">
                          <img src="/Home/images/pic_home_best_materials_1.jpg" alt="" />
                          <span></span>
                        </a>
                      </div>
                      <p class="title">
                        <a href="news_post.html">Publishing packages and web page editors their.</a>
                      </p>
                      <div class="info">
                        <div class="date">
                          <p>08 July, 2012</p>
                        </div>
                        <div class="category">
                          <p>
                            <a href="#">Business</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </li>

                  <li>
                    <div class="block_best_material_post">
                      <div class="f_pic">
                        <a href="news_post.html" class="w_hover">
                          <img src="/Home/images/pic_home_best_materials_2.jpg" alt="" />
                          <span></span>
                        </a>
                      </div>
                      <p class="title">
                        <a href="news_post.html">Publishing packages and web page editors their.</a>
                      </p>
                      <div class="info">
                        <div class="date">
                          <p>08 July, 2012</p>
                        </div>
                        <div class="category">
                          <p>
                            <a href="#">People</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </li>

                  <li>
                    <div class="block_best_material_post">
                      <div class="f_pic">
                        <a href="news_post.html" class="w_hover">
                          <img src="/Home/images/pic_home_best_materials_3.jpg" alt="" />
                          <span></span>
                        </a>
                      </div>
                      <p class="title">
                        <a href="news_post.html">Publishing packages and web page editors their.</a>
                      </p>
                      <div class="info">
                        <div class="date">
                          <p>08 July, 2012</p>
                        </div>
                        <div class="category">
                          <p>
                            <a href="#">Technology</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </li>

                  <li>
                    <div class="block_best_material_post">
                      <div class="f_pic">
                        <a href="news_post.html" class="w_hover">
                          <img src="/Home/images/pic_home_best_materials_4.jpg" alt="" />
                          <span></span>
                        </a>
                      </div>
                      <p class="title">
                        <a href="news_post.html">Publishing packages and web page editors their.</a>
                      </p>
                      <div class="info">
                        <div class="date">
                          <p>08 July, 2012</p>
                        </div>
                        <div class="category">
                          <p>
                            <a href="#">Business</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </li>

                  <li>
                    <div class="block_best_material_post">
                      <div class="f_pic">
                        <a href="news_post.html" class="w_hover">
                          <img src="/Home/images/pic_home_best_materials_5.jpg" alt="" />
                          <span></span>
                        </a>
                      </div>
                      <p class="title">
                        <a href="news_post.html">Publishing packages and web page editors their.</a>
                      </p>
                      <div class="info">
                        <div class="date">
                          <p>08 July, 2012</p>
                        </div>
                        <div class="category">
                          <p>
                            <a href="#">People</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </li>

                  <li>
                    <div class="block_best_material_post">
                      <div class="f_pic">
                        <a href="news_post.html" class="w_hover">
                          <img src="/Home/images/pic_home_best_materials_6.jpg" alt="" />
                          <span></span>
                        </a>
                      </div>
                      <p class="title">
                        <a href="news_post.html">Publishing packages and web page editors their.</a>
                      </p>
                      <div class="info">
                        <div class="date">
                          <p>08 July, 2012</p>
                        </div>
                        <div class="category">
                          <p>
                            <a href="#">Technology</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>

            <script type="text/javascript">
              $(function () {
                $('#best_materials_slider').flexslider({
                  animation: 'slide',
                  controlNav: false,
                  directionNav: true,
                  animationLoop: false,
                  slideshow: false,
                  itemWidth: 213,
                  itemMargin: 0,
                  minItems: 1,
                  maxItems: 3,
                  move: 1,
                  useCSS: false
                });
              });
            </script>
          </div>

          <div class="line_2" style="margin:20px 0px 0px;"></div>

        </div>

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
            <h4>Popular Video</h4>

            <div class="content">
              <a href="#" class="view_all">Show all video</a>
              <div class="media">
                <a href="http://www.youtube.com/watch?v=ySIvism2af8" class="general_pic_hover play no_fx" data-rel="prettyPhoto"
                  title="Popular Video">
                  <img src="/Home/images/pic_pop_video.jpg" alt="" />
                </a>
              </div>
              <p>
                <a href="blog_post_w_video.html">Publishing packages and web page editors their default model.</a>
                <img src="/Home/images/icon_video.gif" alt=""
                />
              </p>
              <p class="date">11 July, 2012</p>
            </div>

            <div class="info">
              <ul>
                <li class="comments">
                  <a href="#">115</a>
                </li>
                <li class="views">
                  <a href="#">220</a>
                </li>
              </ul>
            </div>

            <div class="clearboth"></div>

            <div class="line_2"></div>
          </div>

          <div class="separator" style="height:31px;"></div>

          <div class="block_calendar">
            <h4>日历</h4>

            <div class="calendar" id="calendar_sidebar">
            </div>

            <script type="text/javascript">
              var today = new Date();
              var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
              $('#calendar_sidebar').DatePicker({
                flat: true,
                date: date,
                calendars: 1,
                starts: 1,
                locale: {
                  days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                  daysShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                  daysMin: ['S', 'M', 'T', 'W', 'T', 'F', 'S', 'S'],
                  months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                    'October', 'November', 'December'
                  ],
                  monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov',
                    'Dec'
                  ],
                  weekMin: 'wk'
                }
              });
            </script>

            <div class="line_2"></div>
          </div>

          <div class="separator" style="height:31px;"></div>

          <div class="block_twitter_widget">
            <h4>Twitter Widget</h4>
            <div class="lnk_follow">
              <a href="#" target="_blank">Follow on Twitter</a>
            </div>

            <div class="tweet">
              <!-- <script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script> -->
              <script type="text/javascript" src="layout/plugins/tweet/tweet.widget.js"></script>
              <script type="text/javascript">
                // ('YOUR USERNAME','NUMBER OF POSTS');
                // AddTweet('Web_Visions', 1);
              </script>
            </div>

            <div class="line_2"></div>
          </div>

          <div class="separator" style="height:31px;"></div>

          <div class="block_popular_stuff">
            <h4>Popular Photo</h4>

            <div class="content">
              <a href="#" class="view_all">Show all photos</a>
              <div class="media">
                <a href="/Home/images/pic_pop_photo_big.jpg" class="general_pic_hover zoom no_fx" data-rel="prettyPhoto" title="Popular Photo">
                  <img src="/Home/images/pic_pop_photo.jpg" alt="" />
                </a>
              </div>
              <p>
                <a href="blog_post_w_slider.html">Editors their default model text, and a search for will uncover many.</a>
                <img src="/Home/images/icon_photo.gif"
                  alt="" />
              </p>
              <p class="date">11 July, 2012</p>
            </div>

            <div class="info">
              <ul>
                <li class="comments">
                  <a href="#">100</a>
                </li>
                <li class="views">
                  <a href="#">134</a>
                </li>
              </ul>
            </div>

            <div class="clearboth"></div>

            <div class="line_2"></div>
          </div>

          <div class="separator" style="height:31px;"></div>

          <div class="block_newsletter">
            <h4>Newsletter</h4>

            <form action="#" />
            <div class="field">
              <input type="text" class="w_def_text" title="Enter Your Email Addres" />
            </div>
            <input type="submit" class="button" value="Subscribe" />

            <div class="clearboth"></div>
            </form>
          </div>

        </div>

        <div class="clearboth"></div>
      </div>
    </div>
  </div>
  <!-- CONTENT END -->
@endsection

{{--  登录开始  --}}
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

    <div class="form">
      <form action="/home/index/DoLogin"  method="POST">
        {{csrf_field()}}
      <div class="column">
        <p class="label">账号：<span><font color="red"></font></span></p>
        <div class="field">
          <input type="text" name="username" value=""/>
        </div>
      </div>

      <div class="column">
        <p class="label">密码：<span><font color="red"></font></span></p>
        <div class="field">
          <input type="password" name="password"/>
        </div>
      </div>

      <div class="column_2">
        <div class="remember">
          <div class="checkbox">
            <input type="checkbox" value="1"/>
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
        {{--  <a href="#" class="enter">  --}}
          <input type="submit" value="登录">
          {{--  <input type="button" value="登录">  --}}
          {{--  <span>登录</span>  --}}
        {{--  </a>  --}}
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
    $(function(){
  
     var ok1=false;
     var ok2=false;
    
     // 验证用户名
     $('input[name="username"]').focus(function(){
      $(this).next().text('用户名应该为3-20位之间').removeClass('state1').addClass('state2');
     }).blur(function(){
      if($(this).val().length >= 3 && $(this).val().length <=12 && $(this).val()!=''){
       $(this).next().innerHTML('输入成功').removeClass('state1').addClass('state4');
  
       ok1=true;
      }else{
       $(this).next().text('用户名应该为3-20位之间').removeClass('state1').addClass('state3');
   
      }
       
     });
  
     //验证密码
     $('input[name="password"]').focus(function(){
      $(this).next().text('密码应该为6-20位之间').removeClass('state1').addClass('state2');
     }).blur(function(){
      if($(this).val().length >= 6 && $(this).val().length <=20 && $(this).val()!=''){
       $(this).next().text('输入成功').removeClass('state1').addClass('state4');
       ok2=true;
      }else{
       $(this).next().text('密码应该为6-20位之间').removeClass('state1').addClass('state3');
      }
       
     });       
     });
  
     //提交按钮,所有验证通过方可提交
  
     $('.submit').click(function(){
      if(ok1 && ok2){
       $('form').submit();
      }else{
       return false;
      }
     });
      
    });
   </script>
{{--  <script>
  // 登录验证
  $(function (){
    $(.column button).click(function(){
      var 
    })
  })
 
</script>  --}}
<!-- POPUP END -->

@endsection