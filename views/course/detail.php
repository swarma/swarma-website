<?php
/**
 * Created by PhpStorm.
 * User: yanhe
 * Date: 2016/11/10
 * Time: 19:33
 */
use yii\helpers\Html;

?>



<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!--meta.jsp-->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!--不使用IE兼容模式（杂项）-->
		<meta name="renderer" content="webkit">
		<!--默认使用极速模式，目前只有360支持，不过已经够了-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--平板或视网膜屏100%缩放显示网页-->
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Christina">
		<title>集智</title>
	<!--	<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/common.css" />
		<script src="js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
		<!--<script src="static/theme/default/js/jquery-1.11.3.min.js"></script>-->
	<!--	<script src="js/ie10-viewport-bug-workaround.js"></script>
		<script type="text/javascript" src="js/jquery.validate.min.js"></script>
		<script src="js/common.js"></script>
		<!--用于处理win8的兼容问题-->
		<!--[if lt IE 9]>
<!--<script src="static/theme/default/js/html5shiv.min.js" tppabs="http://www.hundun.cn/static/theme/default/js/html5shiv.min.js"></script>
<script src="static/theme/default/js/respond.min.js" tppabs="http://www.hundun.cn/static/theme/default/js/respond.min.js"></script>
<![endif]-->
    <?=Html::cssFile('@web/css/style.css')?>
    <?=Html::cssFile('@web/css/common.css')?>
    <?=Html::jsFile('@web/js/jquery-1.11.3.min.js')?>
    <?=Html::jsFile('@web/js/ie10-viewport-bug-workaround.js')?>
    <?=Html::jsFile('@web/js/jquery.validate.min.js')?>
    <?=Html::jsFile('@web/js/html5shiv.min.js')?>
    <?=Html::jsFile('@web/js/respond.min.js')?>
	<?=Html::jsFile('@web/js/common.js')?>
    <noscript>您的浏览器不支持JavaScript，请启动JavaScript或更换浏览器</noscript>
		<!--end of meta.jsp-->
	</head>

	<body class="index_body" style="background-color: rgb(255, 255, 255);">
		<!--顶栏-->
		<!--top.jsp-->
		<header>
			<div class="nav_wrap">
				<div class="container clearfix">
					<a href="home" class="logo left"><img src="img/logo.png"></a>
					<nav class="left" style="position: relative;">
						<div class="wrap-move">
							<div class="move f1-move" style="display: none; left: 0px;"></div>
						</div>
						<ul class="nav-btn right">
							<li class="">
								<a href="home">首页

								</a>
							</li>
							<li class="flys1">
								<a href="course/detail">课程体系
									<div class="active"></div>
								</a>

							</li>
							<li class="">
								<a href="article">AI前沿</a>
							</li>
							<!-- <li class="flys1"><a href="/video/list">在线课程</a></li>-->
							<li class="">
								<a href="about">关于我们</a>
							</li>

						</ul>
					</nav>
					<div class="header_login right" id="popup">
						<a href="javascript:void(0);" class="login">登录</a>
						<!--<span>／</span>-->
						<a href="javascript:void(0);" class="register">注册</a>
					</div>
				</div>
			</div>
		</header>

		<!--登录-->
		<div class="popup">
			<div class="alert_box">
				<p class="alert_box_text">验证码已发送</p>
			</div>
			<div class="layerbg"></div>
			<div class="popup_content clearfix" style="displ	ay: none;">
				<div class="popclose right">
					<img src="img/close.png">
				</div>
				<div class="login_wrap left">
					<div class="login-title clearfix">
						<div class="active" id="lo-id-1">登录学园</div>
						<div id="lo-id-2">加入学园</div>
					</div>
					<div>
						<div class="lo-content-1" style="display: block;">
							<form action="" method="post" name="loginForm" id="loginForm">
								<span class="form-left">用户名：</span><input type="text" name="username" value="" class="lo_phone" onfocus="if(this.value==defaultValue){this.value =&#39;&#39;; this.style.color = &#39;#111&#39;}" onblur="if(!value){value=defaultValue;this.style.color = &#39;#a0a0a0&#39;}">
								<span class="form-left">密码：</span><input type="password" name="password" value="" class="lo_phone" id="password" onfocus="if(this.value==defaultValue){this.value =&#39;&#39;; this.style.color = &#39;#111&#39;}" onblur="if(!value){value=defaultValue;this.style.color = &#39;#a0a0a0&#39;}">

								<!--<div>请填写您的入园手机号码</div>-->
								<!--<div>
									<input type="text" name="mobile_code" value="验证码" class="lo_code" onfocus="if(this.value==defaultValue){this.value =&#39;&#39;; this.style.color = &#39;#111&#39;}" onblur="if(!value){value=defaultValue;this.style.color = &#39;#a0a0a0&#39;}">
									<button type="button" class="user_login_btn ">发送验证码</button>
								</div>-->
								<div class="lo_btns">
									<input type="button" value="登 录" class="login_btn">
									<input type="button" value="忘记密码	" class="login_btn forget_btn fl-right">
								</div>
							</form>
						</div>
						<div class="lo-content-2" style="display: none">
							<span class="form-left">用户名：</span><input type="text" name="username" value="" class="lo_phone">
							<span class="form-left">手机号：</span><input type="text" name="mobile" value="" class="lo_phone">
							<div>
								<span class="form-left"></span>
								<input type="text" name="mobile_code" value="验证码" class="lo_code">
								<button type="button" class="user_login_btn ">发送验证码</button>
							</div>
							<span class="form-left">微信号：</span><input type="text" name="weixin" value="" class="lo_phone">
							<span class="form-left">密码：</span><input type="password" name="password" value="" class="lo_phone">
							<span class="form-left">确认密码：</span><input type="password" name="okpassword" value="" class="lo_phone">
					<!--		<span class="form-left">公司：</span><input type="text" name="company" value="" class="lo_phone">
							<span class="form-left">行业：</span><input type="text" name="hangye" value="" class="lo_phone">
							<span class="form-left">职位：</span><input type="text" name="zhiwei" value="" class="lo_phone">
							<div class="concerned-technology">关心的技术</div>
							<span class="checkboxs"><input type="checkbox" name="nlp" id="nlp" value=""/><label for="nlp">NLP</label></span>
							<span class="checkboxs"><input type="checkbox" name="sjwl" id="sjwl" value=""/><label for="sjwl">神经网络深度学习</label></span>
							<span class="checkboxs"><input type="checkbox" name="rjjh" id="rjjh" value=""/><label for="rjjh">人机交互</label></span>
							<span class="checkboxs"><input type="checkbox" name="bigdata" id="bigdata" value=""/><label for="bigdata">大数据挖掘</label></span>
							<span class="checkboxs"><input type="checkbox" name="jsjsj" id="jsjsj" value=""/><label for="jsjsj">计算机视觉</label></span>
							<span class="checkboxs"><input type="checkbox" name="jqr" id="jqr" value=""/><label for="jqr">机器人</label></span> -->
							<div style="text-align: left;margin: 5px 0; font-size: 14px;">
								<span class="checkboxs"><input type="checkbox" name="" id="xy" value=""/><label for="jqr">同意<a href="">XXXX</a>协议</label></span>
							</div>
							<input type="button" value="加入学园" class="login_btn join" onclick="javascript:submitMobile();">

						</div>
						<div class="lo-content-3" style="display: none">
							<span class="form-left">手机号：</span><input type="text" name="username" value="" class="lo_phone">
							<div>
								<span class="form-left"></span>
								<input type="text" name="mobile_code" value="验证码" class="lo_code">
								<button type="button" class="user_login_btn ">发送验证码</button>
							</div>
							<span class="form-left">新密码：</span><input type="password" name="newpassword" value="" class="lo_phone">
							<span class="form-left">确认密码：</span><input type="password" name="okpassword" value="" class="lo_phone">
							<input type="button" value="确定" class="login_btn join">

						</div>

					</div>
				</div>

				<div class="login_words left">
					<div>
