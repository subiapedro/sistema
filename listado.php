<?php  
include 'conn/conn.php';
include 'sql.php';
	$resultado = mysqli_query( $conectar, $strsql ) or die ( "Algo ha ido mal en la consulta a la base de datos");
?>
 
   <table class="table  table-responsive  table-striped table-bordered">
	<thead> 
           <tr>
			<?php		   
		    for ($i = 0; $i <mysqli_num_fields($resultado); $i++) {
            echo "<th >";
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
 
 
 
  