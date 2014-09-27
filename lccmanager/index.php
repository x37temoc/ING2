<?php include("header.php"); ?>
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
                    <li class="active"><a href="#">Materias</a></li>
                    <li><a href="#">Solicitar</a></li>
                    <li><a href="#">Contactar</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Invitado <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                           <li><a href="#">Cerrar sesion</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
            <div class="col-md-12">
                <form role="form" align="center" id="form-inicio" method="POST" action="acceso.php">
                    <legend>Iniciar Sesion</legend>
                    <div class="form-group" align="center">
                        <label>Matricula</label>
                        <input name="usuario" type="text" class="form-control" id="input-mat">
                    </div>
                    <div class="form-group" align="center">
                        <label>Password</label>
                        <input type="password" class="form-control" id="input-pass" name="passwordInput">
                        <p class="help-block"><a href="#">Olvide mi contrasena</a></p>
                                    <p class="help-block"><a href="form_registro.php" >Registrarme</a></p>
                    </div>
                    <button class="btn btn-primary">Entrar</button>
                </form>   
            </div>
           
        </div> 
    </body>

</html>