<?php

$id = $_GET['id'];

include("includes/config.php");
include("listar_Tareas.php");

$query = $conexion->query("DELETE FROM tareas WHERE id = '$id' ");

if ($query) {
    header("Location:listar_Tareas.php");
    ?>
    <div class="alert alert-success " role="alert">
        Exito!! Tarea Agregada
    </div>

    <?php

}   


?>