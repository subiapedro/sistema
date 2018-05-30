<?php  
include 'conn/conn.php';
include 'funciones.php';
 ?>
   
 
<!--
 <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#alumno">Alumno</a></li>
  <li><a data-toggle="tab" href="#tutor">Tutor</a></li>
  </ul>

<div class="tab-content">
 
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

  
  <label >Tutor:</label>
  <?php  // combo( 'select concat (nro_doc,\' - \',apellidos, \'   \' , nombres),nro_doc from tutores'   );?>
  <label for="name">Nombre/s:</label>
  <input  type="text" class="form-control" id="name" name="name" required> 
  <label for="sel2">Sexo:</label>
  <select class="form-control" name="sel2" id="sel2" required>
    <option value="M">Masculino</option>
    <option value="F">Femenino</option>
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
  </div>
  </div>
  </div>
  
  
  <div id="tutor" class="tab-pane fade">

  
     <div class="row">
   <div class="col-sm-6">
   <label for="apellidot">Apellido/s del tutor:</label>
   <input  type="text" class="form-control" id="apellidot"  name="apellidot" required>
   <label for="dnit">DNI:</label>
   <input  type="number" class="form-control" id="dnit"  name="dnit" required>
   <label for="domiciliot">Domicilio:</label>
   <input  type="text" class="form-control" id="domiciliot"  name="domiciliot" >
   <label for="celt">Celular:</label>
   <input  type="number" class="form-control" id="celt" name="celt" required>
   <label for="telt">Telefono:</label>
   <input  type="number" class="form-control" id="telt" name="telt" required>
   </div>
  
  <div class="col-sm-6">
  <label for="namet">Nombre/s del tutor:</label>
  <input  type="text" class="form-control" id="namet" name="namet" required> 
  <label for="sel3">vinculo:</label>
  <select class="form-control" name="sel3" id="sel3" required>
    <option value="Familiar">Familiar</option>
    <option value="Padre/Madre">Padre/Madre</option>
  </select>
  <label for="localidadt">Localidad:</label>
  <input  type="text" class="form-control" id="localidadt" name="localidadt" required>
  <label for="sel4">Empresa:</label>
  <select class="form-control" id="sel4" name="sel4" required>
    <option value="personal">Personal</option>
    <option value="claro">Claro</option>
	</select>
  <label for="mailt">e-mail:</label>
  <input  type="email" class="form-control" id="mailt" name="mailt" required>
  </div>
  </div>
  </div>
</div> 
  <br>
 
 -->
 <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#alumno2">Alumno</a></li>
    <li><a data-toggle="tab" href="#tutor2">Tutor</a></li>

  </ul>

  <div class="tab-content">
    <div id="alumno2" class="tab-pane fade in active">
    <form  role="form" action="insert_nuevo_alu.php" method="post">
    <div id="alumno" class="tab-pane fade in active">
    <div class="row">
    <div class="col-sm-6">
   <label for="name">Fecha de Ingreso: </label>
   <!--<input type="date" name="bday" class="form-control" required>-->
 <?php 
     $hoy = date('Y-m-d');;
    ?>
   <input type="date" name="bday" class="form-control" required value="<?php echo $hoy; ?>" >
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

  
  <label >Tutor:</label>
  <?php    combo( 'select concat (nro_doc,\' - \',apellidos, \'   \' , nombres),nro_doc from tutores'   );?>
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
  </div>
  </div>
  </div>
  
  
   </form>
      </div>
	  
	  
    <div id="tutor2" class="tab-pane fade">
	<form  role="form" action="insert_nuevo_tutor.php" method="post">
      <div class="row">
   <div class="col-sm-6">
   <label for="apellidot">Apellido/s del tutor:</label>
   <input  type="text" class="form-control" id="apellidot"  name="apellidot" required>
   <label for="dnit">DNI:</label>
   <input  type="number" class="form-control" id="dnit"  name="dnit" required>
   <label for="domiciliot">Domicilio:</label>
   <input  type="text" class="form-control" id="domiciliot"  name="domiciliot" >
   <label for="celt">Celular:</label>
   <input  type="number" class="form-control" id="celt" name="celt" required>
   <label for="telt">Telefono:</label>
   <input  type="number" class="form-control" id="telt" name="telt" required>
      <p>
  <input type="submit"></p>
   </div>
   
   
   <div class="col-sm-6">
   <label for="namet">Nombre/s del tutor:</label>
  <input  type="text" class="form-control" id="namet" name="namet" required> 
  <label for="sel3">vinculo:</label>
  <select class="form-control" name="sel3" id="sel3" required>
    <option value="Familiar">Familiar</option>
    <option value="Padre/Madre">Padre/Madre</option>
  </select>
  <label for="localidadt">Localidad:</label>
  <input  type="text" class="form-control" id="localidadt" name="localidadt" required>
  <label for="sel4">Empresa:</label>
  <select class="form-control" id="sel4" name="sel4" required>
    <option value="personal">Personal</option>
    <option value="claro">Claro</option>
	</select>
  <label for="mailt">e-mail:</label>
  <input  type="email" class="form-control" id="mailt" name="mailt" required>
   </div>
   
   
<!-- -->
   </div>
   </form>
  </div>



 
  
  
  

 
 

 
   
 
 
 
  