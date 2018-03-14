@extends('home.layouts.index') @section('content')
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
              <a href="#"> 长期以来确定的事实是读者分心.</a>
            </p>
          </div>
        </div>
        <div class="separator" style="height:17px;"></div>

        <div class="block_home_slider">
          <div id="home_slider" class="flexslider">
            <ul class="slides">
              {{-- 遍历轮播图 --}} @foreach($data as $v)
              <li>
                <div class="slide">
                  <img src="/Home/img/{{ $v->carousel_photo }}" style="width:610px;height:292px;" alt="" />
                  <div class="caption">
                    <p class="title">{{ $v->carousel_title}}</p>
                    <p>{{$v->carousel_content}}</p>
                  </div>
                </div>
              </li>
              @endforeach

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
                useCSS: false
              });

            });
          </script>
        </div>
        
        <div class="line_2" style="margin:14px 0px 13px;"></div>
       
        <?php $i = 1;?>
        @foreach($cate as $v)
         <?php $i++;?>
    
          @if($i %2 == 0)
          
          <div class="block_home_col_1">
          
            <div class="block_home_post">
              <div class="pic">
                <a href="{{url('home/article/'.$v->cate_id.'/list')}}" class="w_hover">
                  <img src="{{$v->cate_thumb}}" style="width: 67px; height: 45px;" alt="" />
                  <span></span>
                </a>
              </div>

              <div class="text">
                <p class="title">
                  <a href="{{url('home/article/'.$v->cate_id.'/list')}}">{{$v->cate_name}}</a>
                </p>
                <div class="date">
                  <p>2012年11月</p>
                </div>
                <div class="icons">
                  <ul>
                    <li>
                      <a href="#" class="views">{{$v->cate_view}}</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="line_3" style="margin:14px 0px 17px;"></div>
          </div>
          
          @else 
          <div class="block_home_col_2">
            
              <div class="block_home_post">
                <div class="pic">
                  <a href="{{url('home/article/'.$v->cate_id.'/list')}}" class="w_hover">
                    <img src="{{$v->cate_thumb}}" style="width: 67px; height: 45px;" alt="" />
                    <span></span>
                  </a>
                </div>
  
                <div class="text">
                  <p class="title">
                    <a href="{{url('home/article/'.$v->cate_id.'/list')}}">{{$v->cate_name}}</a>
                  </p>
                  <div class="date">
                    <p>2012年11月</p>
                  </div>
                  <div class="icons">
                    <ul>
                      <li>
                        <a href="#" class="views">{{$v->cate_view}}</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="line_3" style="margin:14px 0px 17px;"></div>
            </div>
          @endif
     
        @endforeach
        


        <div class="clearboth"></div>

        <div class="line_3" style="margin:14px 0px 13px;"></div>
        <a href="main_news.html" class="lnk_all_news fl">所有新闻</a>
        <div class="clearboth"></div>
        <div class="line_3" style="margin:13px 0px 35px;"></div>

        <h3 style="font-size:16px;">主要新闻</h3>
        <div class="line_4" style="margin:-4px 0px 18px;"></div>

        <div class="block_topic_news">
          @foreach($article as $v)
          <article class="block_topic_post">
            <p class="title"><a href="{{url('/home/article/'.$v->art_id.'/info')}}">{{$v->art_title}}</a></p>
              <div class="f_pic"><a href="{{url('/home/article/'.$v->art_id.'/info')}}" class="general_pic_hover scale"><img src="{{$v->art_thumb}}" style="width: 266px; height: 121.86px;" alt="" /></a></div>
              
              <div class="info">
                <div class="date"><p>2012年7月11日</p></div>
                  
                  <div class="r_part">
                    <div class="category"><p><a href="#">查看次数</a></p></div>
                      <a href="#" class="views">183</a>
                  </div>
              </div>
          </article>
          @endforeach
          
        </div>

        <div class="line_3" style="margin:20px 0px 24px;"></div>

        <div class="block_pager">
          <a href="#" class="prev">Previous</a>
          <a href="#" class="next">Next</a>

          <div class="pages">
              {!! $article->render() !!}
          </div>

          <div class="clearboth"></div>
        </div>

        <div class="line_2" style="margin:24px 0px 35px;"></div>

        <h3 style="font-size:16px;">最好的材料</h3>
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
                      <a href="news_post.html">发布软件包和网页编辑器。</a>
                    </p>
                    <div class="info">
                      <div class="date">
                        <p>2012年7月8日</p>
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
                      <a href="news_post.html">发布软件包和网页编辑器。</a>
                    </p>
                    <div class="info">
                      <div class="date">
                        <p>2012年7月8日</p>
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
                      <a href="news_post.html">发布软件包和网页编辑器。</a>
                    </p>
                    <div class="info">
                      <div class="date">
                        <p>2012年7月8日</p>
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
                          <a href="#">业务</a>
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
                          <a href="#">人</a>
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
                          <a href="#">业务</a>
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


      <!-- CONTENT END -->
@endsection 
