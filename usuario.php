<?php
require_once('database.php');
require_once('registros.php');
require_once('app_top.php');

session_start();

if(!isset($_SESSION['rol'])){
    header('location: login.php');
}else{
    if($_SESSION['rol'] != 3){
        header('location: login.php');
    }
}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8 /> 
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title> Registro </title>
    </head>
    <body>
        <h1>Usuario</h1>
    </body>

    <h1 style="text-align:left">CHISMES</h1>

    <div class="container">
    <h2 style="text-align:left;">Temas registrados</h2>
    <div class="container">
       <div class="row">
            <table style="width: 100%;"> <!-- tabla de usuarios registrados -->
                <thead>
                    <tr>
                        <td>Titulo</td>
                        <td>Descripcion</td>
                    </tr>
                </thead>

            <?php 
            echo "<tr>";   
                while (  $row = $query->fetch(PDO::FETCH_ASSOC) ) {
                    echo "<td>".$row["titulo"]."</td>";;
                    echo "<td>".$row["descripcion"]."</td>";;    
                    echo "</tr>";
                }         
            ?>
            </table>
        </div>
    </div>

</html>