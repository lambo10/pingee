
<!DOCTYPE html>
<html lang="en">
<head>
<title>nl_access_db</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="./css3/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="./css3/style.css" type="text/css" rel="stylesheet" media="all">
<link href="./css3/w3.css" type="text/css" rel="stylesheet" media="all">

<link href="css/font-awesome.css" rel="stylesheet">   <!-- font-awesome icons --> 
<style>
.nl_color{
background-color: #d9534f;
}
.nl_header_font{
font-family: 'Bigshot One', cursive;
color:#FFFFFF;
}
.nl_big{
font-size: 36px;

}
.nl_medium{
font-size: 15px;
}
@media (max-width: 1500px) {
.nl_big_s_div{
display: block;
}

.nl_small_s_div{
display: none;
}
}

@media (max-width: 768px) {
.nl_big_s_div{
display:none;
}

.nl_small_s_div{
display: block;
}
}
.style1 {font-family: "Segoe UI", Arial, sans-serif}
</style>
</head>
<body> 
<?php 
include "db_header_2.php";

?>
		<div style="padding:20px;">
		<div class="row" style="padding-bottom:10px;"><div class="col-md-9"></div><div class="col-md-3"><div class="row"><div class="col-md-1"><a href="display_profiles.php"><div class="btn nl_header_font" style="color:#FFFFFF; background:#0066FF;">access db tables</div></a></div><div class="col-md-6"></div><div class="col-md-1"><a href="add_ticket_pin.php"><div class="btn nl_header_font" style="color:#FFFFFF; background:#0066FF;">Main page</div></a></div></div></div></div>

	<div class="grid_3 grid_5 row ">
				<div class="col-md-6">

<div class="row" id="sucessfully_loaded_status_display" style="display: none;">
<br>
<div class="col-md-1"></div>
<div class="col-md-8" style=" padding-right:30px; padding-left:30px;">
<div class="alert alert-success">
<b>Successfully loaded</b>
</div>
</div>
<br>
</div>



<div class="row" id="invalid_pin_status_display" style="display: none;">
<br>
<div class="col-md-1"></div>
<div class="col-md-8" style=" padding-right:30px; padding-left:30px;">
<div class="alert alert-danger">
<b>Invalid Pin</b>
</div>
</div>
<br>
</div>

				<div>
				<form class=""> 
									<div class="form-group w3-agile"><input type="text" id="card_pin" class="form-control" placeholder="card pin"></div> 
									<button type="button" onClick="post_buy_ticket_value()" class="btn btn-default">Add Card</button> 
								</form> </div>
								<br><br>
								<div class="row nl_big_s_div">
								<div class="col-md-5">
								<div style="padding-top:10px;">
								<a href="display_only_unused_pins.php"><div align="center" class="w3-card-16" style="height:120px; color:#FFFFFF; background:#333333;"><div class="nl_header_font">Unused Pins</div><h1><div id="unused_pin_l" style="padding-top:15px;">120</div></h1></div></a></div>
								</div>
								
								<div class="col-md-5">
								<div style="padding-top:10px;">
								<a href="display_only_used_pins.php"><div align="center" class="w3-card-16 " style="height:120px;color:#FFFFFF; background:#333333;"><div class="nl_header_font">Used Pins </div><h1><div id="used_pin_l" style="padding-top:15px;">100</div></h1></div></a></div>
								</div>
								
								</div>
				</div>
				<div class="col-md-6">
					<div style="overflow:auto; height:340px;">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th><span class="style1">Pin</span></th>
								<th><span class="style1">State</span></th>
							</tr>
						</thead>
						<tbody id="nl_table_body">
						</tbody>
					</table>
					</div> <br>
					<div class="row"><div class="col-md-3"><a href="delet_pins.php"><div class="nl_header_font btn w3-black">Delete Pins</div></a></div><div class="col-md-3"><a href="find_pin.php"><div class="nl_header_font btn w3-black">Find Pin</div></a></div></div>                   
				</div>

				</div>
			</div>
			
			<div style="padding:20px;">
			<div class="row nl_small_s_div" style="">
								<div class="col-md-5">
								<div style="padding-top:10px;">
								<a href="display_only_unused_pins.php"><div align="center" class="w3-card-16" style="height:120px; color:#FFFFFF; background:#333333;"><div class="nl_header_font">Used Pins</div><h1><div id="used_pin_t" style="padding-top:15px;">0</div></h1></div></a></div>
								</div>
								
								<div class="col-md-5">
								<div style="padding-top:10px;">
								<a href="display_only_used_pins.php"><div align="center" class="w3-card-16 " style="height:120px;color:#FFFFFF; background:#333333;"><div class="nl_header_font">Unused Pins</div><h1><div id="unused_pin_t" style="padding-top:15px;">0</div></h1></div></a></div>
								</div>
								
								</div>
			</div>
			
			
			<div align="center">
	<div class="copy-right"> 
		<div class="container">
			<p>© 2017 nl access db . All rights reserved | Design by <a href="http://nltech.com"> nltech.</a></p>
		</div> 
	</div> 
	</div>
</body>
<?php

include'connect.php';

$day_ool = date("d");
$month_ool = date("m");


?>

<script src="jquery.min.js"></script>
<script>
$.fn.transportValues = function(pin,month,day) { 
  
$.post("ticket_pin_load.php", {pin_df:pin,
	month_df:month,
	day_df:day,
},function(data,status){
    
if(status =="success"){

	$.fn.g_f_v(); 
	$.fn.get_n_unused_pins();
	$.fn.get_n_used_pins();  
}

});
}

$.fn.g_f_v=function(){
	$.ajax({url: "select_ticket_pin.php", success: function(result){
            $("#nl_table_body").html(result);
        }});
}

$.fn.get_n_unused_pins=function(){
	$.ajax({url: "select_unused_pins.php", success: function(result){
            $("#unused_pin_l").html(result);
            $("#unused_pin_t").html(result);
        }});
}


$.fn.get_n_used_pins=function(){
	$.ajax({url: "select_used_pins.php", success: function(result){
            $("#used_pin_t").html(result);
            $("#used_pin_l").html(result);
        }});
}

$(document).ready(function() {
   $.fn.g_f_v(); 
	$.fn.get_n_unused_pins();
	$.fn.get_n_used_pins(); 
});

$.fn.successfully_l_ani_msg=function(){
    
        $("#sucessfully_loaded_status_display").fadeOut(3000);
   
}

$.fn.invalid_p_ani_msg=function(){
    
        $("#invalid_pin_status_display").fadeOut(3000);
   
}
</script>
<script>


function post_buy_ticket_value() {
    var pin_llk =  document.getElementById("card_pin").value +<?php echo $day_ool; ?>+<?php echo $month_ool; ?>;
    var month_11k = <?php echo $month_ool; ?>;
    var day_11k = <?php echo $day_ool; ?>;

    $.fn.transportValues(pin_llk,month_11k,day_11k); 

}

</script>
</html>