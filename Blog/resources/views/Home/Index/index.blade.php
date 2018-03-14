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
      @endsection {{-- 登录开始 --}} @section('popup')
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
      </script> 
      <script>
        // 登录验证
 

      </script> 
      <!-- POPUP END -->

      @endsection