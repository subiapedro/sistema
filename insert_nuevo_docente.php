<?php  
include 'conn/conn.php';
include 'funciones.php';
$conectar = mysql_connect($dbhost,$dbuser,$dbpass) ; 
mysql_select_db($db) ;

 $apellido=$_POST['apellido'];
 $fec_in=$_POST['bday'];
 $dni=$_POST['dni'];
 $nac=$_POST['nac'];
 $domicilio=$_POST['domicilio'];
 $cel=$_POST['cel'];
 $tel=$_POST['tel'];
 $nombre=$_POST['name'];
 $sexo=$_POST['sel2'];
 $edad=$_POST['edad'];
 $empresa= $_POST['sel3'];
 $mail=$_POST['mail'];
 $localidad=$_POST['localidad'];
$titulo=$_POST['titulo'];


$sql= "select * from  docentes where nro_doc = '".$_POST['dni']."'" ;
$resultado = mysql_query($sql,$conectar);
if (!$resultado) {    die('Consulta no válida: ' . mysql_error());}
if (mysql_num_rows($resultado)==0) 
{
  
    $sql="INSERT INTO docentes (fec_ingreso,apellidos,   nombres,  nro_doc,fec_nac,sexo,domicilio,localidad,telefono,celular,empresacelular,email,titulo)VALUES 
                             ( '$fec_in','$apellido','$nombre','$dni', '$nac','$sexo','$domicilio','$localidad','$tel','$cel','$empresa','$mail','$titulo');";
  
  if (mysql_query($sql,$conectar)) {
 
  header('Location: docente.php');
    
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
    <strong>Error!</strong> Ya existe un registro con ese DNI, por favor verificar los datos e  intentar nuevamente.
  </div>
<a href=" alumno.php" class="btn btn-info" role="button">Continuar</a>
</div>
</body>
</html>
<?php } ?>