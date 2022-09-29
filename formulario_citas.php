<?php
require_once("seguridad.php");
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
    <title>Registrar cita</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="/lista">Citas generales</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="/carreras">Carreras</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/alumnos">Alumnos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/registro_persona">Registrar alumno</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Citas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/lista_medico">Citas medico</a></li>
            <li><a class="dropdown-item" href="/lista_psicologo">Citas psicologo</a></li>
            <li><a class="dropdown-item" href="/lista_citas_tutorias">Citas tutorias</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <a href="cerrar_sesion.php" id="logout" class="form-control me-2 btn-outline-danger">Cerrar Sesión</a>
      </form>
    </div>
  </div>
</nav><br><br>
    <div class="cuadro" align="center">
        <form action="" align="center" method="post">
            <h2>Registrar cita</h2>
            <div class="container">
                <div class="form-info">
                    <div class="info" id="form-cita">
                            <input type="hidden" name="fkalumno" value="{{$persona->id}}">
                            <input type="text" placeholder="Alumno" name="nombre_alumno" value="{{$persona->nombre_p}} {{$persona->a_paterno}} {{$persona->a_materno}}" readonly="disable"><br><br>
                            <input type="text" placeholder="Tipo de cita" name="tipo_cita"><br><br>
                            <input type="date" placeholder="Fecha" name="fecha"><br><br>
                            <input type="time" palceholder="Hora" name="hora"><br><br>
                            @php
                            use App\Models\Encargada;
                            $encargada=Encargada::select("encargada.id", "nombre", "a_paterno", "a_materno")->join("persona", "persona.id", "=", "encargada.fkpersona")->get();
                            @endphp
                            <select name="fkencargada" id="" class="form-select" aria-label="Default select example" style="height: 40px">
                                <option value="">Selecionar encargado</option>
                                @foreach($encargada as $fila)
                                <option value="{{$fila->id}}">{{$fila->nombre}} {{$fila->a_paterno}} {{$fila->a_materno}}</option>
                                @endforeach
                            </select><br><br>
                            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                        <!-- <input type="submit" value="Registrar" class="btn btn-primary btn-block"> -->
                    </div>
                </div>
            </div>
        </form><br>
        <a href="{{ URL::previous() }}"><button class="btn btn-primary btn-block">Regresar</button></a>
    </div>
</body>
</html>