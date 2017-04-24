<?php
	include_once '../init.php';

?>

<!DOCTYPE HTML>
<html>

<head>
	<title>SART Member</title>
	<script src="js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<link href="css/gaya.css" rel="stylesheet" type="text/css" media="all" />
	<!-- for-mobile-apps -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Login Signup form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<!-- //for-mobile-apps -->
	<!--Google Fonts-->
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet" type="text/css">
	<!-- -->
	<script>
		var __links = document.querySelectorAll('a');

		function __linkClick(e) {
			parent.window.postMessage(this.href, '*');
		};
		for (var i = 0, l = __links.length; i < l; i++) {
			if (__links[i].getAttribute('data-t') == '_blank') {
				__links[i].addEventListener('click', __linkClick, false);
			}
		}

	</script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script>
		$(document).ready(function(c) {
			$('.green-signup').on('click', function(c) {
				$('.green-headleft').fadeOut('slow', function(c) {
					$('.green-headleft').remove();
				});
			});
		});

	</script>
	<script>
		var __links = document.querySelectorAll('a');

		function __linkClick(e) {
			parent.window.postMessage(this.href, '*');
		};
		for (var i = 0, l = __links.length; i < l; i++) {
			if (__links[i].getAttribute('data-t') == '_blank') {
				__links[i].addEventListener('click', __linkClick, false);
			}
		}

	</script>
	<script>
		$(document).ready(function(c) {
			$('.closeup').on('click', function(c) {
				$('.green-right').fadeOut('slow', function(c) {
					$('.green-right').remove();
				});
			});
		});

	</script>
	<script>
		$(document).ready(function(c) {
			$('.rib-close').on('click', function(c) {
				$('.ribben').fadeOut('slow', function(c) {
					$('.ribben').remove();
				});
			});
		});

	</script>
</head>

<body>
	<!--header start here-->
	<div class="header">
		<div class="wrap">
			<div class="header-main">
				<h1>SART Member</h1>
				<div class="header-bottom">

					<!--ini form sign u, action form handler-->
					<div class="header-left green-headleft">
						<div class="header-left-top">
							<div class="sign-up">
								<h3>SIGN UP</h3> </div>
							<div class="sign-close green-signup"><img src="img/cancel.png" alt="" /></div>
							<div class="clear"> </div>
						</div>
						<div class="header-left-bottom">
							<h3>Welcome to our Site.Please enter your <span class="login-color">Registration </span>details. Or have an account <span class="login-color">Login</span> here </h3>
							<form method="post" action="../control/formhandler.php">
								<input type="text" name="uname" class="user active" placeholder="User Name" required/>
								<input type="text" name="email" class="email active" placeholder="Email" required />
								<input type="password" name="pw" class="lock active" placeholder="Password" required/>
								<span class="checkbox1">
							   <label class="checkbox"><input type="checkbox"><i> </i>I Accept Terms.</label>
						 		</span>
								<input type="submit" name="signup" value="Sign Up">
							</form>
						</div>
						<div class="header-social">
							<span class="line"> </span>
							<h4>SignUp with your <a href="#">Facebook</a> or <a href="#">Twitter</a></h4>
							<a href="#" class="face">Facebook</a>
							<a href="#" class="twitt">Twitter</a>
						</div>
					</div>

					<!-- Ini form login, action formhandler-->
					<div class="header-right  green-right">
						<div class="header-left-top">
							<div class="sign-up">
								<h3>LOG IN</h3> </div>
							<div class="sign-close closeup"><img src="img/cancel.png" alt="" /></div>
							<div class="clear"> </div>
						</div>
						<div class="header-left-bottom">
							<h3>Welcome to our Site.Please enter your <span class="login-color">Login</span> details to login here. Or <span class="sin-color">Register</span> here.</h3>
							<form method="post" >
								<input type="text" class="user active" name="unama" placeholder="User Name" required/>
								<input type="password" class="lock active"  name="pws" placeholder="Password" required/>
								<div class="remember">
									<span class="checkbox1">
							   		<label class="checkbox"><input type="checkbox"> <i> </i>Remember me</label>
									</span>
									<div class="forgot">
										<h6><a href="#">Forgot Password</a></h6>
									</div>
									<div class="clear" id="error">
										<?php echo (isset($GLOBALS['err'])) ? $GLOBALS['err']:""; ?>
									</div>
									<div>

									</div>
								</div>
								<input type="submit" name="login" value="Login">
							</form>
						</div>
						<div class="header-social">
							<span class="line"> </span>
							<h4>Login with your <a href="#">Facebook</a> or <a href="#">Twitter</a></h4>
							<a href="#" class="face">Facebook</a>
							<a href="#" class="twitt">Twitter</a>
						</div>
					</div>
					<div class="clear"> </div>
				</div>

				<br>
				<hr>
				<h1>SART Admin</h1>

				<!-- ini form admin-->

				<div class="header-bottom-strip ribben">
					<div class="tool-tip-main">

					</div>
					<div class="strip-login">
						<div class="strip-sign-up">
							<h3>LOG IN</h3> </div>
						<div class="login-close rib-close"> <img src="img/cancel.png" alt="" /></div>
						<div class="clear"> </div>
					</div>
					<form action="../control/formhandler.php" method="post">
						<div class="strip-left">
							<input type="text" class="user active" placeholder="User Name" required/>
							<span class="checkbox1">
							<label class="checkbox"><input type="checkbox" name="remember" checked=""><i> </i>Remember me</label>
						 </span>
						</div>
						<div class="strip-left middle">
							<input type="password" class="lock active" placeholder="Password" required=""/>
							<p><a href="#">Forgot Password </a></p>
						</div>
						<div class="strip-left">
							<input type="submit" name="admin" value="Login">
							<div class="log-user">
								<h6>Or Login Using</h6>
								<ul class="botm-strip-icon">
									<li>
										<a class="f" href="#"> </a>
									</li>
									<li>
										<a class="tw" href="#"> </a>
									</li>
								</ul>
							</div>
						</div>
					</form>
					<div class="clear"> </div>
				</div>
			</div>
		</div>
	</div>
	<!--header end here-->
	<div class="copyright">
		<p>© 2016 Sart Member form. All rights reserved | by <a href="http://unsika.ac.id" target="_blank">  Universitas Singaperbangsa Karawang </a></p>
	</div>
	<!--footer end here-->
</body>

</html>
