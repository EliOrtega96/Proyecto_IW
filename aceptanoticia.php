<?php
    require_once('database.php');
    $id = $_GET['id'];  //obtiene el id del elemento que se va a aceptar

  $db = new Database();
    $user = "UPDATE noticias SET estado = 1 WHERE noticias.id_noticia = $id;";   //query para eliminar el usuario que se va eliminar
    $db->connect()->exec($user); 

    header("Location: moderador.php");  //una vez eliminado redirecciona a index.
?>