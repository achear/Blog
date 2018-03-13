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
    <div class="x-nav">
      <span class="layui-breadcrumb">
        <a href="">首页</a>
        <a href="">演示</a>
        <a>
          <cite>导航元素</cite></a>
      </span>
      <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:30px">ဂ</i></a>
    </div>
    
      <xblock>
        <span class="x-right" style="line-height:40px">共有数据：88 条</span>
      </xblock>
      
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
                <th>类型</th>
                <th>排序</th>
                <th>说明</th>
                <th>操作</th>

              </tr> 
            </thead>

            <tbody>
              @foreach($config as $v)
              <tr>
                <td>{{ $v->config_title }}</td>
                <td>{{ $v->config_name }}</td>
                <td>{{ $v->config_content }}</td>
                <td>{{ $v->config_type }}</td>
                <td>{{ $v->config_order }}</td>
                <td>{{ $v->config_tips }}</td>
                <td><a href="/admin/config/{{ $v->config_id }}/edit">修改</a>  <a href="/admin/config/{{ $v->config_id }}">删除</a></td>
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