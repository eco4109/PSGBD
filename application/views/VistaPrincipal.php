<!DOCTYPE html>
<html>
<head>
<?php
	$this->load->view('librerias');
?>
<title>Titulo</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<style type="text/css">

	body{
		
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

	
	<form method= "post" action="CargaVAgregar">
		<table align="center">
		<h1 align="center"><font face="Police Monospace">Menú Principal</font> </h1>
		<tr>
  	  		<td align="center" style="padding: 20px"> 
   		 		<input type="submit" value="Agregar Al Catalogo" class="btn btn-success" style="width: 200px;"></input>
   		 	</td>    		
	</form>

	<form method= "post" action="fGenerar">
		<table align="center">
		<tr>
  	  		<td align="center" style="padding: 10px"> 
   		 		<input type="submit" value="Generar Reporte" class="btn btn-success" style="width: 200px;"></input>
   		 	</td>    		
	</form>

	<form method= "post" action="inicio">
		<table align="center">
		<tr>
  	  		<td align="center" style="padding: 40px"> 
   		 		<input   type="submit" value="Salir" class="btn btn-danger" style="width: 200px;"></input>
   		 	</td>    		
	</form>
</tr>
</table>
</body>
</html>