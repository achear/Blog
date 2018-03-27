<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.0</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
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

      
          <table class="layui-table">
            <colgroup>
              <col width="150">
              <col width="200">
              <col>
            </colgroup>

            <thead>
              <tr>
                <th>标题</th>
                <th>名称</th>
                <th>内容</th>
                <!-- <th>类型</th>
                <th>排序</th>
                <th>说明</th>
                <th>是否开启</th>
                <th>操作</th> -->


              </tr> 
            </thead>

            <tbody>
              @foreach($config as $v)
              <tr>
                <td>{{ $v->conf_title }}</td>
                <td>{{ $v->conf_name }}</td>
                <td>{{ $v->conf_content }}</td>
                <!-- <td>{{ $v->field_type }}</td>
                <td>{{ $v->conf_order }}</td>
                <td>{{ $v->conf_tips }}</td>
                <td>{{ $v->field_value }}</td> -->
                <td><a href="/admin/config/{{ $v->conf_id }}/edit">修改</a>  <a href="/admin/config/{{ $v->conf_id }}">删除</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>

    


    <script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
      })();</script>
  </body>

</html>