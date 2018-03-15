<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="UTF-8">
    <title>添加分类</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/Admin/css/font.css">
    <link rel="stylesheet" href="/Admin/css/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="/Admin/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/Admin/js/xadmin.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
      <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body> 
    <div>
        {{--判断是否添加的错误信息--}}
        @if(! empty(session('msg')));
        <p>{{ session('msg') }}</p>
        @endif
    </div>
    <div class="x-body">
        <form id="advert_form" class="layui-form" action="{{ url('admin/advert/$id') }}" method="post" enctype="multipart/form-data">  
        <!-- <input type="hidden" name="_token" value="{csrf_token()}"/> -->
        {{ csrf_field() }}
        <input type="hidden" name="method" value="put">
          <div class="layui-form-item">
              <label for="L_advert_name" class="layui-form-label">
                  <span class="x-red">*</span>广告名称
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="L_advert_name" name="advert_name" required="" 
                  autocomplete="off" class="layui-input" value="{{ $field->advert_name }}"> 
              </div>
          </div>
          <div class="layui-form-item">
                <label for="L_advert_editor" class="layui-form-label">
                    <span class="x-red">*</span>缩略图
                </label>
                <div class="layui-input-inline">
                    <input type="file" id="file_upload" name="file_upload" value="">
                </div>
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
                        var formData = new FormData($('#advert_form')[0]);
                        //只将上传文件打包进formData
                        // var formData = new FormData();
                        // formData.append('fileupload',$('#file_upload')[0].file[0]);

                        $.ajax({
                            type: "POST",
                            url: "/admin/advert/uploads",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            data: formData,
                            contentType: false,
                            processData: false,
                            async:true,
                            cache:false,
                            success: function(data) {

                                $('#thumb').attr('src',data);
                                //显示上传到OSS上的图片
                                // $('#thumb').attr('src','oss的域名'+data);
                                // $('#thumb').attr('src','{{ env('ALIOSS_DOMAIN') }}'+data);
                                $('#advert_thumb').val(data);
                            },
                            error: function(XMLHttpRequest, textStatus, errorThrown) {
                                alert("上传失败，请检查网络后重试");
                            }
                        });
                    }
                </script>

            </div>
            <div class="layui-form-item">
                      <label class="layui-form-label">预览</label>
                      <div class="layui-input-block">
                          <img src="/admin/advert/" alt="" width="200px">
                      </div>
                  </div>
          <div class="layui-form-item">
              <label for="L_advert_url" class="layui-form-label">
                  <span class="x-red">*</span>广告URL
              </label>
              <div class="layui-input-block">
                  <input type="text" id="L_advert_url" name="advert_url" required="" 
                  autocomplete="off" class="layui-input" value="  {{ $field->advert_url }}"> 
              </div>
          </div>
          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label">
              </label>
              <button  class="layui-btn" lay-filter="add" lay-submit="">
                  增加
              </button>
          </div>
      </form>
    </div>
    <script>
        layui.advert(['form','layer'], function(){
            $ = layui.jquery;
          var form = layui.form
          ,layer = layui.layer;
        
          //自定义验证规则
          form.verify({
           
          });

          //监听提交
          form.on('submit(add)', function(data){

              $.ajax({
                  type : "POST", //提交方式
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  url : '/admin/advert',//路径
                  data : data.field,//数据，这里使用的是Json格式进行传输
                  dataType : "Json",
                  success : function(result) {//返回数据根据结果进行相应的处理
                     console.log(result);
                     // 如果ajax的返回数据对象的status属性值是0，表示用户添加成功；弹添加成功的提示信息
                     if(result.status == 0){
                         layer.alert(result.msg, {icon: 6},function () {
                             // // 获得frame索引
                             // var index = parent.layer.getFrameIndex(window.name);
                             // //关闭当前frame
                             // parent.layer.close(index);

                             //刷新父页面
                             parent.location.reload();
                         });
                     }else{
                         layer.alert(result.msg, {icon: 6},function () {
                             // 获得frame索引
                             // var index = parent.layer.getFrameIndex(window.name);
                             // //关闭当前frame
                             // parent.layer.close(index);

                             parent.location.reload();
                         });
                     }
                  }
              });



              console.log(data);
            //发异步，把数据提交给php

            return false;
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