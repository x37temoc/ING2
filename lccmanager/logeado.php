<?php
	session_start();
	include("header.php");
	if(!isset($_SESSION['user'])) header("Location: nuevo.php");
?>
    <body id="bod_log">
       <div class="container-fluid">
			<nav class="navbar navbar-inverse" role="navigation" id="barra">
				<div class="navbar-header">
					<img class="img-circle" align="left" src="foto.jpg" alt="Unison">
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
			Bienvenido >>
			<?php
				echo $_SESSION['user']."<br>Tus visitas >> ".$_SESSION['views'];
				
			?>
        </div>
    </body>
</html>