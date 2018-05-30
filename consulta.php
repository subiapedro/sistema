<?php
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "colegio";
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	// establecer y realizar consulta. guardamos en variable.
	$consulta = "SELECT id_alumno as ID, nombres as Nombre  FROM alumnos";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
?>

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
">
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
 <?php 
 echo  mysqli_num_fields($resultado);
 ?>

 <div class="panel panel-default">
  <div class="panel-body">A Basic Panel</div>

 <div class="table-responsive"> 
   <table class="table table-bordered table-striped">
	<thead> 
           <tr>
			<?php		   
		    for ($i = 0; $i <mysqli_num_fields($resultado); $i++) {
            echo "<th>";
            $info_campo = mysqli_fetch_field_direct($resultado, $i);
            printf(  $info_campo->name);
            echo "</th>";
																	} 
			?>
			<th></th>
           </tr> 
        </thead>
        <tbody>
	<?php
	   while($row= mysqli_fetch_array($resultado)) 
	   {
              echo "<tr>";
			  for ($i = 0; $i <mysqli_num_fields($resultado); $i++) {
											
											  echo "<td>".$row[$i]."</td>";
										   }
			  echo "<td><a href='#'> 
			            <span class='glyphicon glyphicon-pencil'></span>
						</a>
						<a href='#'>
                        <span class='glyphicon glyphicon-trash'></span>
						</a>
					</td>";
	          echo "</tr>";
           }			
        ?>
       </tbody>
   </table>
</div>
</div>

</div>

</body>
</html>