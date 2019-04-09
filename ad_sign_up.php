
<!DOCTYPE HTML>
<html>
<head>
<title>pingee signup</title>
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
   <form id="sign_up_f" action="ad_sign_up_process.php" method="post">
				<div class="  nl_border text-center">
					<div style="padding-bottom:10px; padding-top:10px;"><h4 class="style1">Sign up</h4>
					</div>
					
					
					<div class="cus_info_wrap" id="full_name_msg" style="display:none;">
						<div class="nl_warning_div">
						Please Input Your Name
						</div>
					</div>
					
					<div class="cus_info_wrap">
						<label class="labelTop">
						Full Name:
						<span class="require">*</span>
						</label>
						<input type="text" value="" name="full_name" id="full_name">
					</div>
					
				<div class="cus_info_wrap" id="phone_no_msg" style="display:none;">
						<div class="nl_warning_div">
						Please Input Your Phone Number
						</div>
		</div>
					
					<div class="cus_info_wrap">
						<label class="labelTop">
						Phone No:
						<span class="require">*</span>
						</label>
						<input type="text" value="" name="phone_no" id="phone_no">
					</div>
					
					
					
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
						Email Id:
						<span class="require">*</span>
						</label>
						<input type="text" value="" name="email_id" id="email_id">
					</div>
					
					<div class="cus_info_wrap" id="sex_msg" style="display:none;">
						<div class="nl_warning_div">
						Please Choose Your Sex
						</div>
					</div>
					
					<div class="cus_info_wrap">
						<label class="labelTop">
						Sex:
						<span class="require">*</span>
						</label>
						<select class="nl_select" name="sex" id="sex">
						<option value="" disabled selected>Select sex</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
						</select>
					</div>
					
					<div class="cus_info_wrap" id="password_msg" style="display:none;">
						<div class="nl_warning_div">
						You cant leave password field empty
						</div>
					</div>
					
					<div class="clearfix"></div>
				    <div class="cus_info_wrap">
						<label class="labelTop">
						Password:
						<span class="require">*</span>
						</label>
						<input class="nl_password2" type="password" name="password" id="password">
					</div>
					
					<div class="cus_info_wrap" id="confirm_password_msg" style="display:none;">
						<div class="nl_warning_div">
						Password does not match
						</div>
					</div>
					<div class="clearfix"></div><div class="cus_info_wrap">
						<label class="labelTop confirmpass">
						Conform Password:
						<span class="require">*</span>
						</label>
						<input class="nl_password2" type="password" name="confirm_password" id="confirm_password">
					</div>
					<div class="cus_info_wrap" id="school_msg" style="display:none;">
						<div class="nl_warning_div">
						Please choose your School
						</div>
					</div>
					<div class="cus_info_wrap">
						<label class="labelTop">
						School:
						<span class="require">*</span>
						</label>
						<select class="nl_select" name="school" id="school">
						<option value="" disabled selected>Choose your School</option>
  <option value="UNN">UNN</option>
  <option value="UNILAG">UNILAG</option>
  <option value="UNIBEN">UNIBEN</option>
						</select>
					</div>
					
					
					<div class="botton1">
					<input type="button" value="SIGNUP" class="botton" onClick="check_form_and_submit()">
					
				</div>
	  </form>
				<br><br>
				</div>
				<div style="background: #f2f2f2;">
				<br>
				<div>
				<div class="nl_border benefits" style="background: #FFFFFF;">
					<h4>Benefits of signup</h4>
					<p>Manage your purchases anytime: Track your order status and print your vouchers</p>
					<p>Quick shopping: no need to fill in your contact and shipping details while buying</p>
					<p>Easy access to member only benefits</p>
				</div></div></div>
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
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script>
function check_form_and_submit(){
document.getElementById("full_name_msg").style.display = "none";
document.getElementById("phone_no_msg").style.display = "none";
document.getElementById("email_id_msg").style.display = "none";
document.getElementById("sex_msg").style.display = "none";
document.getElementById("password_msg").style.display = "none";
document.getElementById("confirm_password_msg").style.display = "none";
document.getElementById("school_msg").style.display = "none";
document.getElementById("email_id_valid_msg").style.display = "none";

if(document.getElementById("full_name").value == null || document.getElementById("full_name").value == ""){
document.getElementById("full_name_msg").style.display = "block";
}else{


if(document.getElementById("phone_no").value == null || document.getElementById("phone_no").value == ""){
document.getElementById("phone_no_msg").style.display = "block";
}else{


if(document.getElementById("email_id").value == null || document.getElementById("email_id").value == ""){
document.getElementById("email_id_msg").style.display = "block";
}else{

if(document.getElementById("email_id").value.match(' ')){
document.getElementById("email_id_valid_msg").style.display = "block";
}else{

if(document.getElementById("sex").value == null || document.getElementById("sex").value == ""){
document.getElementById("sex_msg").style.display = "block";
}else{


if(document.getElementById("password").value == null || document.getElementById("password").value == ""){
document.getElementById("password_msg").style.display = "block";
}else{



if(document.getElementById("confirm_password").value != document.getElementById("password").value){
document.getElementById("confirm_password_msg").style.display = "block";
}else{


if(document.getElementById("school").value == null || document.getElementById("school").value == ""){
document.getElementById("school_msg").style.display = "block";
}else{
document.getElementById("sign_up_f").submit();
}



}




}



}


}
}

}



}

}


</script>
</body>
</html>