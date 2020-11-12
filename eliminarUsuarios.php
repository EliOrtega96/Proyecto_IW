<?php
    require_once('database.php');
    $id = $_GET['id'];  //obtiene el id del elemento que se va a eliminar

  $db = new Database();
    $user = "DELETE FROM usuar WHERE id='$id'";   //query para eliminar el usuario que se va eliminar
    $db->connect()->exec($user); 

    header("Location: mostrarUsuarios.php");  //una vez eliminado redirecciona a index.
?>