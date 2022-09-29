<?php 
class Usuario{
	function __construct(){
		require_once("conexion.php");
		$this->conexion= new Conexion();
	}
	function buscar($usuario, $pass){
		$consulta="SELECT * FROM usuario WHERE usuario='{$usuario}' AND pass='{$pass}'";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
}
class Citas{
	function __construct(){
		require_once("conexion.php");
		$this->conexion= new Conexion();
	}
	function mostrar(){
		$consulta="SELECT nombre, a_paterno, a_materno, nombre_carrera, nombre_grupo, grado, grupo, tipo_cita, hora, fecha FROM alumno a INNER JOIN citas c ON a.id=c.fkalumno INNER JOIN persona p ON p.id=a.fkpersona INNER JOIN grupo g ON g.id=a.fkgrupo INNER JOIN carrera ca ON ca.id=g.fkcarrera WHERE estatus=1 ORDER BY fecha, hora ASC";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function mostrarM(){
		$consulta="SELECT nombre, a_paterno, a_materno, nombre_carrera, nombre_grupo, grado, grupo, tipo_cita, hora, fecha FROM alumno a INNER JOIN citas c ON a.id=c.fkalumno INNER JOIN persona p ON p.id=a.fkpersona INNER JOIN grupo g ON g.id=a.fkgrupo INNER JOIN carrera ca ON ca.id=g.fkcarrera WHERE estatus=1 AND tipo_cita='Medico' ORDER BY fecha, hora ASC";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function mostrarP(){
		$consulta="SELECT nombre, a_paterno, a_materno, nombre_carrera, nombre_grupo, grado, grupo, tipo_cita, hora, fecha FROM alumno a INNER JOIN citas c ON a.id=c.fkalumno INNER JOIN persona p ON p.id=a.fkpersona INNER JOIN grupo g ON g.id=a.fkgrupo INNER JOIN carrera ca ON ca.id=g.fkcarrera WHERE estatus=1 AND tipo_cita='Psicologo' ORDER BY fecha, hora ASC";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function mostrarT(){
		$consulta="SELECT nombre, a_paterno, a_materno, nombre_carrera, nombre_grupo, grado, grupo, tipo_cita, hora, fecha FROM alumno a INNER JOIN citas c ON a.id=c.fkalumno INNER JOIN persona p ON p.id=a.fkpersona INNER JOIN grupo g ON g.id=a.fkgrupo INNER JOIN carrera ca ON ca.id=g.fkcarrera WHERE estatus=1 AND tipo_cita='Tutorias' ORDER BY fecha, hora ASC";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
}
class Carrera{
	function __construct(){
		require_once("conexion.php");
		$this->conexion= new Conexion();
	}
	function mostrar(){
		$consulta="SELECT * FROM carrera ORDER BY nombre_carrera ASC";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
}
class Grupo{
	function __construct(){
		require_once("conexion.php");
		$this->conexion= new Conexion();
	}
	function mostrar(){
		$consulta="SELECT * FROM grupo ORDER BY grado ASC";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
 }
 class Alumno{
 	function __construct(){
		require_once("conexion.php");
		$this->conexion= new Conexion();
	}
	function insertar($nombre, $a_paterno, $a_materno, $edad, $genero, $grupo){
		$consulta="INSERT INTO persona(id, nombre, a_paterno, a_materno, edad, genero) VALUES (NULL, {'$nombre'}, {'$a_paterno'}, {'$a_materno'}, {'$edad'}, {'$genero'})";
	}
	function mostrar(){
		$consulta="SELECT a.id, nombre, a_paterno, a_materno, nombre_carrera, nombre_grupo, grupo, grado, nombre_tutor FROM persona p INNER JOIN alumno a ON p.id=a.fkpersona INNER JOIN grupo g ON g.id=a.fkgrupo INNER JOIN tutor t ON t.fkgrupo=g.id INNER JOIN carrera c on c.id=g.fkcarrera ORDER BY a_paterno ASC";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
 }
?>