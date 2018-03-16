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
            <h3>友情链接</h3>

            <div class="block_tags">
              <ul>
                @foreach($links as $l)
                <li>
                  <a href="{{$l->link_url}}">{{$l->link_name}}</a>
                </li>
                @endforeach
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
              console.log(data);
              if(data == 1){
                alert('登录成功');
              location.reload();
              }else{
                alert('账号或密码有误');
            
              }
              
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