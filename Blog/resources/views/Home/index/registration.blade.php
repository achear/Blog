@extends('home.layouts.index')

@section('registered')
       <!-- CONTENT BEGIN -->
       <div id="content" class="">
        	<div class="inner">
            	<div class="general_content">
                	<div class="main_content">
                    	<div class="block_breadcrumbs">
                        	<div class="text"><p>You are here:</p></div>
                            
                            <ul>
                            	<li><a href="index.html">Home</a></li>
                                <li>Registration</li>
                            </ul>
                        </div>
                        <div class="separator" style="height:28px;"></div>
                        
                        <p class="general_title"><span>Join The Conversation</span></p>
                        <div class="separator" style="height:39px;"></div>
                        
                        <div class="block_registration">
                        	<form action="#" class="w_validation" />
                            	<div class="col_1">
                                	<div class="label"><p>Login<span>*</span>:</p></div>
                                    <div class="field"><input type="text" class="req" /></div>
                                    <div class="clearboth"></div>
                                    <div class="separator" style="height:14px;"></div>
                                    
                                    <div class="label"><p>E-mail<span>*</span>:</p></div>
                                    <div class="field"><input type="text" class="req" /></div>
                                    <div class="clearboth"></div>
                                    <div class="separator" style="height:12px;"></div>
                                    
                                    <div class="label"><p>Password<span>*</span>:</p></div>
                                    <div class="field"><input type="password" class="req" /></div>
                                    <div class="clearboth"></div>
                                    <div class="separator" style="height:12px;"></div>
                                    
                                    <div class="label"><p>Confirm Password<span>*</span>:</p></div>
                                    <div class="field"><input type="password" class="req" /></div>
                                    <div class="clearboth"></div>
                                </div>
                                
                                <div class="col_2">
                                	<div class="label"><p>Name:</p></div>
                                    <div class="field"><input type="text" /></div>
                                    <div class="clearboth"></div>
                                    <div class="separator" style="height:14px;"></div>
                                    
                                    <div class="label"><p>Surname:</p></div>
                                    <div class="field"><input type="text" /></div>
                                    <div class="clearboth"></div>
                                    <div class="separator" style="height:12px;"></div>
                                    
                                    <div class="label"><p>Gender:</p></div>
                                    <div class="checkbox"><input class="sliding_checkbox" type="checkbox" /></div>
                                    <script type="text/javascript">
										$(document).ready(function (){
											$('.sliding_checkbox').iButton({
												labelOn : 'Female',
												labelOff : 'Male',
												resizeHandle : false,
												resizeContainer : false
											});
										});
									</script>
                                    <div class="clearboth"></div>
                                    <div class="separator" style="height:12px;"></div>
                                    
                                    <div class="label"><p>Profession:</p></div>
                                    <div class="select">
                                    	<select class="custom_select">
                                        	<option />&nbsp;
                                            <option />Designer
                                            <option />Frontend developer
                                            <option />Manager
                                        </select>
                                    </div>
                                    <div class="clearboth"></div>
                                </div>
                                
                                <div class="clearboth"></div>
                                <div class="separator" style="height:32px;"></div>
                                
                                <p class="info_text">By clicking on the button "Register" you agree to be the terms of service (<a href="#">User Agreement</a>)</p>
                                <p class="info_text"><input type="submit" class="general_button" value="Register On Site" /></p>
                                <p class="info_text">You can register for an account through other social networks</p>
                                <div class="fb_button"><a href="#"><img src="images/button_fb_login.png" alt="" /></a></div>
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
