<!DOCTYPE html> <!-- HTML 5-->
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- FOR MOBILE DEVICES VIEW -->
        <title>Hello, World!</title>
        <!-- Latest compiled and minified CSS -->
        <link href="bootstrap-3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="main.css" rel="stylesheet">
    </head>
    
    <body>
        
        <div class="panel panel-default">
            <div class="panel-heading text-center"> 
                <img class ="img-circle"src="http://localhost/hello/foto.jpg" alt="Unison">
                <h4>Portal de materias optativas LCC</h3>
                <h4>Universidad de Sonora</h4>
            </div>
        </div>
        
        <div class="container">
            <div class="thumbnail">
               
                <form align="center" class="form-horizontal" action="acceso.php" method="post">
                    <fieldset>
                    <!-- Form Name -->
    
                    <legend>Inicia Sesion</legend>
                    <!-- Text input-->
                    <div class="control-group">
                          <label class="control-label" for="Usuario">Usuario</label>
                          <div class="controls">
                            <input id="Usuario" name="Usuario" type="text" class="input-xlarge">
                          </div>
                    </div>

                    <!-- Password input-->
                    <div class="control-group">
                          <label class="control-label" for="passwordinput">Contrasena</label>
                          <div class="controls">
                            <input id="passwordinput" name="passwordinput" type="password" class="input-xlarge">
                            <p class="help-block"><a href="#">Olvide mi contrasena</a></p>
                            <p class="help-block"><a href="#">Registrarme</a></p>
                          </div>
                    </div>
                    <!-- Button -->
                    <div class="control-group">
                          <label class="control-label" for="singlebutton"></label>
                          <div class="controls">
                            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Entrar</button>
                          </div>
                    </div>

                    </fieldset>
                </form>
                                
             </div>
        </div>
    
    </body>
    
</html>