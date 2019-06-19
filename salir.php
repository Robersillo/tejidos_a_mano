<?php 
session_start();
$login=$_POST['login'];
$clave=$_POST['clave'];
$validado="s";
include('../Pagina_Madrid/conex.php'); 
include('../Pagina_Madrid/funciones.php');

    session_unset();

	session_destroy();
redirect("index.php");
?>
