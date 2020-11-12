<?php require_once('../database.php'); 
	session_start();

	if(!isset($_SESSION['rol'])){
	    header('location: ../login.php');
	}else{
	    if($_SESSION['rol'] != 3){
	        header('location: ../login.php');
	    }
	}

?>

<?php  require_once('../view/main_usuar_view.php'); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset = "UTF-8"> 
        <title> CHISMES </title>

        <link rel="stylesheet" href="../css/Framework/Semantic/semantic.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/main.css">
    </head>
    <body>

    	<h1>session iniciada</h1>
    	<?php  
    		if(isset($_SESSION['rol']) && isset($_GET['section']) && $_GET['section'] == "posts"){
    			require_once('../view/usuario/posts.php');
    		}

	        $usuario = $_SESSION['usuario'];
	        echo "usuario : $usuario";
    	?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
        <script src = "../css/Framework/Semantic/semantic.min.js"></script>
    </body>
</html>