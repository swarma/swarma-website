<?php
/**
 * Created by PhpStorm.
 * User: yanhe
 * Date: 2016/11/10
 * Time: 19:38
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
	<!--	<link rel="stylesheet" href="fonts/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
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

	<body>
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
								<a href="course">课程体系

								</a>

							</li>
							<li class="">
								<a href="article">AI前沿
									<div class="active"></div>
								</a>

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

		<!--登录／入社-->
		<div class="popup">
			<div class="alert_box">
				<p class="alert_box_text">验证码已发送</p>
			</div>
			<div class="layerbg"></div>
			<div class="popup_content clearfix" style="display: none;">
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
							<!--<span class="form-left">公司：</span><input type="text" name="company" value="" class="lo_phone">
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

		<div class="video_container clearfix">

			<div class="left">
				<div class="ai-choice">
					<span class="zkkc">只看课程</span><span class="zkwz right">只看文章</span>
				</div>

				<div class="left_list left">

					<div class="list_content">
						<a href="" class="list_pic"><img src="http://yxs-pic.oss-cn-beijing.aliyuncs.com/2d86dfbf1491976ac678cc6866400afb"></a>
						<div class="list_details">
							<a href="" class="list_title">营销权威约翰·奎尔奇：这7个办法，能帮你应对同质化竞争的价格战｜研习社课程实录</a>
							<p class="list_text">
产品同质化的每个品牌成长过程中不可避免的阶段。如果你的产品很受市场欢迎，就必然会有新的市场进入者快速跟进，和你展开价格大战。只有最笨的创业者才会一味地打价格战，聪明的创业者有7个方法来应对市场中的低价竞争。
							</p>
							<div class="clearfix">
								<span class="clicked"><i class="fa fa-eye"></i>&nbsp;50082</span>
								<span class="zan"><i class="fa fa-heart cursor"></i>&nbsp;12345</span>
								<div class="share_wrap right">
									<span class="share_icon share_icon1 wechat"></span>
									<span class="share_icon share_other share_icon2" data-share="qzone"></span>
									<span class="share_icon share_other share_icon3" data-share="sina"></span>
								</div>
							</div>
						</div>
					</div>

					<div class="list_content">
						<a href="" class="list_pic"><img src="http://yxs-pic.oss-cn-beijing.aliyuncs.com/ebe7d997da0717ffb39cb80c58e23d76"></a>
						<div class="list_details">
							<a href="" class="list_title">营销权威约翰·奎尔奇：社交媒体时代，如何对粉丝估值？｜研习社课程实录</a>
							<p class="list_text">
社交媒体有很多营销挑战，如何为粉丝来估值是一个大问题。从营销角度来思考，要关注强纽带和弱纽带。你可能以为，强纽带的密友产生最大的营销影响，研究发现不是这样的，产生更大的影响反而是跟你更疏远的人。
							</p>
							<div class="clearfix">
								<span class="clicked"><i class="fa fa-eye"></i>&nbsp;69012</span>
								<span class="zan"><i class="fa fa-hand-peace-o cursor"></i>&nbsp;12345</span>

								<div class="share_wrap right">
									<span class="share_icon share_icon1 wechat"></span>
									<span class="share_icon share_other share_icon2" data-share="qzone"></span>
									<span class="share_icon share_other share_icon3" data-share="sina"></span>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
			<div class="right_list right">
				<a href="../schedule/index.htm" class="right_list_pic"><img src="http://yxs-pic.oss-cn-beijing.aliyuncs.com/3d97b03bac7b62e975f0e1e62ed3effa"></a>
				<div class="hot_container">
					<span class="hot cursor">热门排行</span>
					<span class="kjrd cursor">科技热点</span>
					<div class="line">
						<p class="inner_line"></p>
					</div>

					<a href="" class="list_title">
						<div class="hot_content clearfix">
							<div class="hot_pic left"><img src="http://yxs-pic.oss-cn-beijing.aliyuncs.com/7b1b80fd68beb68dbdd2ba509fda7281" alt=""></div>
							<div class="hot_text right">
								<p class="hot_title">
罗振宇：正在变化的商业逻辑，我有这十个推论｜研习社课程实录
</p>
								<P class="hot_clicked"><i class="fa fa-eye"></i>&nbsp;79063</P>
							</div>
						</div>
					</a>

					<a href="" class="list_title">
						<div class="hot_content clearfix">
							<div class="hot_pic left"><img src="http://yxs-pic.oss-cn-beijing.aliyuncs.com/ebe7d997da0717ffb39cb80c58e23d76" alt=""></div>
							<div class="hot_text right">
								<p class="hot_title">
营销权威约翰·奎尔奇：社交媒体时代，如何对粉丝估值？｜研习社课程实录
</p>
								<P class="hot_clicked"><i class="fa fa-eye"></i>&nbsp;69012</P>
							</div>
						</div>
					</a>

				</div>
			</div>
		</div>

		<a href="#" style="padding: 20px; background: white; border: 1px solid #969696; border-radius: 4px; font-size: 30px; display: inline-block; position: fixed;top: 80%;right: 0;"> <i class="fa fa-arrow-up"></i></a>

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