<?php 
	include 'conexion.php';

	if (isset($_POST['btnLogin'])) {


	$nombre = mysqli_real_escape_string($connect,$_POST['name']);
	$urlimagen = mysqli_real_escape_string($connect,$_POST['urlimagen']);
	$correo = mysqli_real_escape_string($connect,$_POST['email']);
	$token = mysqli_real_escape_string($connect,$_POST['token']);

	$query = "SELECT * FROM usuarios_demo6 WHERE correo = '".$correo."' AND token = '".$token."';";
	$result = mysqli_query($connect,$query);

	if ($result) {
		$var = mysqli_num_rows($result);
		if ($var > 0) {
			echo "modificar estado";
		}else{
			echo "insertar nuevo";
		}
		
	}else {
		echo "error de conexion";
	}

}
?>