<html>
  <script>
        console.log("fuck");
        alert("Materia agregada");
      
   </script>
   </html>
<?php
	session_start();
    include("header.php");
	if(!isset($_SESSION['user'])) header("Location: nuevo.php");
	// Create connection
	$con = mysqli_connect("localhost","root","","lcc");
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$nombre = $_POST['inp-materia'];
	$ins = $_POST['inp-ins'];
	$horario = $_POST['inp-hor'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO clase (`nombre`, `instructor`, `horario`, `descripcion`)
    VALUES ('$nombre', '$ins', '$horario', '$desc')";
    if ( !mysqli_query($con, $sql) ){
        die('Error: ' . mysqli_error($con));
    }else{

//    header("Location: admin.php");
    }
?>
