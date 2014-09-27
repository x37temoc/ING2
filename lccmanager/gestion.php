<?php
        session_start();
        include("header.php");
        if(!isset($_SESSION['user'])) header("Location: nuevo.php");
?>
    <body>
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
                        <li><a href="admin.php">Agregar materia</a></li>
                        <li><a href="#">Gestion materias</a></li>
                        <li class="dropdown">
                            <a href="admin.php" class="dropdown-toggle" data-toggle="dropdown">
                                <?php
                                    echo "Administrador >> " .$_SESSION['user'];
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