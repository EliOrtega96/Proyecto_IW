<?php require_once('mostrar_categorias.php'); ?>

<form  method="post" action="enviar_publicacion.php" enctype="multipart/form-data" id ="new_post_container" class="ui form new_post_container"> <!--mul para poder mandar imagenes -->
	<h1>Nueva Publicaci&oacute;n</h1>
	<p><b>Nombre de la publicaci&oacute;n</b></p>
	<div class="ui input">
		<input type="text" class="txtNamePost" name = "txtNamePost" placeholder="Nombre de la publicaci&oacute;n">
	</div>

	<p><b>Categoria</b></p>
		<div class="field">
		    <select class="txtCategoryPost" name = "txtCategoryPost">
		      	<option> -- SELECCIONAR CATEGORIA -- </option>
					<?php
					    while($row = $query->fetch(PDO::FETCH_ASSOC)){
							#echo "<option>$row[0]</option>";
							echo "<option>".$row["titulo"]."</option>";;
						}
					?>
		    </select>
	  	</div>

	 <!-- seleccionar una imagen -->
	<p><b>Seleccione una imagen</b></p>
	<div class="ui input">
		<input type="file" class="image_file" name=image_file>
	</div>

	 <!-- escribir la noticia -->
	<p><b>Publicaci&oacute;n</b></p>
	<textarea name="txtDescription" id="txtDescription"></textarea>

	<button class="ui blue basic button">Enviar Publicaci&oacute;n</button>
	<p class="clerfix"></p>

</form>