<?php

function combo($strsql) {  
                    include 'conn/conn.php';
             		//$conectar = mysql_connect($dbhost,$dbuser,$dbpass) ; 
					//mysql_select_db($db) ;
					echo "<select class='form-control'name='sel1' id='sel1' required>";
					$resultado = mysqli_query( $conectar, $strsql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
						   while($row= mysqli_fetch_array($resultado)) 
							{
							  echo "  <option value='".$row[1]."'>".$row[0]."</option>";
							 }
		   				 
					echo "</select>";}
					
					
function get_tutor_id($str){
include 'conn/conn.php';
$sql="select id_tutor from tutores where nro_doc=".$str;
$resultado = mysqli_query( $conectar, $sql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
$row= mysqli_fetch_array($resultado);
return $row[0];
}	
				
?>



 
