{{--  头部开始  --}}
@include('home.public.header')
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
@include('home.public.list')



{{-- 开始底部  --}}
@include('home.public.footer')
{{--  底部结束  --}}


