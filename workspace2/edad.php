<?php

$edad= $_POST['edad'];

echo "<center>";

if ($edad>18)
    {
    echo "mayor de edad";
    }else
        {
        echo "menor de edad";
        }

echo "<br/><br/><a href='edad.html'>Volver al Formulario</a>";
echo "</center>";

?>