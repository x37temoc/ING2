<?php
	session_start();
	include("header.php");
	if(!isset($_SESSION['user'])) header("Location: index.php");
?>
    <body id="bod_log">
       <div class="container-fluid">
			<nav class="navbar navbar-inverse" role="navigation" id="barra">
				<div class="navbar-header">
					<img class="img-circle" align="left" src="../img/foto.jpg" alt="Unison">
					<p class="navbar-brand">
						Universidad de Sonora<br>
						Licenciatura en Ciencias de la Computacion
					</p>
				</div>
				<div>
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="#">Materias</a></li>
						<li><a href="#">Solicitar</a></li>
						<li><a href="#">Contactar</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							   <?php
									echo $_SESSION['user'];
								?>
								 <b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
							   <li><a href="salir.php">Cerrar sesion</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<h2 align="center">Materias disponibles</h2>
			<div class="table-responsive">
                <table class="table table-hover">
                <thead>
                   <tr>
                        <th>Materia</th>
                        <th>Profesor</th>
                        <th>Horario</th>
                        <th>Descripcion</th>
                    </tr>
                    <?php
                        $con = mysqli_connect("localhost","root","","lcc");
	                   // Check connection
                        if (mysqli_connect_errno()) {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }
                        $sql = mysqli_query($con,"SELECT * FROM clase");
                        if ($sql){
                            while($row = mysqli_fetch_array($sql)){
                                echo "<tr>";
                                echo "<td>".$row['nombre']."</td>";
                                echo "<td>".$row['instructor']."</td>";
                                echo "<td>".$row['horario']."</td>";
                                echo "<td>".$row['descripcion']."</td>";
                                echo "</tr>";
                            }
                        }
                    ?>
                </thead>
                   
            </table>    
            </div>
        </div>
    </body>
</html>