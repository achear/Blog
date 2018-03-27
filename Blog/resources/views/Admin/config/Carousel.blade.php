<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.0</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
      <link rel="stylesheet" href="{{ asset('admin/css/font.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/css/xadmin.css') }}">
      <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
      <link rel="stylesheet" href="{{asset('Admin/css/layui.css')}}" media="all">
      <script src="{{ asset('admin/lib/layui/layui.js') }}" charset="utf-8"></script>
      <script type="text/javascript" src="{{ asset('admin/js/xadmin.js') }}"></script> 
      <script type="text/javascript" src="{{ asset('Admin/lib/layui/lay/modules/upload.js') }}"></script> 
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
      <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
    <div class="alert alert-danger">
        {{--判断是否添加错误的提示信息--}}
     
        @if(!empty(session('msg')))
        <button data-method="offset" data-type="auto" class="layui-btn layui-btn-normal">{{ session('msg') }}</button>
        @endif
       
   
    </div>
    
    <div class="x-body">
        <div class="layui-form-item">
            <label class="layui-form-label">选择修改页</label>
            <div class="layui-input-inline">
              <select name="interest" lay-filter="exit" id="selec">
                {{--  展示的轮播图id  --}}
              @foreach($data as $v)
                <option value="{{$v->id}}">{{$v->id}}</option>
              @endforeach
              </select>
            </div>
          </div>
    <form class="layui-form" action="{{ url('admin/config/CarChange') }}" method="get" enctype="multipart/form-data">
          {{csrf_field()}}
          <input type="hidden" name="carousel_id" value="{{$data[0]->id}}">
            <div class="layui-form-item">
            <label class="layui-form-label">标题</label>
                <div class="layui-input-inline">
                  <input name="carousel_title" id="carousel_title" lay-verify="required" placeholder="{{ $data[0]->carousel_title}}" autocomplete="off" class="layui-input" type="text">
                </div>
              </div>
            </div>
                <div class="layui-form-item">
                  <label class="layui-form-label">内容</label>
                  <div class="layui-input-block">
                    <input name="carousel_content" autocomplete="off" placeholder="{{$data[0]->carousel_content}}" class="layui-input" type="text">
                  </div>
                </div> 
               
                  <div class="layui-form-item">
                      <label for="L_art_editor" class="layui-form-label">
                          <span class="x-red">*</span>缩略图
                          <input type="hidden" name="carousel_photo" id="carousel_photo">
                      </label>
                      <div class="layui-upload">
                            <button type="button" class="layui-btn" id="test1">上传图片</button>
                            <div class="layui-upload-list">
                              <img class="layui-upload-img" id="demo1" width="200">
                              <p id="demoText"></p>
                            </div>
                          </div> 
                      <script type="text/javascript">
                        layui.use('upload', function(){
                            var $ = layui.jquery
                            ,upload = layui.upload;
                            
                            
                            //普通图片上传
                            var uploadInst = upload.render({
                                elem: '#test1'
                                ,url: '/admin/config/upload'
                             
                                ,before: function(obj){
                                //预读本地文件示例，不支持ie8
                                obj.preview(function(index, file, result){
                                    
                                    $('#demo1').attr('src', result); //图片链接（base64）
                                });
                                }
                                ,done: function(res){
                                //如果上传失败
                                if(res.code > 0){
                                    return layer.msg('上传失败');
                                }
                                $('#carousel_photo').val(res);
                                // demoText.html();
                                
                                //上传成功
                                }
                           
                            });
                        });
                    </script>

                  <div class="layui-form-item">
                      <label class="layui-form-label">预览</label>
                      <div class="layui-input-block">
                          <img src="/Home/img/{{$data[0]->carousel_photo}}" alt="" width="200px">
                      </div>
                  </div> 
                 
                 
                  {{--  @endforeach  --}}
          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label">
              </label>
              <button  class="layui-btn" lay-filter="add" lay-submit="">
                提交
              </button>
          </div>
      </form>
    </div>
    <script>
        

        $('#selec').change(function(){
          var val =  $("#selec").val()
          $.ajax({
                  type : "get", //提交方式
             //路径
                  data : {"id":val},//数据，这里使用的是Json格式进行传输
                  dataType : "Json",
                  success : function(result) {//返回数据根据结果进行相应的处理
                        location.reload();
                    
                  }
              });
              
        })
        // $("#selec option").change(function () { 
        //   $.get("/admin/config/CaroEdit", 

        //     function (data, textStatus, jqXHR) {
              
        //     },
        //     "json"
        //   );
        //   location.reload();
        //   alert(data)
        // });
     
    
    </script>
    <script>
        layui.use(['form','layer'], function(){
            $ = layui.jquery;
          var form = layui.form
          ,layer = layui.layer;
        
          //自定义验证规则
          form.verify({

          });

          //监听提交
          form.on('submit(add)', function(data){

          });
          
          
        });
    </script>
    <script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
      })();</script>
  </body>

</html>