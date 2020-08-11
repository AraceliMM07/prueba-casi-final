<?php 
	include("con_bd.php");
	
	if (isset($_POST['enviar'])) {
		if(strlen($_POST['nombre']) >=1 && 
			strlen($_POST['domicilio']) >=1 &&
			strlen($_POST['email']) >=1 &&
			strlen($_POST['edad']) >=1 &&
			strlen($_POST['sexo']) >=1 &&
			strlen($_POST['telefono']) >=1 &&
			strlen($_POST['estatus']) >=1 &&
			strlen($_POST['comentarios']) >=1){
				$nombre=trim($_POST['nombre']);
				$domicilio=trim($_POST['domicilio']);
				$email=trim($_POST['email']);
				$edad=trim($_POST['edad']);
				$sexo=trim($_POST['sexo']);
				$telefono=trim($_POST['telefono']);
				$estatus=trim($_POST['estatus']);
				$comentarios=trim($_POST['comentarios']);
				$fechareg= date("y/m/d");

		$consulta = "INSERT INTO datosr(nombre, domicilio, email, edad, sexo, telefono, estatus, comentarios, fecha_reg) VALUES ('$nombre' ,'$domicilio','$email' , '$edad' , '$sexo' , '$telefono' , '$estatus' , '$comentarios' , '$fechareg')";
		$resultado=mysqli_query($conex,$consulta);
			}
		}
	
 ?>