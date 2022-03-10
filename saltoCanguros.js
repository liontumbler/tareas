/**
********* en español *************
Estás coreografiando un espectáculo de circo con varios animales. Para un acto, se le dan dos canguros en una recta numérica listos para saltar en la dirección positiva (es decir, hacia el infinito positivo).
* El primer canguro comienza en la ubicación  X1 y se mueve a una velocidad de V1 metros por salto.
* El segundo canguro comienza en la ubicación X2 y se mueve a una velocidad de V2 metros por salto.

Tienes que encontrar una manera de llevar a ambos canguros al mismo lugar al mismo tiempo como parte del espectáculo. Si es posible, devuelva SÍ, de lo contrario, devuelva NO.
Ejemplo:
X1 = 2
V1 = 1
X2 = 1
V1 = 2

Después de un salto, ambos están en x = 3, (X1 + V1 = 2 + 1, X2 + V2 = 1 + 2), por lo que la respuesta es SÍ.

Función descriptiva
Complete la función canguro en el editor a continuación.
canguro tiene los siguientes parámetros:
* int x1, int v1: posición inicial y distancia de salto para canguro 1
* int x2, int v2: posición inicial y distancia de salto para canguro 2
Devoluciones
* cadena: ya sea SÍ o NO

Formato de entrada
Una sola línea de cuatro números enteros separados por espacios que indican los valores respectivos de X1, V1, X2 y V2.
Restricciones
0 <= X1 < X2 <= 10000
1 <= v1 <= 10000
1 <= v2 <= 10000

Entrada de muestra 0
0342
Salida de muestra 0
SÍ
está claro que los canguros se encuentran en el mismo lugar (número 12 en la recta numérica) después del mismo número de saltos (4 saltos), e imprimimos SÍ.

*/

/*
********* en ingles *************
You are choreographing a circus show with various animals. For one act, you are given two kangaroos on a number line ready to jump in the positive direction (i.e, toward positive infinity).
* The first kangaroo starts at location  X1 and moves at a rate of V1 meters per jump.
* The second kangaroo starts at location X2 and moves at a rate of  V2 meters per jump.

You have to figure out a way to get both kangaroos at the same location at the same time as part of the show. If it is possible, return YES, otherwise return NO.
Example:
X1 = 2
V1 = 1
X2 = 1
V1 = 2

After one jump, they are both at x = 3, (X1 + V1 = 2 + 1, X2 + V2 = 1 + 2) so the answer is YES.

Function Description
Complete the function kangaroo in the editor below.
kangaroo has the following parameter(s):
* int x1, int v1: starting position and jump distance for kangaroo 1
* int x2, int v2: starting position and jump distance for kangaroo 2
Returns
* string: either YES or NO

Input Format
A single line of four space-separated integers denoting the respective values of X1,V1 ,X2 , and V2.
Constraints
	0 <= X1 < X2 <= 10000
	1 <= v1 <= 10000
	1 <= v2 <= 10000

Sample Input 0
	0342
Sample Output 0
	YES
 it is clear that the kangaroos meet at the same location (number  12 on the number line) after same number of jumps (4 jumps), and we print YES.
*/

function kangaroo(x1, v1, x2, v2) {
    
    let posCg1 = x1 + v1, posCg2 = x2 + v2;
    
    let bol = true;
    let intento = 1;
    while(intento <= 10000 && bol){
        if(posCg1 == posCg2)
            bol = false;
        else{
            posCg1 = posCg1 + v1;
            posCg2 = posCg2 + v2;
            intento++; 
        }
    }
    
    //console.log(intento, bol);
    return !bol ? 'YES' : 'NO';
}