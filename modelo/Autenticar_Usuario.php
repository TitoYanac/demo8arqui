<?php 
	include 'conexion.php';

	if (isset($_POST['btnLogin'])) {


	$nombre = mysqli_real_escape_string($connect,$_POST['name']);
	$urlimagen = mysqli_real_escape_string($connect,$_POST['urlimagen']);
	$correo = mysqli_real_escape_string($connect,$_POST['email']);
	$token = mysqli_real_escape_string($connect,$_POST['token']);
	$estado = mysqli_real_escape_string($connect,$_POST['estado']);

	$query = "SELECT * FROM usuarios_demo6 WHERE correo = '".$correo."' AND token = '".$token."';";
	$result = mysqli_query($connect,$query);

	if ($result) {
		$var = mysqli_num_rows($result);
		if ($var > 0) {
			$query1 = "SET estado='".$estado."' WHERE correo = '".$correo."' AND token = '".$token."';";
			echo "modificar estado";
		}else{
			$query2 = "INSERT INTO usuarios_demo6 (nombre,urlimagen,correo,token) VALUES ('".$nombre."','".$urlimagen."','".$correo."','".$token."')";
			echo "insertar nuevo";
		}
		
	}else {
		echo "error de conexion";
	}

}
?>