
<!DOCTYPE HTML>
<html>
<head>
<title>pingee.com</title>
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




<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- start slider -->
<script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<!--end slider -->
				<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo").flexisel({
					visibleItems: 5,
					animationSpeed: 1000,
					autoPlay: false,
					autoPlaySpeed: 3000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
			    	responsiveBreakpoints: { 
			    		portrait: { 
			    			changePoint:480,
			    			visibleItems: 1
			    		}, 
			    		landscape: { 
			    			changePoint:640,
			    			visibleItems: 2
			    		},
			    		tablet: { 
			    			changePoint:768,
			    			visibleItems: 3
			    		}
			    	}
			    });
			    
			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
        <style type="text/css">
<!--
.style1 {
	font-size: 12px;
	font-weight: bold;
}
.style2 {font-family: Calibri, Arial}
-->
        </style>
</head>
<body>
<!--start-home-->
<div class="top_bg" id="home">
	<div class="container">
	<?php
		include'header.php';
		?>
</div>

</div><div class="wrap">
		<br><br>
		<div class=" text-center">
		  <?php 
		  
		  $category_value = "Games";

$sql = "SELECT id, fullname, email, phone_no, sex, school, category, title, product_name, description, price, pic1, pic2, pic3, pic4, add_active, add_remaining_1, add_remaining_2, add_remaining_3, boosted_add, top_add, add_reg_date FROM ad_003 WHERE category = '$category_value' AND top_add='10' ORDER BY id  DESC";
$result = $conn->query($sql);

include "top_ad_central_while_neuron_all.php";

$sql = "SELECT id, fullname, email, phone_no, sex, school, category, title, product_name, description, price, pic1, pic2, pic3, pic4, add_active, add_remaining_1, add_remaining_2, add_remaining_3, boosted_add, top_add, add_reg_date FROM ad_003 WHERE category = '$category_value' AND boosted_add='10' ORDER BY id  DESC";
$result = $conn->query($sql);

include "boosted_ad_central_while_neuron_all.php";

$sql = "SELECT id, fullname, email, phone_no, sex, school, category, title, product_name, description, price, pic1, pic2, pic3, pic4, add_active, add_remaining_1, add_remaining_2, add_remaining_3, boosted_add, top_add, add_reg_date FROM ad_003 WHERE category = '$category_value' AND boosted_add='0' AND top_add='0' ORDER BY id  DESC";
$result = $conn->query($sql);

include "normal_ad_central_while_neuron_all.php";


?>
			
			
			
			
			
		
		
		
		
			
			
			
			
			
					
			
			
			<div class="clearfix"></div>
		</div>
	
	
	
	
	
	
       <!--//latest-->
		 		  <br>
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


</body>
</html>