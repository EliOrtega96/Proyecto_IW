<?php
    include_once 'database.php';

    session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset();

        session_destroy();
    }

    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: admin.php');
            break;

            case 2:
            header('location: moderador.php');
            break;

            case 3:
                //header('location: usuario.php');
                header('location: usuario/index.php');
            break;

            case 4:
                //header('location: invitado.php');
                header('location: index.php');
            break;

            default:
        }
    }

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT * FROM usuar WHERE username = :username AND password = :password');
        $query->execute(['username' => $username, 'password' => $password]);

        $row = $query->fetch(PDO::FETCH_NUM);
        if($row == true){
            // validar rol
            $rol = $row[3];
            $userActivo = $row[1];
            $_SESSION['rol'] = $rol;
            $_SESSION['usuario'] = $userActivo;
            switch($_SESSION['rol']){
                case 1:
                    header('location: admin.php');
                break;
    
                case 2: 
                header('location: moderador.php');
                break;
    
                case 3:
                    //header('location: usuario.php');
                    header('location: usuario/index.php');
                break;
    
                case 4:
                    //header('location: invitado.php');
                    header('location: index.php');
                break;
    
                default:
            }
        }else{
            // no existe el usuario
            echo "El usuario o contraseña son incorrectos";
        }

    }
    

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8 /> 
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title> Registro </title>
    </head>
    <body>
        <h1>Iniciar sesión</h1>
        <form action="#" method="POST">
            <input name="username" type="email" placeholder="correo electrónico">
            <input name="password" type="password" placeholder="Contraseña">
            <input type="submit" value="Iniciar Sesión">
        </form>
        <form action="invitado.php" method="POST">
            <input type="submit" value="Invitado">
        </form>
    </body>
</html>