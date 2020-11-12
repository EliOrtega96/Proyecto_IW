<?php
	require_once('Functions.php');
	$user = new User_Actions(); //se podran acceder con este objeto a las funciones

	if (isset($_SESSION['rol']) && isset($_GET['section']) && $_GET['section'] == "posts") {
		//Obtiene las categorias de la BD
		$categories = $rol->getCategories();
	}

	if (isset($_SESSION['rol']) && isset($_GET['section']) && $_GET['section'] == "categories") {
		//Obtiene las categorias de la BD
		$categories = $rol->getCategories();
	}
?>