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
    <div>
        {{--判断是否添加错误的提示信息--}}
        @if(!empty(session('msg')))
        <h2 style="color:red;">{{ session('msg') }}</h2>
        @endif
    </div>
    <div class="x-body">
        <form class="layui-form" action="/admin/config/{   {{$id}}   } " method="post">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
            <div class="layui-form-item">
                <label for="L_username" class="layui-form-label">
                    <span class="x-red">*</span>标题
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="L_username" name="conf_title" required="" lay-verify="nikename"
                    autocomplete="off" class="layui-input" value=" {{ $data->conf_title }} ">
                </div>
                <div><p>例如：网页标题</p></div>
          </div>
          <div class="layui-form-item">
              <label for="L_configName" class="layui-form-label">
                  <span class="x-red">*</span>名称
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="L_configName" name="conf_name" required="" lay-verify=""
                  autocomplete="off" class="layui-input" value=" {{ $data->conf_name }} ">
              </div>
              <div><p>例如：web_title</p></div>
            </div>
            <div class="layui-form-item">
                <label for="L_configContent" class="layui-form-label">
                    <span class="x-red">*</span>内容
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="L_configContent" name="conf_content" required="" 
                    autocomplete="off" class="layui-input" value=" {{ $data->conf_content }} ">
                </div>
                <div><p>例如：简书</p></div>
            </div>
            <div class="layui-form-item" pane="">
              <label class="layui-form-label">
                <span class="x-red">*</span>类型
              </label>
              <div class="layui-input-block">
                  <input type="radio" name="field_type" value="input" title="input" @if($data->field_type == "input"){echo ' checked="" '} @endif >
                  <input type="radio" name="field_type" value="textarea" title="textarea" @if($data->field_type == "textarea"){echo ' checked="" '} @endif>
                  <input type="radio" name="field_type" value="redio" title="redio" @if($data->field_type == "redio"){echo ' checked="" '} @endif>
                </div>
            </div>
            <div class="layui-form-item" pane="">
              <label class="layui-form-label">
                <span class="x-red">*</span>是否开启
              </label>
              <div class="layui-input-block">
                  <input type="radio" name="field_value" value="0" title="关闭" @if($data->field_value == "0"){echo ' checked="" '} @endif  >
                  <input type="radio" name="field_value" value="1" title="开启"  @if($data->field_value == "1"){echo ' checked="" '} @endif > 
                </div>
            </div>
            <div class="layui-form-item">
                <label for="L_configContent" class="layui-form-label">
                    <span class="x-red">*</span>排序
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="L_configContent" name="conf_order" required="" 
                    autocomplete="off" class="layui-input" value=" {{ $data->conf_order }} " >
                </div>
                <div><p>例如：1</p></div>
            </div>
            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">
                    <span class="x-red">*</span>说明
                </label>
                <div class="layui-input-block">
                <textarea class="layui-textarea" name="conf_tips"  > <?php if( !empty($data->conf_tips)  ){echo   $data->conf_tips ;} ?> </textarea>
                </div>
            </div>
        </div>
        
        <div class="layui-form-item">
            <label for="L_repass" class="layui-form-label">
              </label>
              <button  class="layui-btn" lay-filter="add" lay-submit="">
                  修改
              </button>
          </div>
      </form>
    </div>




    <script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
      })();</script>
  </body>

</html>