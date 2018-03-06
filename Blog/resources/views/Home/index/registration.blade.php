@extends('home.layouts.index')

@section('registered')
       <!-- CONTENT BEGIN -->
       <div id="content" class="">
        	<div class="inner">
            	<div class="general_content">
                	<div class="main_content">
                    	<div class="block_breadcrumbs">
                        	<div class="text"><p>你在这里:</p></div>
                            
                            <ul>
                            	<li><a href="index.html">首页</a></li>
                                <li>注册</li>
                            </ul>
                        </div>
                        <div class="separator" style="height:28px;"></div>
                        
                        <p class="general_title"><span>加入对话</span></p>
                        <div class="separator" style="height:39px;"></div>
                        
                        <div class="block_registration">
                        	<form action="#" class="w_validation" />
                            	<div class="col_1">
                                	<div class="label"><p>用户名<span>*</span>:</p></div>
                                    <div class="field"><input type="text" class="req" /></div>
                                    <div class="clearboth"></div>
                                    <div class="separator" style="height:14px;"></div>
                                    
                                    <div class="label"><p>邮箱<span>*</span>:</p></div>
                                    <div class="field"><input type="text" class="req" /></div>
                                    <div class="clearboth"></div>
                                    <div class="separator" style="height:12px;"></div>
                                    
                                    <div class="label"><p>密码<span>*</span>:</p></div>
                                    <div class="field"><input type="password" class="req" /></div>
                                    <div class="clearboth"></div>
                                    <div class="separator" style="height:12px;"></div>
                                    
                                    <div class="label"><p>确认密码<span>*</span>:</p></div>
                                    <div class="field"><input type="password" class="req" /></div>
                                    <div class="clearboth"></div>
                                </div>
                                
                                <div class="col_2">
                                	<div class="label"><p>名字:</p></div>
                                    <div class="field"><input type="text" /></div>
                                    <div class="clearboth"></div>
                                    <div class="separator" style="height:14px;"></div>
                                    
                                    <div class="label"><p>姓氏:</p></div>
                                    <div class="field"><input type="text" /></div>
                                    <div class="clearboth"></div>
                                    <div class="separator" style="height:12px;"></div>
                                    
                                    <div class="label"><p>性别:</p></div>
                                    <div class="checkbox"><input class="sliding_checkbox" type="checkbox" /></div>
                                    <script type="text/javascript">
										$(document).ready(function (){
											$('.sliding_checkbox').iButton({
												labelOn : '女',
												labelOff : '男',
												resizeHandle : false,
												resizeContainer : false
											});
										});
									</script>
                                    <div class="clearboth"></div>
                                    <div class="separator" style="height:12px;"></div>
                                    
                                    <div class="label"><p>职业:</p></div>
                                    <div class="select">
                                    	<select class="custom_select">
                                        	<option />&nbsp;
                                            <option />设计师
                                            <option />前端开发人员
                                            <option />经理
                                        </select>
                                    </div>
                                    <div class="clearboth"></div>
                                </div>
                                
                                <div class="clearboth"></div>
                                <div class="separator" style="height:32px;"></div>
                                
                                <p class="info_text">通过点击“注册”按钮即表示您同意此服务条款 (<a href="#">用户协议</a>)</p>
                                <p class="info_text"><input type="submit" class="general_button" value="注册" /></p>
                                <p class="info_text">“*”号为必填！！</p>
                            </form>
                        </div>
                        
                        <div class="line_3" style="margin:42px 0px 0px;"></div>
                        
                    </div>
                    
                	<div class="clearboth"></div>
                </div>
            </div>
        </div>
    	<!-- CONTENT END -->

@endsection
