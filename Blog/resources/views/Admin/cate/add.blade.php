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
        <form class="layui-form" action="{{ url('admin/cate') }}" method="post">  
          <div class="layui-form-item">
              <label for="L_cate_name" class="layui-form-label">
                  <span class="x-red">*</span>父级分类
              </label> 
              <div class="layui-inline">
                 {{ csrf_field() }}
                  <select name="cate_pid">
                  <option value="0">请选择一级分类</option>
                    @foreach($cateone as $v) 
                    <option value="{{ $v->cate_id }}">{{ $v->cate_name }}</option> 
                    @endforeach
                  </select>
              </div>
          </div>
          <div class="layui-form-item">
              <label for="L_cate_name" class="layui-form-label">
                  <span class="x-red">*</span>分类名称
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="L_cate_name" name="cate_name" required="" 
                  autocomplete="off" class="layui-input"> 
              </div>
          </div>
          <div class="layui-form-item">
              <label for="L_cate_title" class="layui-form-label">
                  <span class="x-red">*</span>分类标题
              </label>
              <div class="layui-input-block">
                  <input type="text" id="L_cate_title" name="cate_title" required="" 
                  autocomplete="off" class="layui-input"> 
              </div>
          </div>
          <div class="layui-form-item">
              <label for="L_cate_title" class="layui-form-label">
                  <span class="x-red">*</span>关键词 
              </label>
              <div class="layui-input-block">
              <textarea name="cate_keywords" placeholder="请输入内容" class="layui-textarea"></textarea>
              </div>
          </div>
          <div class="layui-form-item">
              <label for="L_cate_title" class="layui-form-label">
                  <span class="x-red">*</span>描述
              </label>
              <div class="layui-input-block">
              <textarea name="cate_description" placeholder="请输入内容" class="layui-textarea"></textarea>
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
       layui.cate(['form','layer'], function(){
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
                  url : '/admin/cate',//路径
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