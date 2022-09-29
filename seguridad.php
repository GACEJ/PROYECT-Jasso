<?php 

session_start();

if (!isset($_SESSION["usuario"])) {
    header("location: inicio_sesion.php");
}
 ?>