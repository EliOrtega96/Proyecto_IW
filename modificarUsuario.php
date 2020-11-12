<?php
            require_once('database.php');
            $db = new Database();
            $id = $_GET['id']; //obtiene el id del registro que se va editar 
            $query = $db->connect()->prepare("SELECT * FROM usuar inner join roles on usuar.id = roles.id where usuar.id ='$id'"); //query para obtener los datos del registro a editar
            $query->execute(); //ejecuta query
            while($res = $query->fetch()) {  //obtiene datos del registro a editar		
                $usuario = $res['username']; // se asigna a la variable $usuario el dato del campo usuario de la tabla usuarios
                $contrasena = $res['password']; // se asigna a la variable $correo el dato del campo correo de la tabla usuarios  
                $rol = $res ['rol_id'];
                $rol_des = $res ['rol'];
            
            } 
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Editar</title>
            <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        </head>
        <body>

            <section id='background-catalogo'></section>
            <div class="container">
                <div class="spacing25"></div>
                <h1 class="Lobster text-center">Modificar datos</h1><hr>
                <div class="spacing25"></div>
                <form action="editarUsuarios.php" method="post" enctype="multipart/form-data"> <!-- envia los datos a editar.php -->
                <input style="display: none"  type="text" value="<?php echo $id;?>" name="id">
                <div class="row">
                    <div class="col m4">
                        <label class="Lobster" for="nombre">Usuario: </label>
                        <input style="width: 100%" type="text" value="<?php echo $usuario;?>" name="username">
                    </div>
                    <div class="col m4">
                        <label class="Lobster" for="nombre">Contraseña: </label>
                        <input style="width: 100%" type="text" value="<?php echo $contrasena;?>" name="password">
                    </div>
                    <div class="col m4">
                    <label class="Lobster" for="nombre">Rol: </label>
                        <input hidden style="width: 100%" type="text" value="<?php echo $rol;?>" name="rol_id">
                </div><br>
                <div class="col m4">
                    <label class="Lobster" for="nombre">Rol descripcion: </label>
                        <input style="width: 100%" type="text" value="<?php echo $rol_des;?>" name="rol">
                </div><br>
                <button class="img-center" type="submit" onClick="return confirm('se han modificado los datos')">Guardar</button>
               
                
                </form>
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        </body>
        </html>