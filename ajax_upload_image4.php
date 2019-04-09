<?php
require"connect.php";
session_start();
$uploadImg='';
if(isset($_FILES["file"]["name"])){

 $uploadImg= $_FILES["file"]["name"];
$uploadImgTmp= $_FILES["file"]["tmp_name"];
$AdIdGGT = $_SESSION["workingADid"];
 $location = $AdIdGGT."/";


 $fileData = pathinfo(basename($uploadImg));
	   $uploadImgC=str_replace(".","-",$uploadImg);
	   $fileName = $uploadImgC."-".uniqid() . '.' . $fileData['extension'];
	   $target_path = ($location.$fileName);
	   
	 while(file_exists($target_path)){
	     $fileName = $uploadImgC."-".uniqid() . '.' . $fileData['extension'];
		$target_path = ($location.$fileName);	 
	 } 

	 $sql = "UPDATE ad_003 SET pic4='$fileName' WHERE id='$AdIdGGT'";

if (mysqli_query($conn, $sql)) {

   move_uploaded_file($uploadImgTmp,$target_path);

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

	 echo $fileName;

}
?>