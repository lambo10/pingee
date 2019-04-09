<?php

include'connect.php';
    $name_v = $_POST["full_name"];
	$phone_no_v = $_POST["phone_no"];
  $email_v = $_POST["email_id"];
 $sex_v = $_POST["sex"];
  $password_v = $_POST["password"];
  $school_v = $_POST["school"];


$handle2 = "SELECT email  FROM profiles3 ";
$result2 = $conn->query($handle2);
$exisit=0;
if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
	 $big4 = $row["email"];
	 
    if($email_v==$big4){
	$exisit = $exisit+1;
	}
	}
} else {
    echo "0 results";
}

if($exisit==0){

$sql = "INSERT INTO profiles3 (name, email, phone_num, sex, password, school)
VALUES ('$name_v', '$email_v', '$phone_no_v', '$sex_v', '$password_v', '$school_v')";

if ($conn->query($sql) === TRUE) {
    session_start();
$_SESSION["name_s"] = $name_v;
$_SESSION["phone_no_s"] = $phone_no_v;
$_SESSION["email_s"] = $email_v;
$_SESSION["sex_s"] = $sex_v;
$_SESSION["school_s"] = $school_v;
$_SESSION["login_status"] = "1";


$cookie_name = "email";
$cookie_value = $email_v;
setcookie($cookie_name, $cookie_value, time() + (86400 * 90), "/");

$cookie_name2 = "pass";
$cookie_value2 = $password_v;
setcookie($cookie_name2, $cookie_value2, time() + (86400 * 90), "/");


	header('location:postAd.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}else{
header("location: ad_sign_up2.php");
}
?>