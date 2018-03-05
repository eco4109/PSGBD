<!DOCTYPE html>
<html>
<head>
<?php
	$this->load->view('librerias');
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<style type="text/css">
	body{
		background-color: #848484;
		background-image: url(https://images.unsplash.com/photo-1433785124354-92116416b870?q=80&fm=jpg&s=38f06298f26c11c59024eabf3b0be3bb);
		background-position: center center;
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
	}form{
		color: white; 
	}
</style>
</head>

<body>
<form method= "post" action="AgregarUnArticulo">
<h1 align="center">Ingresa un Nuevo Articulo.</h1>
<table align="center">
	<tr>
	    <td><label>Id del Articulo: </label></td>
	    <td style="padding:10px;"><input class = "form-control" name="ident" required></td>
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