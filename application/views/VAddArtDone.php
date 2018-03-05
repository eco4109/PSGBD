<!DOCTYPE html>
<html>
<head>
<?php
	$this->load->view('librerias');
?>
<title >Exito</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<style type="text/css">
	body{
		background-color: #848484;	
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
	<form method= "post" action="CargaVAgregar">
		<table align="center">
		<h1 align="center">¡Exito!, Articulo Agregado :)</h1>
		<tr>
  	  		<td align="center" style="padding: 10px"> 
   		 		<input type="submit" value="Regresar" class="btn btn-warning" style="width: 100px;"></input>
   		 	</td>    		
	</form>
</tr>
</table>
</body>
</html>