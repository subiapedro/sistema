<?php  
include 'conn/conn.php';
include 'funciones.php';
$conectar = mysql_connect($dbhost,$dbuser,$dbpass) ; 
mysql_select_db($db) ;

 $materia=$_POST['materia'];
 

$sql= "select * from  materias where nombre = '".$_POST['materia']."'" ;
$resultado = mysql_query($sql,$conectar);
if (!$resultado) {    die('Consulta no válida: ' . mysql_error());}
if (mysql_num_rows($resultado)==0) 
{
  
    $sql="INSERT INTO materias  (nombre)VALUES 
                             ( '$materia');";
  
  if (mysql_query($sql,$conectar)) {
 
  header('Location: materias.php');
    
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
    <strong>Error!</strong> Ya existe un registro con ese Nombre, por favor verificar los datos e  intentar nuevamente.
  </div>
<a href="materias.php" class="btn btn-info" role="button">Continuar</a>
</div>
</body>
</html>
<?php } ?>