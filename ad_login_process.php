<?php
include'connect.php';
session_start();

 $email_v = $_POST["email"];
 $password_v = $_POST["password"];
$remember_v = $_POST["remember"];

$sql = "SELECT profile_id,name,email,phone_num,sex,password,school,birth_day,register_date,profile_pic_name FROM profiles3 WHERE email='$email_v'AND password='$password_v'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
   
		$_SESSION["name_s"] = $row["name"];
$_SESSION["phone_no_s"] = $row["phone_num"];
$_SESSION["email_s"] = $row["email"];
$_SESSION["sex_s"] = $row["sex"];
$_SESSION["school_s"] = $row["school"];
$_SESSION["pic_name_s"] = $row["profile_pic_name"];
$_SESSION["login_status"] = "1";
		
    }
	header('location:postAd.php');
} else {
    echo "0 results";
}


?>