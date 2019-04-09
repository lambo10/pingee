
<!DOCTYPE HTML>
<html>
<head>
<title>pingee ad boost</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="applijegleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<link href="css/font-awesome.min.css" rel='stylesheet' type='text/css' />	


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


		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
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
		
		$Values= $_SESSION["workingADid"];
		
		?>
</div>
</div>
 
 <br>
 
 <section id="intro" class="container">
							<div class="row">
								<div class="4u">
									<section class="first">
										<i class="icon featured fa-thumbs-o-up"></i>
										<header>
											<h2 class="style1">Top Ad</h2>
										</header>
										<p class="style1">Take your ads to the top of each page and get more visibility </p>
									</section>
									<form id="s_t_top_ad" method="post" action="top_ad_payment.php">
										<input type="text"  name="id_00W" id="ad_id_h22" style="display:none;" value="<?php echo $Values; ?>">
										
										</form>
									<a onClick="sumbmit_top_ad_id()" class="button style1">Apply</a>
								</div>
								<div class="4u">
									<section class="middle">
										<i class="icon featured alt fa-flash"></i>
										<header>
											<h2 class="style1">Boosted Ad</h2>
										</header>
										<p class="style1">Boost your ads to our home page and at the top of every search</p>
									</section>
									
									<form id="s_t_boosted_ad" method="post" action="boosted_ad_payment.php">
										<input type="text" name="id_00TU" id="ad_id_h26" style="display:none;" value="<?php echo $Values; ?>">
										
										</form>
									<a onClick="sumbmit_boosted_ad_id()" class="button alt style1">Apply</a>
								</div>
								<div class="4u">
									<section class="last">
										<i class="icon featured alt2 fa-star"></i>
										<header>
											<h2 class="style1">Free Ad</h2>
										</header>
										<p class="style1">Avaliable to all pingee members </p>
										<h2><p class="style1">&nbsp;</p></h2>
										
									</section>
									<form id="s_t_free_ad" method="post" action="set_output_session.php">
										<input type="text" name="ouput_free" id="output_yy" value="10" style="display:none;">
										</form>
									
									<a onClick="sumbmit_free_ad_id()" class="button alt style1" style="background:#666666;">Apply</a>
								</div>
							</div>
							<footer>
								<ul class="actions">
									
									
								</ul>
							</footer>
						</section>
		
				</div>
			</div>

 
 <br>



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
								
								function sumbmit_top_ad_id(){
								document.getElementById("s_t_top_ad").submit();
								}
								
								function sumbmit_boosted_ad_id(){
								document.getElementById("s_t_boosted_ad").submit();
								}
								
								function sumbmit_free_ad_id(){
								document.getElementById("s_t_free_ad").submit();
								}
								
								</script>
								
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>
</html>