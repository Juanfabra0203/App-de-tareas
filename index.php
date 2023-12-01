<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Insertar Nuevas tareas</title>
</head>

<body>
    <div class="container text-center mt-4">
        <h1>Gestor de Tareas</h1>
    </div>
    <div class="container mt-5 w-25 rounded" style=" background-color:rgba(84, 84, 84, 0.441);">
    
        <div class="mb-3">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label mt-4 mb-3 h5 text-center">Agrega una Tarea</label>
                    <textarea class="form-control" placeholder="Ingrese una tarea" name="tarea" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <button type="submit" name="agregar" class="btn btn-primary mt-3 mb-3">Agregar tarea</button>
                
                <a class="btn btn-success" href="listar_Tareas.php" role="button">Lista de Tareas</a>


            </form>

            
        </div>

        
        <?php

        if (isset($_POST["agregar"])) {
            $tarea = $_POST["tarea"];
            if (!empty($tarea)) {

                require "includes/config.php";

                $query = $conexion->query("INSERT INTO tareas (tarea) VALUES ('$tarea')");
                

                if ($query) {
                    header("Location:listar_Tareas.php");
                    ?>
                    <div class="alert alert-success " role="alert">
                        Exito!! Tarea Agregada
                    </div>
                    <?php
                    

                }


            } else {
                ?>

                <div class="alert alert-danger " role="alert">
                    ERROR: Ingrese una tarea
                </div>

                <?php




            }

        }


        ?>

    </div>





</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>