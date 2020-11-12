  
<?php
require_once('database.php');
//require_once('registros.php');
session_start();
if(!isset($_SESSION['rol'])){
  header('location: login.php');
}else{
  if($_SESSION['rol'] != 1){
      header('location: login.php');
  }
}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8 /> 
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title> Registro </title>
    </head>
    <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="admin.php">Registrar tema</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="mostrarUsuarios.php">Modificar/Eliminar Usuarios</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="verRegistros.php">Temas registrados</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="salir.php">Salir</a>
    </li>
    
  </ul>
</nav>
<h1>Administrador</h1>
<div class="container">
  <h2 style="text-align:center">Registrar Tema</h2>
  <div class="row">     
    <form method="post" action="registrarTema.php"> 
      <div class="form-group">
        <label for="exampleInputEmail1">Titulo del tema</label>
        <input type="text" required class="form-control" id="exampleInputEmail1" name="titulo" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Descripcion del tema</label>
        <textarea name="descripcion" requided id="" cols="30" rows="10"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>     
</div>
    </body>
</html>
