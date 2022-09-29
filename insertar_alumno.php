<?php 
require_once("clases/clases.php");

$alumno= new Alumno();
$nombre=$_POST["nombre"];
$a_paterno=$_POST["a_paterno"];
$a_materno=$_POST["a_materno"];
$edad=$_POST["edad"];
$genero=$_POST["genero"];
$fkgrupo=$_POST["fkgrupo"];

$resultado=$alumno->insertar($nombre, $a_paterno, $a_paterno, $edad, $genero, $fkgrupo);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div>
		<?php  
if ($resultado) {
?>
		<meta http-equiv='REFRESH' content='0; url=lista_alumno.php'>
		<script type="text/javascript">
			alert("Se registró el alumno con exito!");
		</script>
<?php
}else{
	echo "No se pudo guardar el registro del alumno <b>".$nombre." ".$a_paterno." ".$a_materno."</b>.";
}
		?>
	</div>
</body>
</html>