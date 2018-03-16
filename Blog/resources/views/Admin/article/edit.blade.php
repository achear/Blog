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
    <div class="x-body">
        <form class="layui-form">
        {{csrf_field()}}
    {{ method_field('PUT')}}
            <div class="layui-form-item">
                <label for="L_art_editor" class="layui-form-label">
                    <span class="x-red">*</span>文章作者
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="L_art_editor" name="art_editor" required="" autocomplete="off" class="layui-input" value="{{ $article->art_editor }}" style="cursor: not-allowed" disabled >
                </div>
            </div>
             <div class="layui-form-item">
                <label for="L_art_title" class="layui-form-label">
                    <span class="x-red">*</span>文章标题
                </label>
                <div class="layui-input-block">
                    <input type="text" id="L_art_title" name="art_title" required="" autocomplete="off" class="layui-input" value="{{ $article->art_title }}">

                </div>
            </div>
           
            
            <div class="layui-form-item">
                <label for="L_art_tag" class="layui-form-label">
                    <span class="x-red">*</span>关键字
                </label>
                <div class="layui-input-block">
                    <input type="text" id="L_art_tag" name="art_tag" required="" autocomplete="off" class="layui-input" value="{{ $article->art_tag }}">
                </div>
            </div>
            <div class="layui-form-item">
                <label for="L_pass" class="layui-form-label">
                    <span class="x-red">*</span>描述
                </label>
                <div class="layui-input-block">
                    <textarea name="art_description" placeholder="请输入内容" class="layui-textarea">{{ $article->art_description }}</textarea>
                </div>

            </div>

            <div class="layui-form-item">
                <label for="L_art_editor" class="layui-form-label">
                    <span class="x-red">*</span>缩略图
                </label>
                <div class="layui-input-inline">
                    <input type="file" id="file_upload" name="file_upload" value="">
                </div>
     

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
        var formData = new FormData();
//        alert(formData);
        formData.append('file_upload', $('#file_upload')[0].files[0]);
        $.ajax({
            type: "POST",
            url: "/admin/article/uploads",
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
                $('#art_thumb').val(data);
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert("上传失败，请检查网络后重试");
            }
        });
    }
</script>
            <div class="layui-form-item">
                <label for="L_art_tag" class="layui-form-label">
                    <span class="x-red">*</span>
                </label>
                <div class="layui-input-block">
                    <input type="hidden" name="art_thumb" id="art_thumb" value="">
                    <!-- 上传成功后显示上传图片 -->
                    <img src="{{ $article->art_thumb }}" id="thumb" alt="" style="width:100px;">
                </div>
            </div>

            <div class="layui-form-item">
                <label for="L_pass" class="layui-form-label">
                    <span class="x-red">*</span>内容
                </label>
                
                <div class="layui-input-block">
                    <input type="hidden" value="{{$article->art_id}}" id="art_id">
                     <textarea name="art_content" required lay-verify="required" id="L_artcle_name" class="layui-textarea" value="">{{ $article->art_content }}</textarea>
                </div>

            </div>
            
          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label">
              </label>
              <button  class="layui-btn" lay-filter="edit" lay-submit="">
                  修改
              </button>
          </div>
      </form>
    </div>
    <script>
        layui.use(['form', 'layer'], function () {
            $ = layui.jquery;
            var form = layui.form
                , layer = layui.layer;

            //监听提交
            form.on('submit(edit)', function(data){
                //获取 要修改的用户的ID
                var artid = $('#art_id').val();
                    $.ajax({
                        type : "PUT", //提交方式
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url : '/admin/article/'+artid,//路径
                        data : data.field,//数据，这里使用的是Json格式进行传输
                        dataType : "Json",
                        success : function(result) {//返回数据根据结果进行相应的处理
                            console.log(result);
                            // 如果ajax的返回数据对象的status属性值是0，表示用户添加成功；弹添加成功的提示信息
                            if(result.status == 0){
                                layer.alert(result.msg, {icon: 6},function () {
                                    //刷新父页面
                                    parent.location.reload();
                                });
                            }else{
                                layer.alert(result.msg, {icon: 6},function () {
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