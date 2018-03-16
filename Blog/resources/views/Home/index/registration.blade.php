@include('home.public.header')

        <!-- CONTENT BEGIN -->
        <div id="content" class="">
            <div class="inner">
                <div class="general_content">
                    <div class="main_content">
                        <div class="block_breadcrumbs">
                            <div class="text">
                                <p>你在这里:</p>
                            </div>

                            <ul>
                                <li>
                                    <a href="index.html">首页</a>
                                </li>
                                <li>注册</li>
                            </ul>
                        </div>
                        <div class="separator" style="height:28px;"></div>

                        <p class="general_title">
                            <span>加入对话</span>
                        </p>
                        @if (count($errors) > 0) @if(is_object($errors)) @foreach ($errors->all() as $error)
                        <div class="general_info_box error" style="width: 315px; margin: auto;">
                            <a href="" class="close">Close</a>
                            <p>
                                <b>错误</b>{{ $error }}</p>
                        </div>
                        @endforeach @else
                        <div class="general_info_box error" style="width: 315px; margin: auto;">
                            <a href="" class="close">Close</a>
                            <p>
                                <b>提醒：</b>{{ $errors }}</p>
                        </div>
                        @endif @endif @if (!empty(session('msg')))
                        <div class="general_info_box warning">
                            <a href="#" class="close">Close</a>
                            <p>
                                <b>提醒:</b>{{ session('msg') }}</p>
                        </div>
                        @endif
                        <div class="separator" style="height:39px;"></div>

                        <div class="block_registration">
                            <form action="{{url('/home/index')}}" method="post" class="w_validation">
                                {{ csrf_field() }}
                                <div class="col_1">
                                    <div class="label">
                                        <p>用户名
                                            <span>*</span>:</p>
                                    </div>
                                    <div class="field">
                                        <input type="text" name="username" id="uname" style="height: 17px;" />
                                    </div>
                                    <div class="clearboth"></div>
                                    <div class="separator" style="height:12px;"></div>

                                    <div class="label">
                                        <p>邮箱
                                            <span>*</span>:</p>
                                    </div>
                                    <div class="field">
                                        <input type="text" name="email" id="email" style="height: 17px;" class="req" />
                                    </div>
                                    <div class="clearboth"></div>
                                    <div class="separator" style="height:12px;"></div>

                                    <div class="label">
                                        <p>密码
                                            <span>*</span>:</p>
                                    </div>
                                    <div class="field">
                                        <input type="password" name="password" id="pass" style="height: 17px;" class="req" />
                                    </div>
                                    <div class="clearboth"></div>
                                    <div class="separator" style="height:12px;"></div>

                                    <div class="label">
                                        <p>确认密码
                                            <span>*</span>:</p>
                                    </div>
                                    <div class="field">
                                        <input type="password" name="repassword" id="repass" style="height: 17px;" class="req" />
                                    </div>
                                    <div class="clearboth"></div>
                                </div>

                                <div class="col_2">
                                    <div class="label">
                                        <p>Tips:</p>
                                    </div>
                                    <div class="field" id="yanzheng" style="height: 17px;"></div>
                                    <div class="clearboth"></div>
                                    <div class="separator" style="height:14px;"></div>

                                    <div class="label">
                                        <p>Tips:</p>
                                    </div>
                                    <div class="field" id="error_email" style="height: 17px;">
                                        <input type="text" />
                                    </div>
                                    <div class="clearboth"></div>
                                    <div class="separator" style="height:12px;"></div>

                                    <div class="label">
                                        <p>Tips:</p>
                                    </div>
                                    <div class="field" id="error_pass" style="height: 17px;">
                                        <input type="text" />
                                    </div>
                                    <script type="text/javascript">
                                        $('#uname').blur(function () {
                                            var username = $('#uname').val();
                                            $.ajax({
                                                type: "POST",
                                                headers: {
                                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                                        'content')
                                                },
                                                url: '/home/user/index',
                                                data: { 'username': username },
                                                dataType: "JSON",
                                                success: function (data) {
                                                    if (data.status == 0) {
                                                        $('#yanzheng').html('<span style="height: 17px; display: block; line-height: 17px; color: red;">用户名已存在</span>');
                                                        //console.log(result);
                                                        //console.log(data.status);
                                                    } else {
                                                        $('#yanzheng').html('<span style="color: green; height: 17px; display: block; line-height: 17px;">该用户名可以使用</span>');
                                                        //console.log(result);
                                                        //console.log(data.status);
                                                    }
                                                }
                                            });
                                        });
                                        // $(document).ready(function () {
                                        //     $('.sliding_checkbox').iButton({
                                        //         labelOn: '女',
                                        //         labelOff: '男',
                                        //         resizeHandle: false,
                                        //         resizeContainer: false
                                        //     });
                                        // });
                                        $('#email').blur(function () {
                                            //alert(1);
                                            var email_val = $('#email').val();
                                            var email_preg = /^[A-Za-z0-9\u4e00-\u9fa5]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/;

                                            if (email_preg.test(email_val)) {
                                                $('#error_email').html('<font style="color: green; height: 17px; display: block; line-height: 17px;">该邮箱可用</font>');
                                            } else {
                                                $('#error_email').html('<font style="height: 17px; display: block; line-height: 17px; color: red;">邮箱格式不正确</font>')
                                            }
                                        });

                                        $('#pass').blur(function () {
                                            var pass_val = $('#pass').val();
                                            if (pass_val.length < 6) {
                                                $('#error_pass').html('<font style="height: 17px; display: block; line-height: 17px; color: red;">密码过短！</span>');
                                                //return;
                                            } else if (pass_val.length > 16) {
                                                $('#error_pass').html('<font style="height: 17px; display: block; line-height: 17px; color: red;">密码过长！</span>');
                                                //return;
                                            } else {
                                                $('#error_pass').html('<font style="height: 17px; display: block; line-height: 17px; color: green;">密码可用</span>');
                                            }
                                        });

                                        $('#repass').keyup(function () {
                                            var repass_val = $('#repass').val();
                                            var pass_val = $('#pass').val();

                                            if (repass_val != pass_val) {
                                                $('#error_repass').html('<font style="height: 17px; display: block; line-height: 17px; color: red;">两次输入密码不一致！</span>');
                                            } else {
                                                $('#error_repass').html('<font style="height: 17px; display: block; line-height: 17px; color: green;">密码一致</span>');
                                            }
                                        });
                                    </script>
                                    <div class="clearboth"></div>
                                    <div class="separator" style="height:12px;"></div>

                                    <div class="label">
                                        <p>Tips:</p>
                                    </div>
                                    <div class="field" id="error_repass" style="height: 17px;">
                                        <input type="text" />
                                    </div>
                                    <div class="clearboth"></div>

                                </div>

                                <div class="clearboth"></div>
                                <div class="separator" style="height:32px;"></div>

                                <p class="info_text">通过点击“注册”按钮即表示您同意此服务条款 (
                                    <a href="#">用户协议</a>)</p>
                                <p class="info_text">
                                    <input type="submit" class="general_button" value="注册" />
                                </p>
                                <p class="info_text">“*”号为必填！！</p>
                            </form>
                        </div>

                        <div class="line_3" style="margin:42px 0px 0px;"></div>

                    </div>

                    <div class="clearboth"></div>
                </div>
            </div>
        </div>
      

{{-- 开始底部  --}}
@include('home.public.footer')
{{--  底部结束  --}}
