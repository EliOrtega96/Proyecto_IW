<?php
    require_once('database.php'); //incluye el archivo de conexion a la base de datos
    if(!empty($_POST)){  //valida que el formulario no se haya enviado vacio.
        $usuario = $_POST['username'];   //obtiene el dato del campo usuario del formulario 
        $password = $_POST['password']; //obtiene el dato del campo correo del formulario  
        $rol = $_POST['rol_id']; //obtiene el dato del campo id del formulario 
        $id = $_POST['id'];
        $rol_des = $_POST['rol'];

  $db = new Database();
  //$query = $db->connect()->prepare("UPDATE tema SET titulo='$titulo', descripcion='$descripcion' WHERE id_tema =$id"); //query para actualizar datos
  $query = "UPDATE `usuar` inner join roles on usuar.id = roles.id SET `username`='$usuario',`password`='$password',`rol_id`='$rol', roles.rol='$rol_des' WHERE usuar.id = '$id'";
  $db->connect()->exec($query); 
    





        header('Location: mostrarUsuarios.php'); //una vez actualizados los datos redirecciona a index.php
    }else {

        echo "aqui";
    }
?>

