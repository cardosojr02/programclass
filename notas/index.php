<?php

//TRABAJO ELECTIVA I - PROGRAMACIÓN//

//asignacion de variables//
$nombre_estudiante= $_POST['nombre_estudiante'];
$nota1_estudiante= $_POST['nota1_estudiante'];
$nota2_estudiante= $_POST['nota2_estudiante'];
$nota3_estudiante= $_POST['nota3_estudiante'];
$nota4_estudiante= $_POST['nota4_estudiante'];
$suma_final= $nota1_estudiante + $nota2_estudiante + $nota3_estudiante + $nota4_estudiante;
$nota_final= $suma_final / 4;   

echo "<center>";

echo "<h1>PROMEDIO DE NOTAS 20221-1</h1>" ;

if ($nota_final<3.0)
    {
    echo "<h2>El promedio de $nombre_estudiante fue: $nota_final</h2>";
    echo "<h2>Lo sentimos. El estudiante reprueba la materia</h2>";
    }else
        {
            echo "<h2>El promedio de $nombre_estudiante fue: $nota_final</h2>";
            echo "<h2>¡Felicidades! El estudiante aprueba la materia</h2>";
        }
       

echo "</center>"
?>