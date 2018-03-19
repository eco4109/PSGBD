<!DOCTYPE html>
<html>
<head>
	<?php
		$this->load->view('librerias');
	?>
	<title >Agregar una Venta</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
	<style type="text/css">
		
	</style>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
   
</head> 

<body>
<form method= "post" action="fagregaVenta">
	<h1 align="center">Información de la Compra.</h1>
	<table align="center">
		<tr>
			<td style="padding: 10px;">
				<label>Proveedor: </label>
				<select name = "proveedor" id="proveedor" class="form-control">
					<?php for ($i=0; $i < count($campo); $i++) { ?>
					<option id="proveedor" value = "<?php $campo[$i] ?>" class="form-control"><?php echo $id[$i]."  ".$campo[$i];?></option>
					<?php } ?>				
				</select>

	        	
			</td>
			<td><label>Fecha: </label></td>
	        <td style="padding:10px;">
				<input type="date" name="date" id="name">
			</td>
		</tr>
		<tr>
			<td style="padding:10px;">
			<label>Cliente:</label>
	               	<select name = "cliente" id="cliente" class="form-control">
					<?php for ($i=0; $i < count($campo); $i++) { ?>
					<option id="cliente" value = "<?php $id[$i] ?>" class="form-control"><?php echo $id[$i];?></option>
					<?php } ?>				
				</select>
			</td>
	        
	        	
	        </td>
	    </tr>

	    <tr>
	    </tr>

	    <tr>
	    	<td><label for="email">Fecha: </label></td>
	    	<td style="padding:10px;"><input type="date" name="fecha" class="form-control" required=""></td>
	    </tr>

	    <td align="center"> <input type="submit" value="Enviar" class="btn btn-success" style="width: 100px; margin-top: 100px;" required=""></input></td>
	    <td align="center" style="padding:10px;"> <input type="reset" value="Limpiar" class="btn btn-primary" style="width: 100px; margin-top: 100px;"></input></td>
	</form>

	<form method="post" action="pPrincipal">
		<td>
			<input  type="submit" value="Regresar" class=" btn btn-warning" style="width:100px; margin-top: 100px;">
		</td>
	</form>
</tr>
</table>
</body>
