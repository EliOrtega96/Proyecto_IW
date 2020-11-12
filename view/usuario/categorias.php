<?php require_once('../../registros.php'); ?>

<div id ="new_post_container" class="ui form new_post_container"> <!--mul para poder mandar imagenes -->
	<h1>Categorias</h1>
		<!--<p><b>Nombre de la categoria</b></p>
	<div class="ui input">
		<input type="text" class="txtNameCategory" placeholder="Nombre de la categoria">
	</div>

	<button class="ui blue basic button">Guardar categoria;n</button>
	<p class="clerfix"></p>
	-->
	<h3>Temas Existentes</h3>
	   <div class="container">
       <div class="row">
            <table style="width: 100%;"> <!-- tabla de usuarios registrados -->
                <thead>
                    <tr>
                        <td>Titulo</td>
                        <td>Descripcion</td>
                    </tr>
                </thead>

            <?php 
            echo "<tr>";   
                while (  $row = $query->fetch(PDO::FETCH_ASSOC) ) {
                    echo "<td>".$row["titulo"]."</td>";;
                    echo "<td>".$row["descripcion"]."</td>";;    
                    echo "</tr>";
                }         
            ?>
            </table>
        </div>
    </div>
</div>