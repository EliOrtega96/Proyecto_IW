
<?php
//Destruye la sesion 
    session_start();
    session_destroy();
    //header ("location: login.php");
    header ("location: index.php");
?>

