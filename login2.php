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
<body  >
<?php
 
include 'conn/conn.php';

$conectar = mysql_connect($dbhost,$dbuser,$dbpass) ; 
mysql_select_db($db) ;


$sql= "select * from  usuarios where nombre = '".$_POST['usr']."' and clave= '".$_POST['pwd']."'";
$resultado = mysql_query($sql,$conectar);
if (!$resultado) {    die('Consulta no válida: ' . mysql_error());}
if (mysql_num_rows($resultado)==1) 
{
	session_start(); 
	$_SESSION["usuario"]=$_POST['usr'];
	$_SESSION["pass"]=$_POST['pwd'];
	header('Location: main.php');
}
else 
{
	header('Location: login.php?msg=error');

}
?>
</body>
</html>