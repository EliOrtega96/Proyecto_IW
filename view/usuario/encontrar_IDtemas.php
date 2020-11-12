<?php
    require_once('../../database.php'); //incluye en archivo conexion DB

    $db = new Database();
    $query = $db->connect()->prepare('SELECT * FROM temas WHERE titulo = :categoria');
    $query->execute();
  
?>