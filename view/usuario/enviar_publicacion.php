<?php
    require_once('../../database.php');

    if(!empty($_POST)) {  //valida que el formulario tenga datos

        $titulo = $_POST['txtNamePost']; // obtiene dato ingresado en el campo usuario del formulario  registrar.php
        $cont = $_POST['txtDescription'];  // obtiene dato ingresado en el campo correo del formulario  registrar.php
        $categoria = $_POST['txtCategoryPost'];
        
        session_start();
        $autor = $_SESSION['usuario'];
        echo "autor : $autor";

        $db = new Database();
        $query = $db->connect()->prepare("SELECT * FROM temas WHERE titulo = '$categoria'");

        //$resultado = $db -> query($query);
        //$tema = $query->fetch();
        //$id_tema = $tema['id_tema'];
        $query->execute();

        $row = $query->fetch(PDO::FETCH_ASSOC);
        $id_tema = $row["id_tema"];
        if($row == true)
            echo "ID : $id_tema ";
        echo "contenido : $categoria";
        //$query->execute();


        //$temasC = $db->connect()->prepare('SELECT * FROM temas WHERE titulo = :categoria');
        //$temasC -> bindParam(':categoria',$titulo,PDO::PARAM_STR);
        //$id_tema = $temasC['id_tema'];
        //echo "contenido : $id_tema";
        //echo "contenido : $categoria";
  
        
        //fecha
        date_default_timezone_set('America/Mexico_City');
        $fecha = date('Y-m-d H:i:s');

        $sql = "INSERT INTO `noticias`(`titulo`, `autor`, `detalle`, `fecha`,`estado`,`id_tema`) VALUES ('$titulo','$autor','$cont','$fecha','0','$id_tema')";  //query para registrar 
        $db->connect()->exec($sql); 

        header('Location: posts.php');  // despues de registrar redirecciona a index.php
      
    }
?>
