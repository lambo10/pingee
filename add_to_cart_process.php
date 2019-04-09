<?php
include'connect.php';
session_start();
$product_id_v = $_POST["prod_id_h"];
$EMAIL = $_SESSION["email_s"];
$SCHOOL = $_POST["school_s"];
$SEX = $_POST["sex_s"];
$EM = $_POST["em"];
$EM2 = $_POST["em2"];
$EM3 = $_POST["em3"];
$EM4 = $_POST["em4"];
$EM5 = $_POST["em5"];


if(empty($EMAIL)){

$_SESSION["latest_item_name"] = $EM;
$_SESSION["latest_item_id"] = $product_id_v;
$_SESSION["latest_item_title"] = $EM2;
$_SESSION["latest_item_description"] = $EM3;
$_SESSION["latest_item_price"] = $EM4;
$_SESSION["latest_item_pic"] = $EM5;
$_SESSION["latest_item_school"] = $SCHOOL;

		

header('location:login4.php');
}else{

$sql = "INSERT INTO cart7 (school, sex, email, product_id,em ,em2 ,em3 ,em4,em5)
VALUES ('$SCHOOL', '$SEX', '$EMAIL', '$product_id_v', '$EM', '$EM2', '$EM3', '$EM4', '$EM5')";

if ($conn->query($sql) === TRUE) {
    header('location:cart.php');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
?>