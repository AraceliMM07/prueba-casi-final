<?php 
include("con_bd.php") ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Tabla</title>
  </head>
  <body>
    <div class="mt-4">
    	<table class="table table-bordered table-hover table-responsive-lg">
    		<thead class="thead-dark">
          <tr >
                <th>ID</th>
                <th>NOMBRE</th>
                <th>DOMICILIO</th>
                <th>EMAIL</th>
                <th>EDAD</th>
                <th>SEXO</th>
                <th>TELEFÓNO</th>
                <th>ESTADO CIVIL</th>
                <th>COMENTARIOS</th>
                <th>FECHA DE REGISTRO</th>
            </tr>      
            </thead>
    		<?php 
    		$sql="SELECT * FROM datosr";
    		$result=mysqli_query($conex, $sql);
    		while ($mostrar=mysqli_fetch_array($result)) {
    		 ?>
			<tr>
				<td> <?php echo $mostrar['id']; ?> </td>
				<td> <?php echo $mostrar['nombre']; ?> </td>
				<td> <?php echo $mostrar['domicilio']; ?> </td>
				<td> <?php echo $mostrar['email']; ?> </td>
				<td> <?php echo $mostrar['edad']; ?> </td>
				<td> <?php echo $mostrar['sexo']; ?> </td>
				<td> <?php echo $mostrar['telefono']; ?> </td>
				<td> <?php echo $mostrar['estatus']; ?> </td>
				<td> <?php echo $mostrar['comentarios']; ?> </td>
				<td> <?php echo $mostrar['fecha_reg']; ?> </td>
			</tr>




    		 <?php 
    		    		 }    		 ?>
    	</table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>