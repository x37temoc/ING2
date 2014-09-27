<?php
	session_start();
    include("header.php");
	if(!isset($_SESSION['user'])) header("Location: index.php");
	// Create connection
	$con = mysqli_connect("localhost","root","","lcc");
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$usuario = $_POST['usuario'];
	$pass = base64_encode($_POST['passwordInput']);
	$consulta = mysqli_query($con, "SELECT * FROM usuarios WHERE matricula = '$usuario' AND pass = '$pass'");
	if ($consulta){
		$resultado = mysqli_fetch_array($consulta);
		if ($resultado['matricula'] == $usuario){
			if ($resultado['pass'] == $pass){
				$_SESSION['user'] = $usuario;
				if ($resultado['admin'] == 1){
                    header("Location: admin.php");   
                }else{
                    header("Location: logeado.php");   
                }
			}else{
				echo "Contrasena incorrecta !<br>";    
			}
		}else{
			echo "Usuario inexistente !<br> Tu pass >> ".$pass;
		}
		mysqli_free_result($consulta);
	}
?>