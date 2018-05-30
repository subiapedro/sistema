<?php  
include 'conn/conn.php';
include 'funciones.php';
$conectar = mysql_connect($dbhost,$dbuser,$dbpass) ; 
mysql_select_db($db) ;

 $apellido=$_POST['apellidot'];
 $domicilio=$_POST['domiciliot'];
 $dni=$_POST['dnit'];
 $cel=$_POST['celt'];
 $tel=$_POST['telt'];
 $nombre=$_POST['namet'];
 $vinculot=$_POST['sel3'];
 $localidadt=$_POST['localidadt'];
 $empresa= $_POST['sel4'];
 $mail=$_POST['mailt'];

/*$fec_in=$_POST['bday'];
$nac=$_POST['nac'];
$sexo=$_POST['sel4'];
$edad=$_POST['edad'];
*/





$sql= "select * from  tutores where nro_doc = '".$_POST['dnit']."'" ;
$resultado = mysql_query($sql,$conectar);
if (!$resultado) {    die('Consulta no válida: ' . mysql_error());}
if (mysql_num_rows($resultado)==0) 
{
  //$id_tutor=get_tutor_id($tutor);
 // $sql="INSERT INTO Alumnos (id_tutor ,fec_ingreso,apellidos,nombres,nro_doc,fec_nac,sexo,domicilio,localidad,telefono,celular,empresacelular,email,estado)VALUES ($id_tutor, '$fec_in','$apellido','$nombre','$dni','$nac','$sexo','$domicilio','$localidad','$tel','$cel','$empresa','$mail',1);";
  $sql="insert into  tutores (apellidos,nombres,nro_doc, vinculo       ,domicilio,localidad,telefono,celular,empresacelular,email,estado) values 
						('$apellido','$nombre',$dni,'$vinculot','$domicilio','$localidadt','$tel','$cel','$empresa','$mail',1)";
  if (mysql_query($sql,$conectar)) {
 
  header('Location: alumno.php');
    
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