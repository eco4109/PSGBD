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
<form method= "post" action="AgregarUnCliente">
<h1 align="center">Ingresa un Nuevo Cliente.</h1>
<table align="center">
	<tr>
	    <td><label for="no_empleado">Id del Cliente: </label></td>
	    <td style="padding:10px;"><input class = "form-control" name="ident" value = "<?php echo $id ;?>" readonly ></td>
	</tr>
	<tr>
	    <td><label for="nombre">Nombre del Cliente: </label></td>
	    <td style="padding:10px;"><input class = "form-control" name="nombre" required ></td>
	<tr>
		<td>
			<td> <input type="submit" value="Confirmar" class="btn btn-success" style="width: 100px;"></td>
		</td>
	
</form>

<form method= "post" action="CargaVAgregar">
  	  	<td align="center" style="padding: 25x"> 
   		 	<input type="submit" value="Regresar" class="btn btn-warning" style="width: 100px;"></input>
   		 </td>  
   	</tr>  		
</form>
</table>
<body>
</html>