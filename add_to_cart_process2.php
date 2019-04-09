<?php
include'connect.php';
session_start();
$product_gghhgf= $_SESSION["latest_item_id"];


$EMAIL = $_SESSION["email_s"];


$SCHOOL = $_SESSION["latest_item_school"];

$EM = $_SESSION["latest_item_name"];

$EM2 = $_SESSION["latest_item_title"];
$EM3 = $_SESSION["latest_item_description"];
$EM4 = $_SESSION["latest_item_price"];
$EM5 = $_SESSION["latest_item_pic"];


if(empty($EMAIL)){

header('location:login4.php');
}else{

$sql = "INSERT INTO cart7 (school, sex, email, product_id,em ,em2 ,em3 ,em4,em5)
VALUES ('$SCHOOL', '$SEX', '$EMAIL', '$product_gghhgf', '$EM', '$EM2', '$EM3', '$EM4', '$EM5')";

if ($conn->query($sql) === TRUE) {
    header('location:cart.php');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
?>