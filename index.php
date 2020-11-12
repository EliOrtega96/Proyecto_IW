    <?php
require_once('app_top.php');
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset = "UTF-8"> 
        <title> CHISMES </title>
        <link rel="stylesheet" href="css/Framework/Semantic/semantic.min.css">
           <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
    	<?php require "view/main_view.php"; ?>
    	<?php
    		if(!isset($_GET['section']) ){ //revisar si no hay ninguna vista seleccionada (registras, etc) mostrar las publicaciones
    			require 'invitado.php';
    		}
    	?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src = "css/Framework/Semantic/semantic.min.js"></script>
    </body>
</html>