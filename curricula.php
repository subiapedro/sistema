<?php include 'header.php'; ?>

<!--			
			</div>-->
			
<div class="col-sm-10">
	<div class="panel panel-default">
			<div class="panel-body"><h3><span class="glyphicon glyphicon-user"></span>Curricula</h3></div>
			<div class="panel-body">
			<div id= "panel1" class="form-group">
  <div class="btn-group">
			<button onclick="window.location.href='salir.php'" type="button" class="btn btn-primary">Cerrar Session</button>
            <!--<button  type="button" class="btn btn-primary">Nuevo</button>-->
			<button onclick="showCustomer(1,'nueva_curricula.php?sql=4')" type="button" class="btn btn-primary">Nuevo</button>
			<button onclick="showCustomer(2,'listado.php?sql=5')" type="button" class="btn btn-primary">Listado</button>
			
   
			</div>
  </div>
   <div id="txtHint"></div>
    <script>
function showCustomer(str,dir) {
  
  var xhttp;    
  document.getElementById("panel1").innerHTML = "";
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } 
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET",dir, true);
  xhttp.send();
}
</script>
</div>
</div>
 </div>			
	
  
</div>
</div>
</body>
</html>