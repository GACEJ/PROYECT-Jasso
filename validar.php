<?php 

$usuario1=$_POST["usuario"];
$pass=$_POST["pass"];
require_once("clases/clases.php");

$usuario= new Usuario();

$resultado=$usuario->buscar($usuario1, $pass);

$validacion=mysqli_num_rows($resultado);

if ($validacion==1){
	session_start();
	$_SESSION['usuario']=$usuario;

	$datos=mysqli_fetch_array($resultado);
	$tipo_usuario=$datos['tipo_usuario'];

if($tipo_usuario=="Administrador"){
	header("location: lista_citas.php");

}else if ($tipo_usuario=="Doctor"){
	header("location: lista_citas_medico1.php");

}else if ($tipo_usuario=="Psicologo") {
	header("location: lista_citas_psicologo1.php");

}else if ($tipo_usuario=="Normal"){
	header("location: lista_carrera3.php");
}

}else if($validacion==0){
	echo "<meta http-equiv='REFRESH' content='0; url=inicio_sesion.php'>
		<script type='text/javascript'>
			alert('Usuario y/o contraseña incorrecta');
		</script>";
}
 ?>