<?php

//TRABAJO ELECTIVA I - PROGRAMACIÓN//

//asignacion de variables//
$nombre_estudiante= $_POST['nombre_estudiante'];
$edad_estudiante= $_POST['edad_estudiante'];
$nota_estudiante= $_POST['nota_estudiante'];
$ubicacion_estudiante= $_POST['ubicacion_estudiante'];
$nivel_educacion= $_POST['nivel_educacion'];
$motivo_beca= $_POST['motivo_beca'];
$nivel_socioeconomico= $_POST['nivel_socioeconomico'];

echo "<center>";
echo "<h1>Datos del estudiante: $nombre_estudiante</h1>" ;

echo "El nombre del estudiante es:  $nombre_estudiante". "<br/>";
echo "La nota del estudiante es: $nota_estudiante ". "<br/>" ;
echo "La edad del estudiante es: $edad_estudiante años". "<br/>" ;
echo "El nivel educativo del estudiante es: $nivel_educacion". "<br/>" ;
echo "¿El estudiante esta matriculado?: $ubicacion_estudiante está matriculado". "<br/>";
echo "El motivo por el cual se le debería otorgar la beca al estudiante es: $motivo_beca". "<br/>";
echo "El nivel socioeconomico del estudiante es: $nivel_socioeconomico ". "<br/>" ;

echo "</center>"
?>