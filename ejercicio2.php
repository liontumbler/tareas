<?php
/*
Escriba el código necesario para inicializar el siguiente arreglo de datos: entregue un archivo “pregunta7.php” QUE AL EJECUTARLO MUESTRE LA SIGUIENTE IMPRESIÓN 

$arreglo = Array
(
	[1] => '001'
	[2] => '002'
	...
	[100] => '100'
)
*/
$array = array();
for ($i=1; $i < 101; $i++) { 

    if($i > 9 && $i <= 99)
        $array[$i] = '0'.$i;
    elseif($i > 99)
        $array[$i] = $i;
    else
        $array[$i] = '00'.$i;
    
}

print_r($array);