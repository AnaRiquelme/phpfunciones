<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
*/
header('Content-Type: text/html; charset=UTF-8');

//Ejercicio 1

function mi_funcion()
{
    echo "Mi función ha sido invocada";
    return;
}
mi_funcion();

//La función ejecuta el echo pero no devuelve nada. En el caso de que eliminemos 
//return no pasa nada porque se sigue ejecutando el echo.

//Ejercicio 2

echo "Paso de Parámetros1:";
function create_table($data)
{
echo "<table border = 1>";
reset($data);
$value = current($data);
while ($value){
echo "<tr><td>$value</td></tr>\n";
$value = next($data);
}
echo "</table>";
}
$mi_array = array ("Linea uno","Linea dos","Linea tres");
create_table($mi_array);
echo"<br>";echo"<br>";

//El reset() vuelve al principio de la array
//current() devuelve el actual elemento en el que está situado el array
//next() se mueve al siguiente elemento de la array
//Ejemplo:

$frutas = array("manzanas", "peras", "naranjas", "cerezas");

echo current($frutas) . "<br>";
echo next($frutas) . "<br>";

echo reset($frutas);

//En el paso de parámetros por se hace una copia del original y se trabaja con esa copia.

//Ejercicio 3

//Los parámetros por referencia se guardan en la memoria por eso si cambias la variable cambia completamente.
//Sin embargo por valor se hace una copia del original y se trabaja con la copia, por tanto la variable original permanece igual.

//Ejercico 4

function factorial($num){
 $strResultado = "Obtener Factorial(".$num.")=".$num;
 $resultado = $num;
 for ($i=$num-1;$i>0;$i--){
  $strResultado .= "*".$i;
  $resultado *= $i;
 }
 $strResultado .= "=".$resultado;
 return $strResultado;
}

//Ejercicio 5

//func_num_args() Recoge los argumentos totales sin tener que especificar que tenga x argumentos
//func_get_arg() coge los argumentos de 1 en 1

?>