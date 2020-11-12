<?php
    require_once('database.php');

    if(!empty($_POST)){  //valida que el formulario tenga datos
        $titulo = $_POST['titulo']; // obtiene dato ingresado en el campo usuario del formulario  registrar.php
        $des = $_POST['descripcion'];  // obtiene dato ingresado en el campo correo del formulario  registrar.php
        
        //$md5 = MD5($pass);  //enctripta con md5 la contraseña del formulario
        $db = new Database();
        $sql = "INSERT INTO `temas`( `titulo`, `descripcion`) VALUES ('$titulo','$des')"   ;  //query para registrar 

        $db->connect()->exec($sql); 

        header('Location: admin.php');  // despues de registrar redirecciona a index.php
      
    }
?>