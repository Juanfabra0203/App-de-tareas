<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/">
  <title>Lista De Tareas</title>
</head>

<body>

  <div class="container text-center mt-4">
    <h1>Lista De Tareas</h1>
  </div>

  <div class="container w-50 mt-5">

    <?php
    require("includes/config.php");

    $resultado = mysqli_query($conexion, "SELECT * FROM `tareas`;");

    if (!$resultado) {
      ?>
      <div class="alert alert-danger " role="alert">
        ERROR: Ingrese una tarea
      </div>
      <?php


    }

    ?>

    <table class="table" style="white-space: nowrap; overflow-x: auto;">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Tarea</th>
          <th scope="col">Fecha</th>
          <th scope="col">Accion</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
          while ($row = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<th>" . $row["id"] . "</th>";
            echo "<td>" . $row["tarea"] . "</td>";
            echo "<td>" . $row["fecha"] . "</td>";
            echo "<td>";
            ?>
            <a href="editar.php?id=<?=$row['id']?>">
              <button class='btn btn-primary'>Editar</button>
            </a>

            <a href="eliminar.php?id=<?= $row['id']?>">
              <button class='btn btn-danger'>Eliminar</button>
            </a>
            <?php
            "</td>";
            echo "</tr>";
          }

          ?>

        </tr>
        <tr>

        </tr>
      </tbody>
    </table>

    <a class="btn btn-primary" href="index.php" role="button">Regresar</a>


  </div>
  <?php



  ?>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>