<?php
/**
 * Created by PhpStorm.
 * User: yanhe
 * Date: 2016/11/10
 * Time: 19:22
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
		<!--<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="fonts/css/font-awesome.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/common.css" />
		<script src="js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
		<!--<script src="static/theme/default/js/jquery-1.11.3.min.js"></script>-->
		<!--<script src="js/ie10-viewport-bug-workaround.js"></script>
		<script type="text/javascript" src="js/jquery.validate.min.js"></script>
		<script src="js/common.js"></script>
		<!--用于处理win8的兼容问题-->
		<!--[if lt IE 9]>
<!--<script src="js/html5shiv.min.js" "></script>
<script src="js/respond.min.js"></script>
<![endif]-->

	<?=Html::cssFile('@web/css/style.css')?>
	<?=Html::cssFile('@web/css/common.css')?>
	<?=Html::cssFile('@web/fonts/css/font-awesome.min.css')?>
	<?=Html::jsFile('@web/js/jquery-1.11.3.min.js')?>
	<?=Html::jsFile('@web/js/ie10-viewport-bug-workaround.js')?>
	<?=Html::jsFile('@web/js/jquery.validate.min.js')?>
	<?=Html::jsFile('@web/js/html5shiv.min.js')?>
	<?=Html::jsFile('@web/js/respond.min.js')?>
	<?=Html::jsFile('@web/js/common.js')?>
	<?=Html::jsFile('@web/js/main.js')?>
	<?=Html::jsFile('@web/js/swiper.js')?>
	<?=Html::jsFile('@web/js/statistic.js')?>


    <noscript>您的浏览器不支持JavaScript，请启动JavaScript或更换浏览器</noscript>

	</head>

	<body class="index_body" style="background-color: #D2D2D2;">
		<!--顶栏-->

		<header>
			<div class="nav_wrap">
				<div class="container clearfix">
					<a href="home" class="logo left"><img src="img/logo.png"></a>
					<nav class="left" style="position: relative;">
						<div class="wrap-move">
							<div class="move f1-move" style="display: none; left: 0px;"></div>
						</div>
						<ul class="nav-btn right">
							<li class="flys1">
								<a href="home">首页
									<div class="active"></div>
								</a>
							</li>
							<li class="">
								<a href="course/detail">课程体系</a>
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
						<a href="" class="jizhi_username">欢迎您，<?php if(!empty($userdetail['name'])){echo $userdetail['name'];}else{echo "集智AI学员";} ?></a>
						<!--<a href="javascript:void(0);" class="login hide">登录</a>
						<!--<span>／</span>-->
					<!--	<a href="javascript:void(0);" class="register">注册</a>

					</div>
				</div>
			</div>
		</header>

		<!--登录-->
	<!--	<div class="popup">
			<div class="alert_box">
				<p class="alert_box_text">验证码已发送</p>
			</div>
			<div class="layerbg"></div>
			<div class="popup_content clearfix" style="display: none;">
				<div class="popclose right">
					<img src="img/close.png" >
				</div>
				<div class="login_wrap left">
					<div class="login-title clearfix">
						<div class="active" id="lo-id-1">登录学园</div>
						<div id="lo-id-2">加入学园</div>
					</div>
				<div>
						<div class="lo-content-1" style="display: block;">
							<form action="" method="post" name="loginForm" id="loginForm">
								<span class="form-left">用户名：</span><input type="text" name="username" value="" class="lo_phone"  onfocus="if(this.value==defaultValue){this.value =&#39;&#39;; this.style.color = &#39;#111&#39;}" onblur="if(!value){value=defaultValue;this.style.color = &#39;#a0a0a0&#39;}">
								<span class="form-left">密码：</span><input type="password" name="password" value="" class="lo_phone" id="password" onfocus="if(this.value==defaultValue){this.value =&#39;&#39;; this.style.color = &#39;#111&#39;}" onblur="if(!value){value=defaultValue;this.style.color = &#39;#a0a0a0&#39;}">

								<!--<div>请填写您的入园手机号码</div>-->
								<!--<div>
									<input type="text" name="mobile_code" value="验证码" class="lo_code" onfocus="if(this.value==defaultValue){this.value =&#39;&#39;; this.style.color = &#39;#111&#39;}" onblur="if(!value){value=defaultValue;this.style.color = &#39;#a0a0a0&#39;}">
									<button type="button" class="user_login_btn ">发送验证码</button>
								</div>-->
							<!--	<div class="lo_btns">
									<input type="button" value="登 录" class="login_btn" >
									<input type="button" value="忘记密码	" class="login_btn forget_btn fl-right" >
								</div>
							</form>
						</div>
						<div class="lo-content-2" style="display: none">
							<span class="form-left">用户名：</span><input type="text" name="username" value="" class="lo_phone"  >
							<span class="form-left">手机号：</span><input type="text" name="mobile" value="" class="lo_phone"  >
							<div>
								<span class="form-left"></span>
								<input type="text" name="mobile_code" value="验证码" class="lo_code" >
								<button type="button" class="user_login_btn ">发送验证码</button>
							</div>
							<span class="form-left">微信号：</span><input type="text" name="weixin" value="" class="lo_phone"  >
							<span class="form-left">密码：</span><input type="password" name="password" value="" class="lo_phone"  >
							<span class="form-left">确认密码：</span><input type="password" name="okpassword" value="" class="lo_phone"  >
							<!--<span class="form-left">公司：</span><input type="text" name="company" value="" class="lo_phone"  >
							<span class="form-left">行业：</span><input type="text" name="hangye" value="" class="lo_phone"  >
							<span class="form-left">职位：</span><input type="text" name="zhiwei" value="" class="lo_phone"  >
							<div class="concerned-technology">关心的技术</div>
							<span class="checkboxs"><input type="checkbox" name="nlp" id="nlp" value=""/><label for="nlp">NLP</label></span>
							<span class="checkboxs"><input type="checkbox" name="sjwl" id="sjwl" value=""/><label for="sjwl">神经网络深度学习</label></span>
							<span class="checkboxs"><input type="checkbox" name="rjjh" id="rjjh" value=""/><label for="rjjh">人机交互</label></span>
							<span class="checkboxs"><input type="checkbox" name="bigdata" id="bigdata" value=""/><label for="bigdata">大数据挖掘</label></span>
							<span class="checkboxs"><input type="checkbox" name="jsjsj" id="jsjsj" value=""/><label for="jsjsj">计算机视觉</label></span>
							<span class="checkboxs"><input type="checkbox" name="jqr" id="jqr" value=""/><label for="jqr">机器人</label></span> -->
					<!--		<div style="text-align: left;margin: 5px 0; font-size: 14px;">
								<span class="checkboxs"><input type="checkbox" name="" id="xy" value=""/><label for="jqr">同意<a href="">XXXX</a>协议</label></span>
							</div>
							<input type="button" value="加入学园" class="login_btn join" onclick="javascript:submitMobile();">

						</div>
						<div class="lo-content-3" style="display: none">
							<span class="form-left">手机号：</span><input type="text" name="username" value="" class="lo_phone"  >
							<div>
								<span class="form-left"></span>
								<input type="text" name="mobile_code" value="验证码" class="lo_code" >
								<button type="button" class="user_login_btn ">发送验证码</button>
							</div>
							<span class="form-left">新密码：</span><input type="password" name="newpassword" value="" class="lo_phone"  >
							<span class="form-left">确认密码：</span><input type="password" name="okpassword" value="" class="lo_phone"  >
							<input type="button" value="确定" class="login_btn join">

						</div>

					</div>
				</div>  -->

				<div class="login_words left">
				<div>
让苹果砸得更猛烈些吧！！！
					</div>
					<img src="" >
				</div>
			</div>
		</div>

		<!--end of 登录／入社-->

<div class="in_container personcenter-container">
<div class="personcenter-cont-header clearfix" style="">
	<div class="herder-left left">
个人中心
	</div>
	<div class="header-right left">
		<span class="img_wrap">
			<img src="img/lyr.png"/>
			<span class="img-username">距离</span>
		</span>
	</div>
</div>
<div class="personcenter-cont-body clearfix">
	<ul class="body-left left">
		<li>我的订单</li>
		<li>我的收藏</li>
		<li>我的课程</li>
		<li class="active">个人信息</li>
		<li>修改密码</li>
		<li>联系客服</li>
	</ul>
	<div class="body-right left">
		<div class="persron-info">
			<form action="" method="post" name="detailForm" id="detailForm">
			<ul class="info-ul">
				<li><span class="info-left">用户名：</span><input type="" name="nick" id="nick" value="<?= $userdetail['name'] ?>" /></li>
				<li><span class="info-left">真实姓名：</span><input type="" name="real" id="real" value="<?= $userdetail['realname'] ?>" /></li>
				<li><span class="info-left">邮箱：</span><input type="" name="email" id="email" value="<?= $userdetail['email'] ?>" /></li>
				<li><span class="info-left">微信号：</span><input type="" name="weixin" id="weixin" value="<?= $userdetail['wechat'] ?>" /></li>
				<li><span class="info-left">公司：</span><input type="" name="company" id="company" value="<?= $userdetail['company'] ?>" /></li>
				<li><span class="info-left">行业：</span><input type="" name="profession" id="profession" value="<?= $userdetail['profession'] ?>" /></li>
				<li><span class="info-left">职位：</span><input type="" name="job" id="job" value="<?= $userdetail['job'] ?>" /></li>
			<!--	<div class="concerned-technology">关心的技术</div>
				<span class="checkboxs"><input type="checkbox" name="nlp" id="nlp" value=""/><label for="nlp">NLP</label></span>
				<span class="checkboxs"><input type="checkbox" name="sjwl" id="sjwl" value=""/><label for="sjwl">神经网络深度学习</label></span>
				<span class="checkboxs"><input type="checkbox" name="rjjh" id="rjjh" value=""/><label for="rjjh">人机交互</label></span>
				<span class="checkboxs"><input type="checkbox" name="bigdata" id="bigdata" value=""/><label for="bigdata">大数据挖掘</label></span>
				<span class="checkboxs"><input type="checkbox" name="jsjsj" id="jsjsj" value=""/><label for="jsjsj">计算机视觉</label></span>
				<span class="checkboxs"><input type="checkbox" name="jqr" id="jqr" value=""/><label for="jqr">机器人</label></span> -->
			</ul>
				</form>
			<div class="info-line">

			</div>
			<div class="btn">
				<span class="saveInfo-btn">
                保存
				</span>
			</div>

		</div>

	</div>

</div>
</div>

		<!--end of SuperSlide-->

				<script type="text/javascript">
					(function() {

						var second = 60, interval;
						$(".saveInfo-btn").click(function () {
							//alert("logintest");
							userdetail();

						});



						function userdetail(){                              //提交数据函数
							alert("test");
							$.ajax({                                                  //调用jquery的ajax方法
								type: "POST",                                      //设置ajax方法提交数据的形式
								url: "global/moddetail",                                       //把数据提交到相关位置
								//data: "username="+$('#regForm input[name=mobile]').val(),     //输入框writer中的值作为提交的数据
								data: "nick="+$("#detailForm input[name=nick]").val()+"&real="+$("#detailForm input[name=real]").val()+"&email="+$("#detailForm input[name=email]").val()+"&weixin="+$("#detailForm input[name=weixin]").val()+"&company="+$("#detailForm input[name=company]").val()+"&profession="+$("#detailForm input[name=profession]").val()+"&job="+$("#detailForm input[name=job]").val(),
								success: function(msg){                  //提交成功后的回调，msg变量是ok.php输出的内容。
									Nmsg = eval('(' + msg + ')');
									if(Nmsg.code==0){
										//  APP.alert(Nmsg.msg);
										alert(Nmsg.msg);
									}
									if(Nmsg.code==1){
										// APP.alert(Nmsg.msg);
										alert(Nmsg.msg);
										window.location.href="user";                      //如果有必要，可以把msg变量的值显示到某个DIV元素中

									}
								}
							});
						}
					
					
					
					})();

				</script>

		<!--footer.jsp-->
		<footer>
			<div class="in_container clearfix">
				<div class="footer_left left">
					<div class="jizhi">集智Ai学园</div>
					<div class="footer_links">
						<a href="about">关于我们</a>
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
						<img src="" >
						<div>扫码关注订阅号</div>
					</div>
					<div class="foot_code">
						<img src="" >
						<div>扫码关注服务号</div>
					</div>

				</div>
			</div>
		</footer>
		<!--footer.jsp end-->
	</body>

</html>