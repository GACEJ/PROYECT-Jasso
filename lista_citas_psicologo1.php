<?php
require_once("seguridad.php");
require_once("clases/clases.php");
$cita= new Citas();
$registros=$cita->mostrarP();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas Psicología</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="/lista_psicologo1">Citas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="/carreras2">Carreras</a>
        </li>
      </ul>
      <form class="d-flex">
        <a href="cerrar_sesion.php" id="logout" class="form-control me-2 btn-outline-danger">Cerrar Sesión</a>
      </form>
    </div>
  </div>
</nav><br><br>
    <div align="center">
    <h2>Citas con el psicologo</h2>
    <table align="center">
        <thead>
            <tr>
                <th>Alumno</th>
                <th>Carrera</th>
                <th>Grupo</th>
                <th>Cuatrimestre</th>
                <th>Fecha</th>
                <th>Horario</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while($fila=mysqli_fetch_array($registros)){
             ?>
            <tr>
                <td><?=$fila['nombre']." ".$fila['a_paterno']." ".$fila['a_materno']; ?></td>
                <td><?=$fila['nombre_carrera']; ?></td>
                <td><?=$fila['nombre_grupo']; ?></td>
                <td><?=$fila['grado']." ".$fila['grupo']; ?></td>
                <td><?=$fila['tipo_cita']; ?></td>
                <td><?=$fila['fecha']; ?></td>
                <td><?=$fila['hora']; ?></td>
            </tr>
            <?php  
                }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>