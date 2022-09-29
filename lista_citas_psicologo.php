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
    <a class="navbar-brand" href="lista_citas.php">Citas generales</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="lista_carrera.php">Carreras</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="lista_alumno.php">Alumnos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="formulario_alumno.php">Registrar alumno</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Citas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="lista_citas_medico.php">Citas medico</a></li>
            <li><a class="dropdown-item" href="lista_citas_psicologophp">Citas psicologo</a></li>
            <li><a class="dropdown-item" href="lista_tutor.php">Citas tutorias</a></li>
          </ul>
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