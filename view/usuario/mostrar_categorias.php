<?php
    require_once('../../database.php'); //incluye en archivo conexion DB

    $db = new Database();
    $query = $db->connect()->prepare('SELECT titulo FROM temas');
    $query->execute();

  
?>