<!DOCTYPE html>
<html>
<head>
<?php
	$this->load->view('librerias');

?>
<title>Titulo</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<script lenguage="javascript" type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<style type="text/css">
	body{
		background-image: url(https://images.unsplash.com/photo-1433785124354-92116416b870?q=80&fm=jpg&s=38f06298f26c11c59024eabf3b0be3bb);
		background-position: center center;
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
	}
	form{
		color: white; 
	}
</style>
</head>

<body>
	<table align="center">
		<h1 style="color: white" align="center"><font face="Police Monospace">Agregar al Catalogo</font> </h1>
	</table>

	<form method="post" action="fdecideVAgregar">
		<table align="center">
		<tr>
		<td style="padding: 40px">
		<div class="form-group">
			
			<label for="opcion"><font face="Police Monospace">¿Que deseas agregar?</font> </label>
			<select class="form-control" id="opcion" name="opcion">
				<option selected> --- </option>
				<option value="Cliente">Cliente</option>
				<option value="Articulo">Articulo</option>
    			<option value="Proveedor">Proveedor</option>
  			</select>
		</div>
		
				<input type="submit" value="Aceptar" class="btn btn-success" style="width: 200px;" onclick="verificar()" ></input>
			</td>
		</tr> 
		</table>
	</form>

	<form method= "post" action="pPrincipal">
		<table align="center">
		<tr>
  	  		<td align="center" style="padding: 25x"> 
   		 		<input type="submit" value="Regresar" class="btn btn-warning" style="width: 200px;"></input>
   		 	</td>    		
	</form>
	
</tr>
</table>
</body>
</html>