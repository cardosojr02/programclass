<?php

/*//TIPOS DE DATOS Y VARIABLES//

variable = a //almacenar un valor que puede cambiar//

nombre;

numeros enteros (int) 1 2 3
numeros decimales (float) 1.0 2.5 3.0
numeros decimales_grandes (double) 1.5555555555555
cadena de_caracteres (string) hola bebé!
unico caracter (char) a - 1 
variables logicas (boolean) true or false*/

//asignacion de variables//
$nombre_estudiante= $_POST['nombre_estudiante'];
$edad_estudiante= $_POST['edad_estudiante'];
$nota_estudiante= $_POST['nota_estudiante'];
$ubicacion_estudiante= $_POST['ubicacion_estudiante'];

echo "<center>";
echo "<h1>Hola Mundo</h1>";

echo $nombre_estudiante. "<br/>";
echo $nota_estudiante. "<br/>";
echo $edad_estudiante. "<br/>";
echo $ubicacion_estudiante. "<br/>";

echo "</center>"
?>
