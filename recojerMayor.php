<?php
$myArray = array(3,5,4,8,9,10,14,35,60);
$max = 0;
for ($i = 0; $i < count($myArray); $i++) {
    if($myArray[$i] > $max){
		$max = $myArray[$i];
	}
}

echo $max;
?>