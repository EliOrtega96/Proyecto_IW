<!--<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8 /> 
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title> Registro </title>
    </head>
    <body>
        <h1>Invitado</h1>
    </body>
</html>
-->
<div class="background_main">
	<div class="overlay"></div>
	<h1 class="main_title"> CHISMES</h1>
</div>
<div class="ui grid stackable container" style= "margin-top: 25px"> <!--bootstrap, quiere decir que es un contenedor encima de otro
AQUI SE MOSTRARAN LAS PUBLICACIONES-->
	<div class="sixteen wide column">
		<h2 style="text-align: center;">Puclicaciones recientes</h2>
	</div>
	<!--
	<a href="#" class="four wide colum">
		<div class="post_container">
			<img src="https://via.placeholder.com/150x120" class="post_img" alt="Imagen Prueba">
			<h2 class="post_title">Name</h2>
			<p class="post_date">20-06-20</p>
		</div>
	</a>-->
	<?php
    require_once('database.php'); //incluye en archivo conexion DB

    $db = new Database();
    $query = $db->connect()->prepare('SELECT * FROM noticias where estado=1');
    $query->execute();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8 /> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <title> Registro </title>
    </head>
    <body>
        <div class="row">
        <table style="width: 100%;"> <!-- tabla de usuarios registrados -->
            <thead>
                <tr>
                    <td>Titulo</td>
                    <td>Autor</td>
                    <td>detalles</td>   
                    <td>fecha</td>
                    <td>hora</td>
                </tr>
            </thead>
        <?php 
        echo "<tr>";
               while (  $row = $query->fetch(PDO::FETCH_ASSOC) ) {
                 echo "<td>".$row["titulo"]."</td>";;
                 echo "<td>".$row["autor"]."</td>";;
                 echo "<td>".$row["detalle"]."</td>";; 
                 echo "<td>".$row["fecha"]."</td>";;  
                 echo "<td>".$row["hora"]."</td>";;                              		
                echo "</tr>";
            }
            
            ?>
            </table>
        </div>
    </div>
    </body>
</html>


</div>

