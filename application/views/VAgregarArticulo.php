<!DOCTYPE html>
<html>
<head>
<?php
	$this->load->view('librerias');
?>

</head>

<body>
<form method= "post" action="AgregarUnArticulo">
<h1  align="center">Ingresa un Nuevo Articulo.</h1>
<table align="center">
	<tr>
	    <td><label>Id del Articulo: </label></td>
	    <td style="padding:10px;"><input type= text pattern="[0-9]" class = "form-control" name="ident" required></td>
	</tr>
	<tr>
	    <td><label class="col-md-4 control-label" >Descripción del Articulo: </label></td>

	    <td style="padding:10px;"><textarea class="form-control" name="descripcion"></textarea></td>
	<tr>
	<tr>
		<td><label>Precio de Venta: </label></td>
		<td style="padding: 10px;"><input class="form-control" name="precioV" required></td>
	</tr>
		<td>
			<td> <input type="submit" value="Confirmar" class="btn btn-success" style="width: 100px;"></td>
		</td>
	
</form>

<form method= "post" action="CargaVAgregar">
  	  	<td align="center" style="padding: 20px"> 
   		 	<input type="submit" value="Regresar" class="btn btn-warning" style="width: 100px;"></input>
   		 </td>  
   	</tr>  		
</form>
</table>
<body>
</html>