<?php include("header.php"); ?>
	
    <body id="fondo">
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
                           Invitado <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                           <li><a href="#">Cerrar sesion</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
       <div class="row">
           <div class="col-md-12">
               
                   <form action="registro.php" method="POST" align="center">
                        <div class="form-group">
                            <br>
                            <label for="inputEmail">Email</label>
                            <input id="email" type="email" class="input-medium" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Contraseña</label>
                            <input type="password" id="inp-reg-pass" class="input-medium" name="inp-pass" placeholder="Contraseña">
                        </div>
                        <div class="form-group">
                            <label for="inp-mat">Matricula</label>
                            <input type="text" id="inp-reg-mat" name="inp-mat" class="input-medium" placeholder="Matricula">
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="singlebutton"></label>
                            <div class="controls">
                                <button id="singlebutton-reg" name="singlebutton" class="btn btn-primary">Registrarme</button>
                            </div>
                        </div>
                    </form>                         
               </div>
           </div>
       </div>
   </body>
</html>