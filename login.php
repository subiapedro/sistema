<!DOCTYPE html>

<html lang="en">
<head>
  <title>UTN - FRT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body style="background-color: black;
    background: url('http://1.bp.blogspot.com/-On36XHpCilg/Uca4b1koHhI/AAAAAAAAAX8/3Cwyu8ycf5I/s1600/apple_desk-wallpaper-1920x1080.jpg') no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
" >
 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">Integra Plus 1.0</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <div class="jumbotron" <!--style="background-image: url(https://scontent-eze1-1.xx.fbcdn.net/t31.0-8/12615712_10207363800046594_1355195949236971502_o.jpg); background-size: 100%;"-->
    <h1>Integra Plus 1.0</h1>
    <p>ADMINISTRACION DE PLATAFORMA VIRTUAL PARA NIVEL EDUCATIVO </p>
  </div> 
  <div class="row">
  <div class="col-sm-3"> </div>
  <div class="col-sm-6">
					<div class="well well-lg"> 
						<form class="form-horizontal" role="form" action="login2.php" method="post">
						<div class="form-group">
						<label class="control-label col-sm-2" for="usr">Usuario:</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" id="usr"  name="usr" placeholder="ingresar usuario">
						</div>
						</div>
						<div class="form-group">
						<label class="control-label col-sm-2" for="pwd">Password:</label>
						<div class="col-sm-10"> 
						<input type="password"  class="form-control " id="pwd" name="pwd" placeholder="Ingresar password">
						</div>
						</div>
						<div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-10">
						<div class="checkbox">
						<label><input type="checkbox"> Recordar</label>
						
                        <?php
                        if (isset($_GET['msg'])) {
                                           echo "<div class='alert alert-danger'> <strong>Error!</strong> Usuario no encontrado. </div> 
						</div>";
                        } ?>
						
						</div>
						</div>
						<div class="form-group"> 
						<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Enviar</button>
						</div>
						</div>
						</form>
					</div>
	</div>
  <div class="col-sm-3"> </div>
</div>


  




</div>
</body>
</html>