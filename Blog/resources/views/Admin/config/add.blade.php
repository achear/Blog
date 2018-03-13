<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.0</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" /> -->
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
    <!-- <div>
        {{--判断是否添加错误的提示信息--}}
        @if(!empty(session('msg')))
        <p>{{ session('msg') }}</p>
        @endif
    </div> -->
    <div class="x-body">
        <form class="layui-form" action="/admin/config" method="post">
        {{csrf_field()}}
            <div class="layui-form-item">
                <label for="L_username" class="layui-form-label">
                    <span class="x-red">*</span>标题
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="L_username" name="config_title" required="" lay-verify="nikename"
                    autocomplete="off" class="layui-input" value="">
                </div>
                <div><p>例如：网页标题</p></div>
          </div>
          <div class="layui-form-item">
              <label for="L_configName" class="layui-form-label">
                  <span class="x-red">*</span>名称
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="L_configName" name="config_name" required="" lay-verify=""
                  autocomplete="off" class="layui-input">
              </div>
              <div><p>例如：web_title</p></div>
            </div>
            <div class="layui-form-item">
                <label for="L_configContent" class="layui-form-label">
                    <span class="x-red">*</span>内容
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="L_configContent" name="config_content" required="" 
                    autocomplete="off" class="layui-input">
                </div>
                <div><p>例如：简书</p></div>
            </div>
            <div class="layui-form-item" pane="">
              <label class="layui-form-label">
                <span class="x-red">*</span>类型
              </label>
              <div class="layui-input-block">
                  <input type="radio" name="config_type" value="1" title="input" checked="">
                  <input type="radio" name="config_type" value="1" title="textarea">
                  <input type="radio" name="config_type" value="0" title="redio">
                </div>
            </div>
            <div class="layui-form-item">
                <label for="L_configContent" class="layui-form-label">
                    <span class="x-red">*</span>排序
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="L_configContent" name="config_order" required="" 
                    autocomplete="off" class="layui-input">
                </div>
                <div><p>例如：1</p></div>
            </div>
            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">
                    <span class="x-red">*</span>说明
                </label>
                <div class="layui-input-block">
                <textarea placeholder="请输入内容" class="layui-textarea" name="config_tips"></textarea>
                </div>
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

        //引入layer和jquery
        layui.use(['form','layer'], function(){
            $ = layui.jquery;
          var form = layui.form
          ,layer = layui.layer;
        });   
            //判断，排序为2位数字
        //     form.on('submit(add)',function(){

        //         var config_order = $("input[name='config_order']").val();
        //         var m_isNum = /^[0-9]{0,2}$/;
        //         if($.isEmptyObject(config_order) || !m_isNum.test(config_order)){
        //             layer.open({
        //                 title: '错误'
        //                 ,content: '排序不能为空且只能是数字'+m_isNum.test(config_order) + $.isEmptyObject(config_order)
        //             });       
        //         }else{
        //             //条件允许，ajax传值
        //             $.ajax({
        //                 url: "/admin/config",
        //                 type:'post',
        //                 date:{
        //                     config_content : $("input[name='config_content']").val(),
        //                     config_name : $("input[name='config_name']").val(),
        //                     config_title : $("input[name='config_title']").val(),
        //                     config_tips : $("input[name='config_tips']").val(),
        //                     config_order : config_order,
        //                     config_type : $("input[name='config_type']").val(),
        //                 },
        //                 headers: {
        //                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //                 },
        //                 success: function(){
        //                     layer.msg('添加成功');
        //                 },
        //                 error: function(){
        //                     console.log(config_order);
        //                     layer.msg('添加失败');
        //                 },
        //                 dataType:'JSON',
        //                 async:false
        //             });

        //         }
        //          return false;
        //     });


        // });
    </script>



    <script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
      })();</script>
  </body>

</html>