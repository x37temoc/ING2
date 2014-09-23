<?php
// Create connection
$con = mysqli_connect("localhost","root","","lcc");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
    echo "Conexion exitosa !<br>";
}

$mat = $_POST['inp-mat'];
$pass = base64_encode($_POST['inp-pass']);
$correo = $_POST['email'];

$consulta = mysqli_query($con, "INSERT INTO usuarios (matricula, pass, email)
VALUES ('$mat', '$pass', '$correo')");
if ($consulta){
    echo "Registro exitoso";
}
?>