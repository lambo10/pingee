<?php 
$NAME = $_POST['data'];
$count = 0;
$allValue = [];
$brokenWord = "";
$countArrayPlaceMent = 0;
while ($count < strlen($NAME)) {
	if ($NAME[$count] == ","){
		$allValue[$countArrayPlaceMent] = $brokenWord;
		$countArrayPlaceMent++;
		$brokenWord = "";
	}else{
		if ($NAME[$count] == "[") {
			
		}else{
			if ($NAME[$count] == '"') {
			
			}else{
$brokenWord = $brokenWord.$NAME[$count];
			}
		}

	}
	$count++;

}

$bb = 0;
while ($bb < 3) {
echo $allValue[$bb]."|";
$bb++;
}


?>