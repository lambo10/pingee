
<!DOCTYPE HTML>
<html>
<head>
<title>pingee login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="applijegleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<link href="css/style2.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<script src="js/simpleCart.min.js"> </script>
<!--web-fonts-->
 <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,300italic,600,700' rel='stylesheet' type='text/css'>
 <link href='//fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
 <script src="js/scripts.js" type="text/javascript"></script>
<script src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<style type="text/css">
<!--
.style1 {
	font-family: Calibri, Arial;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<!--start-home-->
<!-- header_top -->
<div class="top_bg" id="home">
	<div class="container">
		<?php
		include'header.php';
		?>
</div>
</div>

 <!--start-content-->
<!--account-->
<br>
<div class="row"  style="background: #f2f2f2;">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
   <div class="login-signup-form" style="background: #FFFFFF;">
				<div class=" nl_border text-center">
					<div style="padding-bottom:10px; padding-top:10px;"><h4 class="style1">login</h4></div>
					<div class="how_to">
						<a href="#"><div class="reg_fb"><img src="images/facebook.png" alt=""><i>Facebook</i><div class="clearfix"></div></div></a>
						<a href="#"><div class="reg_gp"><img src="images/gp.png" alt=""><i>GOOGLE</i><div class="clearfix"></div></div></a>
						<p><img src="images/locked.png" alt="" />Be assured, we do not store your password</p>
					</div>
					<h5>OR</h5>
					
					<div class="cus_info_wrap" id="full_name_msg">
						<div class="nl_warning_div" style="background-color:#FF9966;">
						Email Or Password Incorrect
						</div>
					</div>
					
					<form id="login_form_HR0" action="login_process.php" method="post">
					
					
					<div class="cus_info_wrap" id="email_id_msg" style="display:none;">
						<div class="nl_warning_div">
						Please Input Your E-mail
						</div>
					</div>
					
					<div class="cus_info_wrap" id="email_id_valid_msg" style="display:none;">
						<div class="nl_warning_div">
						Please Input a valid email
						</div>
					</div>
					
					
					<div class="cus_info_wrap">
						<label class="labelTop">
						Email:
						<span class="require">*</span>
						</label>
						<input id="email_id" type="text" name="email">
					</div>
					<div class="clearfix"></div>
					
					<div class="cus_info_wrap" id="password_msg" style="display:none;">
						<div class="nl_warning_div">
						Please input your password
						</div>
					</div>
					
					<div class="cus_info_wrap">
						<label class="labelTop">
						Password:
						<span class="require">*</span>
						</label>
						<input id="password" class="nl_password2" type="password" name="password" style="">
					</div>
					<div class="clearfix"></div>
					<div class="sky-form">
					<label class="checkbox"><input type="checkbox" name="remember" value="10" >
					<i></i>Remember me on this Device </label>
				</div>
				<div class="botton1">
					<input type="button" onClick="check_form_and_submit()" value="SIGNIN" class="botton">
				</div>
				</form>
				<div class="forgetit">
				<a href="ad_sign_up.php">Register</a>
					
				</div>
				<div class="forgetit">
					<a href="">forgot your password?</a>
					<br><br>
				</div>
				</div>
				
				</div>
				</div>
				</div>
				
<?php
		include'footer.php';
		?>
	 
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
								
								<script>
								
								
								function check_form_and_submit(){
								document.getElementById("email_id_msg").style.display = "none";
								document.getElementById("email_id_valid_msg").style.display = "none";
								document.getElementById("password_msg").style.display = "none";
								
if(document.getElementById("email_id").value == null || document.getElementById("email_id").value == ""){
document.getElementById("email_id_msg").style.display = "block";
}else{

if(document.getElementById("email_id").value.match(' ')){
document.getElementById("email_id_valid_msg").style.display = "block";
}else{

if(document.getElementById("password").value == null || document.getElementById("password").value == ""){
document.getElementById("password_msg").style.display = "block";
}else{

document.getElementById("login_form_HR0").submit();

}
}
}

}

								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>
</html>