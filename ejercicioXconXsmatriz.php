<?php
$n=5;
if($n == 0){
	echo "ERROR";
}else{
	for ($i = 0; $i < $n; $i++) {
		for ($a = 0; $a < $n; $a++) {
			if($a == $i || $a == ($n-($i+1))){
				echo "X";
			}else{
				echo "_";
			}
		} 

		echo "\n";
	}
}
/**
 * EJ: n=5
 * X___X
 * _X_X_
 * __X__
 * _X_X_
 * X___X
 * 
 * 
 * EJ: n=6
 * X____X
 * _X__X_
 * __XX__
 * _X__X_
 * X____X
 */
?>