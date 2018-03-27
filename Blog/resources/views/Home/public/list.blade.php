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
    @foreach($Popular as $v)
    <div class="article">
      <div class="pic">
        <a href="{{url('/home/article/'.$v->art_id.'/info')}}" class="w_hover">
          <img src="{{$v->art_thumb}}" style="width: 48px; height: 48px;" alt="" />
          <span></span>
        </a>
      </div>

      <div class="text">
        <p class="title">
          <a href="{{url('/home/article/'.$v->art_id.'/info')}}">{{$v->art_title}}</a>
        </p>
        <div class="date">
          <p>{{$v->art_description}}</p>
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
    @endforeach
    
    <div class="line_2"></div>
  </div>

  <div class="separator" style="height:31px;"></div>

  <div class="block_popular_stuff">
    <h4>流行</h4>

    <div class="content">
      <a href="#" class="view_all">显示所有</a>
      <div class="media">
        <a href="http://www.youtube.com/watch?v=ySIvism2af8" class="general_pic_hover play no_fx" data-rel="prettyPhoto"
          title="Popular Video">
          <img src="/Home/images/pic_pop_video.jpg" alt="" />
        </a>
      </div>
      <p>
        <a href="blog_post_w_video.html">发布软件包和网页编辑器的默认模型。</a>
        <img src="/Home/images/icon_video.gif" alt=""
        />
      </p>
      <p class="date">2012年7月11日</p>
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
    <h4>推特小工具</h4>
    <div class="lnk_follow">
      <a href="#" target="_blank">在Twitter上关注</a>
    </div>

    <div class="tweet">
      <!-- <script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script> -->
      <script type="text/javascript" src="/Home/layout/plugins/tweet/tweet.widget.js"></script>
      <script type="text/javascript">
        // ('YOUR USERNAME','NUMBER OF POSTS');
        // AddTweet('Web_Visions', 1);
      </script>
    </div>

    <div class="line_2"></div>
  </div>

  <div class="separator" style="height:31px;"></div>

  <div class="block_popular_stuff">
    <h4>流行照片</h4>

    <div class="content">
      <a href="#" class="view_all">显示所有照片</a>
      <div class="media">
        <a href="/Home/images/pic_pop_photo_big.jpg" class="general_pic_hover zoom no_fx" data-rel="prettyPhoto" title="Popular Photo">
          <img src="/Home/images/pic_pop_photo.jpg" alt="" />
        </a>
      </div>
      <p>
        <a href="blog_post_w_slider.html">编辑他们的默认模型文本，搜索将显示许多。</a>
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