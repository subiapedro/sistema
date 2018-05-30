<?php  
include 'conn/conn.php';
include 'funciones.php';
 ?>
   
 <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#materia">Materias</a></li>
  <!--  <li><a data-toggle="tab" href="#titulo">Titulo</a></li>-->

  </ul>

  <div class="tab-content">
    <div id="materia" class="tab-pane fade in active">
    <form  role="form" action="insert_nueva_materia.php" method="post">
     <div id="materia" class="tab-pane fade in active">
     <div class="row">
     <div class="col-sm-6">
     <label for="name">Nueva Materia: </label>
     <input  type="text" class="form-control" id="materia" name="materia" required> 
     <p>    <input type="submit"> </p>
     </div>
     </div>
     </div>
   </form>
   </div>
	  
 


 
  
  
  

 
 

 
   
 
 
 
  