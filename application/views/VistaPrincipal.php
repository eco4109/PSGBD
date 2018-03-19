<!DOCTYPE html>
<html>
<head>
<?php
	$this->load->view('librerias');
?>
</head>

<body>


	<form method= "post" action="CargaVAgregar">
		<table align="center">
		<h1 align="center"><font face="Police Monospace">Menú Principal</font> </h1>
		<tr>
  	  		<td align="center" style="padding: 20px">
   		 		<input type="submit" value="Agregar Al Catalogo" class="btn btn-success" style="width: 200px;"></input>
   		 	</td>
	</form>


	<form method= "post" action="fGeneraVenta">
		<table align="center">
		<tr>
 	  		<td align="center" style="padding: 10px"> 
   		 		<input type="submit" value="Ventas" class="btn btn-success" style="width: 200px;"></input>
   		 	</td>  
  	  		<td align="center" style="padding: 10px">
   		 		<input type="submit" value="Hacer una Venta" class="btn btn-success" style="width: 200px;"></input>
   		 	</td>
</form>


	<form method= "post" action="confirmacion">
		<table align="center">
		<tr>
  	  		<td align="center" style="padding: 10px"> 
   		 		<input type="submit" value="Compras" class="btn btn-success" style="width: 200px;"></input>
   		 	</td>    		
  	  		<td align="center" style="padding: 10px">
   		 		<input type="submit" value="Hacer una Compra" class="btn btn-success" style="width: 200px;"></input>
   		 	</td>
	</form>



	<form method= "post" action="CarvaVDecideRepo">
		<table align="center">
		<tr>
  	  		<td align="center" style="padding: 10px">
   		 		<input type="submit" value="Generar Reporte" class="btn btn-success" style="width: 200px;"></input>
   		 	</td>
	</form>

	<form method= "post" action="inicio">
		<table align="center">
		<tr>
  	  		<td align="center" style="padding: 30px">
   		 		<input   type="submit" value="Salir" class="btn btn-danger" style="width: 200px;"></input>
   		 	</td>
	</form>
</tr>
</table>
</body>
</html>
