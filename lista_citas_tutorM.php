<?php
require_once("seguridad.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="../estilo.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="../bootstrap.css">
    <script type="text/javascript" src="bootstrap.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas tutrados</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            
        </li>
      </ul>
      <form class="d-flex">
        <a href="{{route('usuario.logout')}}" id="logout" class="form-control me-2 btn-outline-danger">Cerrar Sesión</a>
      </form>
    </div>
  </div>
</nav><br><br>
    <div align="center">
        <h2>Citas de tutorados</h2>
        <table align="center">
            <thead>
                <tr>
                    <th>Alumno</th>
                    <th>Tipo</th>
                    <th>Fecha</th>
                    <th>Horario</th>
                </tr>
            </thead>
            @foreach($citas as $fila)
            <tbody>
                <tr>
                    <td>{{$fila->nombre_p}} {{$fila->a_paterno_p}} {{$fila->a_materno_p}}</td>
                    <td>{{$fila->tipo_cita}}</td>
                    <td>{{$fila->fecha}}</td>
                    <td>{{$fila->hora}}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</body>
</html>