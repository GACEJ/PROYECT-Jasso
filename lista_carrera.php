<?php
require_once("seguridad.php");
require_once("clases/clases.php");
$carrera= new Carrera();
$grupo= new Grupo();
$registros=$carrera->mostrar();
$registros1=$grupo->mostrar();
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
    <title>Carreras</title>
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
            <li><a class="dropdown-item" href="lista_citas_psicologo.php">Citas psicologo</a></li>
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
        <h2>Carreras</h2>
        <div class="listas">
                    <div class="row mx-auto" style="display: inline-block;">
                        <div class="col-sm-4">
                            <?php 
                                while($fila=mysqli_fetch_array($registros)){
                             ?>
                            <div class="card" style="width: 18rem; height: 325px">
                                <img src="<?=$fila['imagen']?>" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <a href="lista_grupo.php?id=<?=$fila['id']?>"><button class="btn btn-primary btn-block"><?=$fila['nombre_carrera'];?></button></a><br><br>
                                    </div>
                                    <?php 
                                        } 
                                    ?>
                            </div><br>
                        </div>
                    </div>
              <br><br>
        </div>
    </div>
                
                <!-- <img width="300" height="200" src="https://utescuinapa.edu.mx/wp-content/uploads/2021/04/Software.jpg" alt="">
                <img width="800" height="600" src="https://utescuinapa.edu.mx/wp-content/uploads/2021/04/Agricultura.jpg" alt="">
                <img width="800" height="600" src="https://utescuinapa.edu.mx/wp-content/uploads/2021/04/Enfermeria.jpg" alt="">
                <img width="800" height="600" src="https://utescuinapa.edu.mx/wp-content/uploads/2021/04/Gastronomia.jpg" alt="">
                <img width="800" height="600" src="https://utescuinapa.edu.mx/wp-content/uploads/2021/04/Mantenimiento.jpg" alt="">
                <img width="800" height="600" src="https://utescuinapa.edu.mx/wp-content/uploads/2021/04/Mecatronica2.jpg" alt="">
                <img width="800" height="600" src="https://utescuinapa.edu.mx/wp-content/uploads/2021/04/Procesos.jpg" alt="">
                <img width="800" height="600" src="https://utescuinapa.edu.mx/wp-content/uploads/2021/04/Turismo.jpg" alt=""> -->
            
                <!-- <a href="{{route('grupo.mostrarPorCarrera', $fila->id)}}"><button>{{$fila->nombre_carrera}}</button></a><br><br> -->
        
</body>
</html>