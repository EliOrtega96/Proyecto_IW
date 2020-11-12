<?php
    require_once('database.php'); //incluye en archivo conexion DB

    $db = new Database();
    $query = $db->connect()->prepare('SELECT * FROM usuar inner join roles on usuar.id = roles.id');
    $query->execute();

  
?>