@include('Home.public.header')


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
    
  <form id="art_form" class="w_validation" action="{{url('/home/article/addarti')}}" method="POST" enctype="multipart/form-data"/>
<input type="hidden" name="_token" value="{{csrf_token()}}">
{{--  {{ csrf_field() }}  --}}
      <p>标题</p>
      <div class="field"><input type="text" class="req" name="art_title"/></div>
       
        <p>描述</p>
      <div class="field"><input type="text" class="req" name="art_description"/></div>
          
      <p>标签</p>
      <div class="field"><input type="text" class="req" name="art_tag"/></div>

   
        <div class="layui-form-item">
          <input type="hidden" name="art_thumb" id="art_thumb" value="">
          <p>图片</p>
          <div class="file"><input type="file" id="file_upload" name="file_upload" value=""></div>
            {{--  显示上传图片  --}}
            <img id="img" src="" width="200">
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
                  // var formData = new FormData($('#art_form')[0]);
                  var formData = new FormData();
                  formData.append('file_upload',$('#file_upload')[0].files[0]);
           
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
                        
                          $('#img').attr('src',data);
                          //显示上传到OSS上的图片
                          // $('#thumb').attr('src','oss的域名'+data);
                          // $('#thumb').attr('src','{{ env('ALIOSS_DOMAIN') }}'+data);
                          // console.log(data);
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
@include('home.public.footer')
