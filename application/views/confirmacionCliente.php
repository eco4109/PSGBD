<!DOCTYPE html>
<html>
<head>
<?php
	$this->load->view('librerias');
?>
<title >Exito</title>
</head>

<body>
	<form method= "post" action="confirmacion2">
		<table align="center">
		<h1 align="center">¿Desea agregar un nuevo proveedor?</h1>
		<tr>
  	  		<td align="center" style="padding: 10px"> 
   		 		<input name="opcion" id="opcion" type="submit" value="Si" class="btn btn-success" style="width: 100px;"></input>
   		 	</td>
   		 	<td align="center" style="padding: 10px"> 
   		 		<input name="opcion" id="opcion" type="submit" value="No" class="btn btn-warning" style="width: 100px;"></input>
   		 	</td>      		
	</form>
</tr>
</table>
</body>
</html>