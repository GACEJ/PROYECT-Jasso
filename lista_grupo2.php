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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupos</title>
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
        <a href="{{route('usuario.logout')}}" id="logout" class="form-control me-2 btn-outline-danger">Cerrar Sesión</a>
      </form>
    </div>
  </div>
</nav><br><br>
<div align="center">
        <h2>Grupos</h2>
        <div class="listas">
            @foreach($registro as $fila)
                    <div class="row mx-auto" style="display: inline-block;">
                        <div class="col-sm-4">
                            <div class="card" style="width: 18rem; height: 325px">
                                <img src="{{$fila->imagen}}" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <a href="{{route('alumno.mostrarPorGrupo2', $fila->id)}}"><button class="btn btn-primary btn-block">{{$fila->nombre_grupo}} {{$fila->grado}}</button></a><br><br>
                                    </div>
                            </div><br>
                        </div>
                    </div>
        @endforeach
    <br><br>
    </div>
    </div>
</body>
</html>