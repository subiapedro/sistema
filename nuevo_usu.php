<?php   include 'conn/conn.php'; ?>
 <form   role="form" action="insert_nuevo_usuario.php" method="post">
   <div class="form-group">
  <label for="sel1">Selecccione un tipo:</label>
  <select class="form-control" id="sel1" name="sel1">
    <option value="Administrativo">Administrativo</option>
    <option value="Padre/Tutor">Padre/Tutor</option>
    <option value="Alumno">Alumno</option>
    <option value="Docente">Docente</option>
  </select>
  <!-- <label for="name">Nombre/s:</label>
  <input  type="text" class="form-control" id="name" name="name" required>-->
 
  <label for="dni">DNI:</label>
   <input  type="number" class="form-control" id="dni" name="dni" required>
  <label for="usr">Nombre de usuario:</label>
  <input  type="text" class="form-control" id="usr" name="usr" required>  
  
  <label for="pwd">Password:</label>
  <input type="password" class="form-control" id="pwd" name="pwd" required>
  <label for="pwd2">Repetir Password:</label>
  <input type="password" class="form-control" id="pwd2" name="pwd2" required>
  <button type="submit" class="btn btn-default">Enviar</button>
  </form>
</div>
</div>
   
 



 
 
  