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
    <div>
        {{--判断是否添加的错误信息--}}
        @if(! empty(session('msg')));
        <p>{{ session('msg') }}</p>
        @endif
    </div>
    <div class="x-body">
        <form id="link_form" class="layui-form" action="{{ url('admin/links') }}" method="post" enctype="multipart/form-data">  
        <!-- <input type="hidden" name="_token" value="{csrf_token()}"/> -->
        {{ csrf_field() }}
          <div class="layui-form-item">
              <label for="L_link_name" class="layui-form-label">
                  <span class="x-red">*</span>友情链接名称
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="L_link_name" name="link_name" required="" 
                  autocomplete="off" class="layui-input" value=" {{ $field->link_name }}"> 
                  <input type="hidden" name="link_id" value="{{ $field->link_id }}">
              </div>
          </div>
          <div class="layui-form-item">
              <label for="L_link_title" class="layui-form-label">
                  <span class="x-red">*</span>友情链接标题
              </label>
              <div class="layui-input-block">
                  <input type="text" id="L_link_title" name="link_title" required="" 
                  autocomplete="off" class="layui-input" value="{{ $field->link_title }}"> 
              </div>
          </div>
          <div class="layui-form-item">
              <label for="L_link_url" class="layui-form-label">
                  <span class="x-red">*</span>友情链接URL
              </label>
              <div class="layui-input-block">
                  <input type="text" id="L_link_url" name="link_url" required="" 
                  autocomplete="off" class="layui-input" value="{{ $field->link_url }}"> 
              </div>
          </div>
          <div class="layui-form-item">
              <label for="L_link_order" class="layui-form-label">
                  <span class="x-red">*</span>排序
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="L_link_order" name="link_order" class="layui-input" value="{{ $field->link_order }}"> 
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
       layui.use(['form','layer'], function(){
            $ = layui.jquery;
          var form = layui.form
          ,layer = layui.layer;
        
          //自定义验证规则
        //    form.verify({
           
        //    });

          //监听提交
          form.on('submit(edit)', function (data) {
                //获取 要修改的用户的ID
                var link_id = $("input[name='link_id']").val();
                $.ajax({
                    type: "PUT", //提交方式
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '/admin/links/' + link_id,//路径
                    data: data.field,//数据，这里使用的是Json格式进行传输
                    dataType: "Json",
                    success: function (result) {//返回数据根据结果进行相应的处理
                        console.log(result);
                        // 如果ajax的返回数据对象的status属性值是0，表示用户添加成功；弹添加成功的提示信息
                        if (result.status == 0) {
                            layer.alert(result.msg, { icon: 6 }, function () {
                                //刷新父页面
                                parent.location.reload();
                            });
                        } else {
                            layer.alert(result.msg, { icon: 6 }, function () {
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
