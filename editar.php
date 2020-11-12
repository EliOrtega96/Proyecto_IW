<?php
    require_once('database.php'); //incluye el archivo de conexion a la base de datos
    if(!empty($_POST)){  //valida que el formulario no se haya enviado vacio.
        $titulo = $_POST['titulo'];   //obtiene el dato del campo usuario del formulario 
        $descripcion = $_POST['descripcion']; //obtiene el dato del campo correo del formulario  
        $id = $_POST['id']; //obtiene el dato del campo id del formulario 

  $db = new Database();
  //$query = $db->connect()->prepare("UPDATE tema SET titulo='$titulo', descripcion='$descripcion' WHERE id_tema =$id"); //query para actualizar datos
  $query = "UPDATE `temas` SET `titulo` = '$titulo', `descripcion` = '$descripcion' WHERE `temas`.`id_tema` = $id";
  $db->connect()->exec($query); 
    
        header('Location: verRegistros.php'); //una vez actualizados los datos redirecciona a index.php
    }else {

        echo "aqui";
    }
?>

