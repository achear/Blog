{{--  头部开始  --}}
@include('Home.public.header')
{{--  头部结束  --}}

{{--  内容开始  --}}
@section('content')

@show
{{--  @include('home.public.content')  --}}
 {{--  内容结束  --}}

 {{--  注册开始  --}}
@section('registered')

@show
{{--  注册结束  --}}
{{--  个人中心  --}}
@section('personal')

@show
{{--  个人文章页  --}}
@section('youart')

@show
{{--  发表文章  --}}
@section('publish')

@show

{{--  文章列表  --}}
@section('business')

@show
{{--  列表结束  --}}


{{--  文章详情  --}}
@section('article')

@show
{{--  详情结束  --}}
@include('Home.public.list')



{{-- 开始底部  --}}
@include('Home.public.footer')
{{--  底部结束  --}}


