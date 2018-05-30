<?php  
include 'conn/conn.php';
include 'funciones.php';
$conectar = mysql_connect($dbhost,$dbuser,$dbpass) ; 
mysql_select_db($db) ;

 $tipo=$_POST['sel1'];
 //$name=$_POST['name'];
 $dni=$_POST['dni'];
 $usr=$_POST['usr'];
 $pwd=$_POST['pwd'];
 $pwd2=$_POST['pwd2'];
 
$sql= "select * from  usuarios where nro_doc = '".$_POST['dni']."'" ;
$resultado = mysql_query($sql,$conectar);
if (!$resultado) {    die('Consulta no válida: ' . mysql_error());}
if (mysql_num_rows($resultado)==0 and ($pwd==$pwd2) ) 
{
//
 $sql="insert into  usuarios (tipo,nro_doc,nombre,clave) values 
                            ('$tipo',$dni,  '$usr',$pwd)";
  if (mysql_query($sql,$conectar)) {
 
  header('Location: usuario.php');
    
} else {
    echo "Error: " . $sql;
}
 
}
else 
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Error</h2>
  <div class="alert alert-danger">
    <strong>Error!</strong>
	<?php
	if (mysql_num_rows($resultado)<>0 )  {echo "Ya existe un registro con ese DNI, por favor verificar los datos e  intentar nuevamente.";}
	if ($pwd<>$pwd2) {echo "Las contraseñas no son las mismas";}
	?>
	
	
  </div>
<a href=" alumno.php" class="btn btn-info" role="button">Continuar</a>
</div>
</body>
</html>
<?php } ?>