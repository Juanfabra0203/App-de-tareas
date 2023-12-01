
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Editar Tareas</title>
</head>

<body>

    <?php

        $id_tarea = $_GET['id'];

        include('includes/config.php');

        $consulta = $conexion->query("SELECT * FROM tareas WHERE id ='$id_tarea'");
        $row= $consulta->fetch_assoc();
        

    ?>

    <div class="container text-center mt-4">
        <h1>Editar Tareas </h1>
    </div>
    <div class="container mt-5 w-25 rounded" style=" background-color:rgba(84, 84, 84, 0.441);">
    
        <div class="mb-3">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label mt-4 mb-3 h5 text-center"> !! Modifica esta tarea !! </label>
                    <textarea  class="form-control" 
                    placeholder="Modifica una tarea" 
                    name="tarea" id="exampleFormControlTextarea1"
                     rows="3"><?= $row['tarea']?></textarea>

                </div>

                <button type="submit" name="editar" class="btn btn-success mt-3 mb-3">Editar </button>

                <a href="./lista_Tareas.php">
                    <button type="submit" class="btn btn-primary mt-3 mb-3">Regresar</button> 
                </a>

                <?php
                    if(isset($_POST["editar"])) {

                        $tarea = $_POST["tarea"];
                        
                        if (!empty($tarea)) {

                            require "includes/config.php";

                            $query = $conexion->query("UPDATE tareas SET tarea = '$tarea' WHERE id = '$id_tarea'");
                            

                            if ($query) {
                                header("Location:listar_Tareas.php");
                                ?>
                                
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



            </form>

            
        </div>

        
        

    </div>





</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>