<?php

$host ="localhost";
$user = "root";
$passw = "";
$db = "tareas";


$conexion = mysqli_connect($host,$user,$passw,$db);

if (!$conexion){
    echo"ERROR : No se pudo conectar a la base de datos" + $conexion->error;
}


?>