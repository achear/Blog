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

{{-- 开始底部  --}}
@include('home.public.footer')
{{--  底部结束  --}}

{{--  登录    --}}
@section('popup')

@show
{{--  登录结束  --}}