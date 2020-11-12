  
<?php
require_once('database.php');
require_once('registrosUsuarios.php');
session_start();

if(!isset($_SESSION['rol'])){
    header('location: login.php');
}else{
    if($_SESSION['rol'] > 2){
        header('location: login.php');
    }
}
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
       <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="admin.php">Registrar tema</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="mostrarUsuarios.php">Mostrar/Elimar usuarios</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="verRegistros.php">Temas Registrados</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="salir.php">Salir</a>
    </li>
    
  </ul>
</nav>
        <h1 style="text-align:center">Tablero</h1>

    <div class="container">
    <h2 style="text-align:center">Usuarios registrados</h2>




        <div class="row">
        <table style="width: 100%;"> <!-- tabla de usuarios registrados -->
            <thead>
                <tr>
                    <td>id</td>
                    <td>Usuario</td>
                    <td>Rol</td>
                    <td>Editar</td>
                    <td>Eliminar</td>
                </tr>
            </thead>
        <?php 
        echo "<tr>";
               while (  $row = $query->fetch(PDO::FETCH_ASSOC) ) {
                echo "<td>".$row["id"]."</td>";;
                 echo "<td>".$row["username"]."</td>";;
                 echo "<td>".$row["rol"]."</td>";;
                 echo "<td> <br> <a href='modificarUsuario.php?id=$row[id]'><button type='button' class='btn btn-success'><i class='far fa-edit'></i></button></td></br>"; //boton editar, al dar clic manda al archivo editar.php mandando el id del registro que se va editar                            
                echo "<td> <br><a href=\"eliminarUsuarios.php?id=$row[id]\" onClick=\"return confirm('Seguro que deseas eliminarlo?')\"><button type='button' class='btn btn-danger'><i class='far fa-trash-alt'></i></button></a></td></br>";		
                echo "</tr>";
            }
            
            ?>
            </table>
        </div>
    </div>
    </body>
</html>