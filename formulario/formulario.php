<!DOCTYPE html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		
		<title>Misión</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		

			<div class="container">
				<form action="" method="post" autocomplete="off">
					<fieldset>
						<legend>Datos</legend>
						<div class="form-group">
							<label for="nombre">Ingresa tu nombre completo:</label>
							<input  class="form-control" type="text" id="nombre" name="nombre" size="40" placeholder="Escribe tu nombre completo" 	   autofocus>
						</div>

						<div class="form-group">
							<label for="domicilio">Ingresa tu domicilio completo:</label>
							<textarea class="form-control" name="domicilio" id="domicilio"  placeholder="Escribe tu domicilio" ></textarea>

						</div>
						<div class="form-group">
							<label for="email">Ingresa tu correo:</label>
							<input class="form-control" type="@mail" id="email" name="email" size="40" 	
						placeholder="Escribe tu correo completo" >
						</div>

						<div class="form-group">
							<label for="edad">Ingresa tu edad:</label>
							<input class="form-control" type="number" id="edad" name="edad" min="1" max="100" placeholder="Escribe tu edad" >
						</div>

												<div class="form-grouo">
							<label for="sexo">Sexo: </label>
								<select name="sexo" id="sexo">
									<option value="masculino">Masculino</option>
									<option value="femenino">Femenino</option>
								</select>
							
						</div>

						
						
						<div class="form-group">
							<label>Teléfono:</label>
						<input class="form-control" type="tel" name="telefono" placeholder="ingresa tu numero" >
						</div>

						<div class="form-grouo">
							<label for="estatus">Estado civil: </label>
								<select name="estatus" id="estatus">
									<option value="soltero">Soltero</option>
									<option value="casado">Casado</option>
									<option value="divorciado">Divorciado</option>
								</select>
							
						</div>
						<div class="form-group">
							<label for="comentarios">Comentarios:</label>
		
							<textarea class="form-control" name="comentarios" id="comentarios" rows="5 " placeholder="Escribe tu comentario"></textarea>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-success" name="enviar">Enviar</button>
							<button type="reset" class="btn btn-danger">Borrar</button>
						</div>
					</fieldset>
				</form>
			</div>
			<br><br>
			<?php 
				include("registrar.php");
			 ?>






		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>