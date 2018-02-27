<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>@yield('title')</title>
	{{--样式文件--}}
	@include('Admin.public.style')
	{{--js文件--}}
	@include('Admin.pulbic.script')
</head>
<body>
	{{--头部开始--}}	
	@include('Admin.public.header')
	{{--头部结束--}}
	{{--左侧开始--}}	
	@include('Admin.public.side')
	{{--左侧结束--}}
    <!--右侧开始-->
    @section('content')
    <!--右侧结束-->
	<!--主体部分 开始-->
	<div class="main_box">
		<iframe src="info.html" frameborder="0" width="100%" height="100%" name="main"></iframe> 
	</div>
	<!--主体部分 结束-->

	<!--底部 开始-->
    @include('Admin.public.footer')
	<!--底部 结束-->
</body>
</html>