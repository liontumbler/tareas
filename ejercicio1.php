<?php
/*
 * 1.Escriba una función PHP que procese el contenido del archivo y genere una salida en pantalla. El objetivo de este punto es analizar la capacidad de crear un algoritmo. 
    El archivo de texto “entrada.txt” y la fecha de captura se reciben como parámetros de la función y usted debe proveer los dos insumos.
    
    La función debe realizar una salida en pantalla como se ve en ejemplo Array. “USTED debe analizar el archivo de entrada, los registros, y generar un tipo de salida como esta en el ejemplo SALIDA EN PANTALLA”: Entregue un archivo “pregunta1.php” cree el archivo de entrada “entrada.txt” de tal forma que la salida de la función en la pantalla sea como ve en el ejemplo: 
    Tener en cuenta que otra persona puede editar el archivo de entrada y adicionar mas ciudades con mas detalles, y la salida debe generar la misma estructura.

    SALIDA EN PANTALLA:

    Array
    (
        [9] => Hora del día
    (
                [bogota] => 65
                [cali] => 20
            )
        [14] => Hora del día
    (
                [bogota] => 15
                [cali] => 10
                [medellin] => 5

            )
        ...
        [7] => Hora del día
    (
                [ibague] =>3
                [mocoa] => 147
            )
    )
 */

class LeerArchivo
{
    private $fp;
    public $hora;
    public $fecha;

    public function __construct($nombreFile, $fecha){
        $this->fecha = $fecha;
        $this->fp = fopen ($nombreFile, "r");
        $this->hora = date('H:i:s');
    }

    public function ordenarArray()
    {
        $array = array();
        $conta = 0;
        while (($data = fgetcsv($this->fp)) !== FALSE) {

            if($conta > 0){
                if((int)trim($data[2]) > 0)
                    $array[intval(trim($data[1]))]['Hora del día'][trim($data[0])] = trim($data[2]);
                
            }else
                $conta++;
            
        }

        return $array;
    }
}

$archivo = new LeerArchivo("entrada.txt", date('d-m-Y'));

print_r($archivo->ordenarArray());
echo '<br>';
echo $archivo->fecha.'-'.$archivo->hora;