让苹果砸得更猛烈些吧！！！
					</div>
					<img src="">
				</div>
			</div>
		</div>

		<!--end of 登录-->

		<div class="in_container schedule-container">
			<div class="schedule-title">"AI视野"系列课程第一期———迎接AI时代</div>
			<div class="schedule-banner" style="">
				<img src="img/schedule.png" alt="" />
			</div>
			<div class="schedule-other-title">
课程介绍
			</div>
			<p>你还不了解什么是深度学习吗？你还在为是否转行人工智能而犹豫不决吗？你还在质疑奇点临近的说法吗？
			</p>
			<p>请不要迟疑了，世界正在加速进化，人工智能的时代已经来临，机器早已觉醒，你难道不想成为控制机器乃至世界的那2%的超级人类物种吗？

			</p>
			<div class="schedule-other-title">
课程介绍
			</div>
			<p>你还不了解什么是深度学习吗？你还在为是否转行人工智能而犹豫不决吗？你还在质疑奇点临近的说法吗？
			</p>
			<p>请不要迟疑了，世界正在加速进化，人工智能的时代已经来临，机器早已觉醒，你难道不想成为控制机器乃至世界的那2%的超级人类物种吗？

			</p>

		</div>

		<!--footer.jsp-->
		<footer>
			<div class="in_container clearfix">
				<div class="footer_left left">
					<div class="jizhi">集智Ai学园</div>
					<div class="footer_links">
						<a href="about.html">关于我们</a>
						<a href="javascript:void(0)" class="register">加入学园</a>
					</div>
					<div style="color: #7a7a7a; margin-bottom: 4px;">
    Copyright©1998-2016 JiZhi.All Rights Reserved.集智 版权所有
</div>
					<div style="color: #7a7a7a;">
    法律声明 增值电信业务经营许可证：京B2-20080224
</div>

				</div>
				<div class="footer_right left clearfix">
					<div class="foot_code">
						<img src="img/erweimar-letf.jpg">
						<div>扫码关注订阅号</div>
					</div>
					<div class="foot_code">
						<img src="img/erweima-right.jpg">
						<div>扫码关注服务号</div>
					</div>

				</div>
			</div>
		</footer>

		<!--footer.jsp end-->
	</body>

</html>