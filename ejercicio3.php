<?php
/*
Genere el código en php para imprimir toda la matriz, entregue un archivo con el nombre “pregunta12.php”

<?php

$MatrizNumerica = array(
    array(1, 2, 3, 4, 5),
    array(1, 2, 3, 4, 5),
    array(1, 2, 3, 4, 5),
    array(1, 2, 3, 4, 5)
);
La función debe imprimir lo siguiente:
Total: 4
Total sub array: 5
12345
12345
12345
12345
*/
$MatrizNumerica = array(
    array(1, 2, 3, 4, 5),
    array(1, 2, 3, 4, 5),
    array(1, 2, 3, 4, 5),
    array(1, 2, 3, 4, 5)
);

$total = count($MatrizNumerica);

echo 'Total: '.$total;
echo '<hr>';

$cadena='';
for ($i=0; $i < $total; $i++) { 
    echo 'campo '.$i.' sub array: '.count($MatrizNumerica[$i]);
    echo '<br>';
    $cadena .= implode("", $MatrizNumerica[$i]).'<br>';
}

echo '<hr>';
echo $cadena;