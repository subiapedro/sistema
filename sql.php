 <?php
 $sql=$_GET['sql'];
switch ($sql) {
   case 0:  
        $strsql="select * from alumnos";
         break;
   case 1:
         $strsql="select fec_ingreso as Ingreso,nombres as Nombre ,apellidos as Apellido,nro_doc as DNI,fec_nac as Fecha_Nacimiento  ,domicilio as Domicilio ,localidad as Localidad,curso from alumnos inner join alumnos_cursos on alumnos.id_alumno=alumnos_cursos.id_alumno  "; 
         break;
   case 2:
		$strsql="select fec_ingreso as Ingreso, apellidos, nombres,fec_nac,domicilio,localidad, titulo from docentes";
         break;
   case 3:
		$strsql="select nombre as 'Nombre de Usuario ', tipo as Tipo from usuarios";
         break;
   case 4:
		$strsql="select * from materias";
		break;
   case 5:
		$strsql="SELECT id_curricula as 'Curricula' ,anio,nombre,apellidos, nombres 
FROM curricula
INNER JOIN materias ON curricula.id_materia = materias.id_materia
INNER JOIN docentes ON curricula.id_docente = docentes.id_docente";		
		break;		 
}