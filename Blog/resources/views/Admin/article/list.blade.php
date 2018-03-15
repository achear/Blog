<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.0</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('admin/css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/xadmin.css') }}">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('admin/lib/layui/layui.js') }}" charset="utf-8"></script>
    <script type="text/javascript" src="{{ asset('admin/js/xadmin.js') }}"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>

    <div class="x-body">
      <div class="layui-row">

      </div>
      <!-- <xblock> -->
        <!-- <button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon"></i>批量删除</button> -->
        <!-- <button class="layui-btn" onclick="x_admin_show('添加用户','{{ url('admin/cate/create') }}',600,400)"><i class="layui-icon"></i>添加</button> -->
        <!-- {{--<span class="x-right" style="line-height:40px">共有数据：88 条</span>--}} -->
      <!-- </xblock> -->
      <table class="layui-table">
        <thead>
          <tr align="center">
            <!-- <th>
              排序
            </th> -->
            <th style="width:80px;text-align:center;">ID</th>
            <th style="width:100px;text-align:center;">标 题</th>
            <th style="width:100px;text-align:center;">关键字</th>
            <th style="width:100px;text-align:center;">描 述</th>
            <th style="width:100px;text-align:center;">文 件</th>
            <th style="width:400px;text-align:center;">内 容</th>
            <!-- <th>Time</th> -->
            <th style="width:80px;text-align:center;">作 者</th>
            <th style="text-align:center;">操作</th>
          </tr>
        </thead>
        <tbody>
        @foreach($articles as $v)
          <tr>
            <!-- <td> -->
              <!-- <div class="layui-input-inline">
                <input onchange="changeOrder(this,{{ $v->cate_id }})" style="width: 40px;" type="text" id="L_cate_name" name="cate_order" value="{{ $v->cate_order }}" class="layui-input">
              </div> -->
            <!-- </td> -->
            <td style="text-align:center;">{{ $v->art_id }}</td>
            <td style="text-align:center;"><div  style="width:100px;overflow:hidden;text-overflow: ellipsis;white-space: nowrap;">{{ $v->art_title }}</div></td>
            <td style="text-align:center;"><div style="width:100px;overflow:hidden;text-overflow: ellipsis;white-space: nowrap;">{{ $v->art_tag }}</div></td>
            <td style="text-align:center;"><div style="width:100px;overflow:hidden;text-overflow: ellipsis;white-space: nowrap;">{{ $v->art_description }}</div></td>
            <td><center><img src="{{ $v->art_thumb }}" width="50px"></center></td>
            <td style="text-align:center;"><div  style="width:400px;overflow:hidden;text-overflow: ellipsis;white-space: nowrap;">{{ $v->art_content }}</div></td>
            <!-- <td>{{ $v->art_time }}</td> -->
            <td style="text-align:center;"><div  style="width:80px;overflow:hidden;text-overflow: ellipsis;white-space: nowrap;">{{ $v->art_editor }}</div></td>

            <td class="td-manage" style="text-align:center;">

              <a title="编辑"  onclick="x_admin_show('编辑','{{url('admin/article/'.$v->art_id.'/edit')}}',600,400)" href="javascript:;">
                <i class="layui-icon">&#xe642;</i>
              </a>

              <a title="删除" onclick="delArt({{ $v->art_id }})" href="javascript:;">
                <i class="layui-icon">&#xe640;</i>
              </a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>


    </div>
    <script>
      layui.use(['form','laydate','layer'], function(){
        var laydate = layui.laydate;
        var form = layui.form;
        var layer = layui.layer;
        
        //执行一个laydate实例
        laydate.render({
          elem: '#start' //指定元素
        });

        //执行一个laydate实例
        laydate.render({
          elem: '#end' //指定元素
        });

          //监听提交
          form.on('submit(sreach)', function(data){
              // console.log(11111);
              // return false;
          });


      });

 

      // // 删除文章
      // function delArt(art_id){
      //   layer.confirm('确定要删除这篇文章吗？',{
      //   btn:['确定','取消']
      //   });
      // }
        // },function(){
          // $post("{{ url('admin/article') }}/"+art_id,{'_method':'delect','_token':"{{ csrf_token() }}"},function(data){
          //   if(data.status == 0){
          //     location.href = location.href;
          //     layer.msg(data.msg,{icon:6});
          //   }else{
          //     layer.msg(data.msg,{icon:5});              
          //   }
          // });
        // },function(){

      //   });
      // };
  /*用户-删除*/
  function delArt($id){
    // alert(1);
          layer.confirm('确认要删除吗？',function(article){
              //发异步删除数据
              // $.post('URL地址'.'携带的参数',成功后的闭包函数)
              $.post('{{ url('admin/article/') }}/'+$id,{"_token":"{{csrf_token()}}","_method":"delete","id":$id},function(data){
                  if(data.status == 0){
                      $($id).parents("tr").remove();
                      layer.msg('已删除!',{icon:5,time:5000});
                      location.reload(true);
                  }else{
                      layer.msg('删除失败!',{icon:6,time:3000});
                      location.reload(true);
                  }
              });

          });
      }


   
      // }
    </script>
    <script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
      })();</script>
  </body>

</html>