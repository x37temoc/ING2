<html>
  <script>
        alert("Registro de usuario exitoso");
        location.href = "index.php";
   </script>
</html>
<?php
// Create connection
$con = mysqli_connect("localhost","root","","lcc");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$mat = $_POST['inp-mat'];
$pass = base64_encode($_POST['inp-pass']);
$correo = $_POST['email'];

$consulta = mysqli_query($con, "INSERT INTO usuarios (matricula, pass, email)
VALUES ('$mat', '$pass', '$correo')");
if (!mysqli_query($con,$consulta)){
    die('Error: '. mysqli_error($con));
}
?>