<?php
/**
 * Created by PhpStorm.
 * User: yanhe
 * Date: 2016/11/10
 * Time: 16:10
 */
use yii\helpers\Html;

?>

<html>

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
		<link rel="stylesheet" type="text/css" href="css/common.css" />
		<script src="js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
		<!--<script src="static/theme/default/js/jquery-1.11.3.min.js"></script>-->
	<!--	<script src="js/ie10-viewport-bug-workaround.js"></script>
		<script type="text/javascript" src="js/jquery.validate.min.js"></script>
		<script src="js/common.js"></script> -->

        <?=Html::cssFile('@web/css/style.css')?>
        <?=Html::cssFile('@web/css/common.css')?>
        <?=Html::jsFile('@web/js/jquery-1.11.3.min.js')?>
        <?=Html::jsFile('@web/js/ie10-viewport-bug-workaround.js')?>
        <?=Html::jsFile('@web/js/jquery.validate.min.js')?>
        <?=Html::jsFile('@web/js/html5shiv.min.js')?>
        <?=Html::jsFile('@web/js/respond.min.js')?>
		<?=Html::jsFile('@web/js/common.js')?>

		<!--用于处理win8的兼容问题-->
		<!--[if lt IE 9]>
<!--<script src="static/theme/default/js/html5shiv.min.js" tppabs="http://www.hundun.cn/static/theme/default/js/html5shiv.min.js"></script>
<script src="static/theme/default/js/respond.min.js" tppabs="http://www.hundun.cn/static/theme/default/js/respond.min.js"></script>
<![endif]-->
		<noscript>您的浏览器不支持JavaScript，请启动JavaScript或更换浏览器</noscript>
		<!--end of meta.jsp-->
	</head>

	<body class="index_body" style="background-color: rgb(255, 255, 255);">
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
							<li class="">
								<a href="home">首页

								</a>
							</li>
							<li class="flys1">
								<a href="course">课程体系
								</a>

							</li>
							<li class="">
								<a href="article">AI前沿</a>
							</li>
							<!-- <li class="flys1"><a href="/video/list">在线课程</a></li>-->
							<li class="">
								<a href="about">关于我们
									<div class="active"></div>
								</a>
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
						<!--	<span class="form-left">公司：</span><input type="text" name="company" value="" class="lo_phone">
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

		<!--end of 登录／入社-->

		<div class="in_container schedule-container about-container">
			<span class="about-title">名称和简介</span> 集智俱乐部，英文名： Swarm Agents Club ，简称“ SA Club ”，成立于 2008 年 ， 是一个从事学术研究、享受科学乐趣的探索者的团体 。它倡导以平等开放的态度、科学实证的精神，进行跨学科的研究与交流，力图搭建一个中国的 “ 没有围墙的研究所 ”

			<span class="about-title">集智俱乐部的口号</span> 让苹果砸得更猛烈些吧！！！

			<span class="about-title">集智俱乐部的使命（即目标）</span> 营造自由交流学术思想的小生境， 孕育开创性的科学发现

<span class="about-title">详细介绍</span> 2003 年，集智俱乐部创始人张江（ Jake ）创办了集智俱乐部网站，该网站一直致力于宣传、普及、推广复杂系统科学，并展开广泛的跨学科交流，俱乐部渐渐聚集了一批有识之士。 5 年后的 2008 ，集智俱乐部的交流和活动开始从虚拟世界走向现实，并尝试发展一个现实世界中的学术组织。2014年集智俱乐部南京分部由王成军创立，并开始组织活动。2015年7月集智俱乐部在南京举办了第一届学术年会。目前集智俱乐部的主要活动有开放式的讲座与交流，其它主题小组活动，以及不定期的学术研讨会。此外，我们还会组织其他丰富多彩的活动以促进大家的相互了解和交流。

			<span class="about-title">集智活动</span> 集智活动多以讲座、读书会等形式研讨、科普前沿科学知识。活动所覆盖的学科领域包括：人工智能、复杂系统、生物科学、脑与认知等多个不同的领域。

			<span class="about-title">公开活动</span> 公开活动是指面向公众展开的偏向于科普性质的讲座，活动频率大约1个月1次，力图用通俗的语言进行广泛的跨学科交流。以往的公开活动，请看这里：[1]

<span class="about-title">小组活动（读书会）</span> 小组活动则采用一种相对私密、灵活的方式，但是内容和主题相对集中和专业。每次小组活动都由一个主持人带领大家进行一系列读书或者集体项目等活动，基本每个主题会持续半年或这1年不等。 以往的小组读书会，请看这里：[2]

<span class="about-title">学术会议</span> 集智学术会议将不定期召开，每次拟选定一个确定的主题，并邀请集智科学家及其外围成员参加。 2015-7-25、26在南京大学新闻传播学院召开了第一次学术会议：南京注意力的科学会议[3]

<span class="about-title">集智出品</span>
			<div class="clearfix chupin">
				<div class="left "><img class="about-img" src="img/mantan.jpg" />
					<p class="">科学的极致：漫谈人工智能</p>
				</div>
				<div class="left "><img class="about-img" src="img/2050.jpg" />
					<p>走近2050——注意力、互联网与人工智能</p>
				</div>
			</div>
			<div class="chupin">
				<div class="clearfix chupin">
					<img class="left about-app-img" src="img/mobile-1.jpg" />
					<img class="left about-app-img" src="img/mobile-2.jpg" />

				</div>
				<p>集智孕育－彩云天气</p>
			</div>

			<span class="about-title">发展历史</span> 集智俱乐部的历史大事记：

			<br /> 2003年，创办集智俱乐部网站：swarmagents.cn（swarmagents.org）

			<br /> 2007年底，开始线下活动，成立实体俱乐部

<br /> 2008年，开始在叁号会所进行固定的实体活动，包括公开活动和读书会

<br /> 2009年，成立集核作为集智俱乐部的决策、管理机构

<br /> 2012年，成立集智发展基金，接受来自社会的捐助

<br /> 2013年，建立集智百科网站：wiki.swarma.net

<br /> 2014年，集智孕育出彩云天气项目

<br /> 2015年，集智出品第一本图书：科学的极致

<br /> 2015年8月，集智举办第一届集智年会

<br />

			<span class="about-title">媒体报道</span> 李白薇：没有围墙的研究所，中国科技人才，2015 原文链接

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