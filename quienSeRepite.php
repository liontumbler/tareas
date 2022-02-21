<?php
$myArray = array(3,5,4,4,1,2,3,8,9,7,6);

$array = array(1,2,3,4,5,6,7,8,9);
$arrayH = array(0,0,0,0,0,0,0,0,0);
for ($i = 0; $i < count($myArray); $i++) {

    for ($a = 0; $a < count($array); $a++) {
    
        if($array[$a]==$myArray[$i]){
            $arrayH[$a]++;
        }
    } 

}

$max = 0;
$pos = 0;
for ($i = 0; $i < count($array); $i++) {
    if($arrayH[$i] > $max){
        $max = $array[$i];
        $pos = $arrayH[$i];
    }
}

echo "Longest: ".$pos;
echo "\n";
echo "Number: ".$max;

/**
 * Longest: 2
 * Number: 4
 * 
 */
?>