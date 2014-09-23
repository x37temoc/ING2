    <?php
        session_start();
        include("header.php");
        if(!isset($_SESSION['user'])) header("Location: nuevo.php");
    ?>
    <body>
       <img src="abstract-wallpaper-gradient-blue-wallpapers.jpg" alt="lcc" id="img_admin">
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
                        <li class="active"><a href="#">Agregar materia</a></li>
                        <li><a href="gestion.php">Gestion materias</a></li>
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
            <form id="form_materia" action="materia.php" class="form-horizontal" role="form" align="center" method="POST">
                <legend>Agregar materia</legend>
                <div class="form-group" align="center">
                    <label style="color: white;">Nombre</label>
                    <input name="inp-materia" type="text" class="form-control" id="inp-materia">
                </div>
                <div class="form-group" align="center">
                    <label style="color: white;">Instructor</label>
                    <input class="form-control" id="inp-ins" name="inp-ins">
                </div>
                <div class="form-group" align="center">
                    <label style="color: white;">Horario</label>
                    <input class="form-control" id="inp-hor" name="inp-hor">
                    <p class="help-block">Ej: lun-mar-mier-jue-vie 8:00am-9:00am</p>
                </div>
                <div class="form-group" align="center">
                    <label style="color: white;">Descripcion / Comentario</label>
                    <input name="desc" class="form-control" id="id_desc" name="desc"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Agregar</button>
            </form>
        </div>

    </body>
</html>