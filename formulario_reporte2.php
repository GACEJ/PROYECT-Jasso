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
    <title>Registro de reporte</title>
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
    <div class="cuadro" align="center">
        <form action="{{route('alumno.insertarReporte', $alumnos)}}" align="center" method="post">
            @csrf
            <h2>Añadir reporte</h2>
            @php
            use App\Models\Persona;
            $persona=Persona::select("persona.id","alumno.id","persona.nombre as nombre_p", "persona.a_paterno", "persona.a_materno")->join("alumno", "alumno.fkpersona", "=", "persona.id")->where("alumno.id", $alumnos->id)->first();
            @endphp
            <div class="container">
                <div class="info" id="form-cita">
                    <input type="hidden" name="fkalumno" value="{{$persona->id}}">
                    <input type="text" placeholder="Alumno" name="nombre_alumno" value="{{$persona->nombre_p}} {{$persona->a_paterno}} {{$persona->a_materno}}" readonly="disable"><br><br>
                    <textarea cols="39" rows="10" palceholder="Asunto" name="asunto"></textarea><br><br>
                    <button type="submit" class="btn btn-primary btn-block">Añadir</button>
                </div>
            </div>
        </form><br>
        <a href="{{ URL::previous() }}"><button class="btn btn-primary btn-block">Regresar</button></a>
    </div>
</body>
</html>