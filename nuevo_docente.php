<?php  
include 'conn/conn.php';
include 'funciones.php';
 ?>
   
 <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#docente">Docente</a></li>
  <!--  <li><a data-toggle="tab" href="#titulo">Titulo</a></li>-->

  </ul>

  <div class="tab-content">
    <div id="docente" class="tab-pane fade in active">
    <form  role="form" action="insert_nuevo_docente.php" method="post">
    <div id="alumno" class="tab-pane fade in active">
    <div class="row">
    <div class="col-sm-6">
   <label for="name">Fecha de Ingreso: </label>
   <input type="date" name="bday" class="form-control" required>
   <label for="apellido">Apellido/s:</label>
   <input  type="text" class="form-control" id="apellido"  name="apellido" required>
   <label for="dni">DNI:</label>
   <input  type="number" class="form-control" id="dni"  name="dni" required>
   <label for="nac">Fecha de Nacimiento: </label>
   <input type="date" name="nac"  id="nac"  class="form-control" required>
   <label for="domicilio">Domicilio:</label>
   <input  type="text" class="form-control" id="domicilio"  name="domicilio" >
   <label for="cel">Celular:</label>
   <input  type="number" class="form-control" id="cel" name="cel" required>
   <label for="tel">Telefono:</label>
   <input  type="number" class="form-control" id="tel" name="tel" required>
    <p>
  <input type="submit"></p>
   </div>
     <div class="col-sm-6">

  <label for="name">Nombre/s:</label>
  <input  type="text" class="form-control" id="name" name="name" required> 
  <label for="sel2">Sexo:</label>
  <select class="form-control" name="sel2" id="sel2" required>
    <option value="Masculino">Masculino</option>
    <option value="Femenino">Femenino</option>
  </select>
  <label for="edad">Edad:</label>
  <input  type="number" class="form-control" name="edad" id="edad" required>
  <label for="localidad">Localidad:</label>
  <input  type="text" class="form-control" id="localidad" name="localidad" required>
  <label for="sel2">Empresa:</label>
  <select class="form-control" id="sel3" name="sel3" required>
    <option value="personal">Personal</option>
    <option value="claro">Claro</option>
	</select>
  <label for="mail">e-mail:</label>
  <input  type="email" class="form-control" id="mail" name="mail" required>
     <label for="apellidot">Titulo:</label>
   <input  type="text" class="form-control" id="titulo"  name="titulo" required>
  </div>
  </div>
  </div>
  
  
   </form>
    </div>
	  
	  
    <div id="titulo" class="tab-pane fade">
	<form  role="form" action="insert_nuevo_tutor.php" method="post">
      <div class="row">
   <div class="col-sm-6">

 <p>
  <input type="submit"></p>
   </div>
  
   </div>
   </form>
  </div>



 
  
  
  

 
 

 
   
 
 
 
  