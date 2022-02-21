<?php
$myArray = array(3,5,4,4,1,2,3,4,5);

$array = array(1,2,3,4,5);
$arrayH = array(0,0,0,0,0);
for ($i = 0; $i < count($myArray); $i++) {

    for ($a = 0; $a < count($array); $a++) {
    
        if($array[$a]==$myArray[$i]){
            $arrayH[$a]++;
        }
    } 

}

for ($i = 0; $i < count($array); $i++) {
    echo $array[$i].": ";
    for ($a = 0; $a < $arrayH[$i]; $a++) {
        
        echo "*";
    } 
    echo "\n";
}

/**
 * 1: **
 * 2: *
 * 3: 
 * 4: *****
 * 5: *
 * 
 */

?>