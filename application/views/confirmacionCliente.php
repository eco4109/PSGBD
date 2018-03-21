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
<form method= "post" action="agregaCompra">
	<h1 align="center">Información de la Compra.</h1>
	<table align="center">
		<tr>
			<td style="padding: 10px;">
				<div class="form-group">
				<label for="proveedor">Proveedor: </label>
				<select name = "proveedor" id="proveedor" class="form-control">
					<?php for ($i=0; $i < count($campo); $i++) { ?>
					<option id="proveedor" value = "<php echo $id[$i]; ?>" class="form-control"><?php echo $id[$i]."  ".$campo[$i];?></option>
					<?php } ?>				
				</select>
				</div>	        	
			</td>
		</tr>
		<tr>
			<td style="padding:10px;">
			<div class="form-group">	
			<label for= "cliente">Cliente:</label>
	               	<select  name = "cliente" id="cliente" class="form-control">
					<?php for ($i=0; $i < count($campo); $i++) { ?>
					<option value = "<?php echo $id[$i]; ?>"><?php echo $id[$i];?></option>
					<?php } ?>				
				</select>
			</td>
			</div>
	        
	        	
	        </td>
	    </tr>

	    <tr>
	    </tr>

	    <tr>
	    	<td><label>Fecha: </label></td>
	    	<td style="padding:10px;"><input type="date" name="fecha" id="fecha" class="form-control" required=""></td>
	    	
	    </tr>
	    <tr>
	    	<td><label>Id de compra: </label></td>
	    	<td style="padding:10px;"><input type="text" name="idCompra" id="idCompra" class="form-control" value="<?php echo $no ?>" readonly="" required=""></td>
	    	<td><label>Factura: </label></td>
	    	<td style="padding:10px;"><input type="text" name="noFactura" id="noFactura" class="form-control"></td>
	    </tr>

	    <tr>
	    	<td><label>Número de productos: </label></td>
	    	<td style="padding:10px;"><input type="text" name="noProductos" id="noProductos" class="form-control" required=""></td>
	    </tr>
	    
	    <td align="center"> <input type="submit" value="Siguiente" class="btn btn-success" style="width: 100px; margin-top: 100px;" required=""></input></td>
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
