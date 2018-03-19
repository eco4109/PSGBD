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
</head> 

<body>
<form method= "post" action="fagregaVenta">
	<h1 align="center">Información de la Compra.</h1>
	<table align="center">
		<tr>
			<td style="padding:10px;"><input type="text"  class="form-control"  value="COMPUTOL"  readonly >
			</td>
			<td>
				<label>Proveedor: </label>
			</td>
			<td style="padding: 10px;">
				<input type="text" class="form-control" name="idVenta" value="<?php echo $pro[1] ;?>">
			</td>
		</tr>
		<tr>
			<td><label for="nombre">Folio de Factura:</label></td>
	        <td style="padding:10px;"><input type="text" name="folioF"  class="form-control" required=""></td>
	        <td><label for="t_empleado">Vendedor: </label></td>
	        <td style="padding:10px;">
	        	<select name="vendedor" class="form-control">
	        		<option value="--" class="form-control">---</option>
	        		<option value="1" class="form-control">JUAN PEREZ </option>
	        		<option value="2" class="form-control">CARMEN GARCIA</option>
	        	</select>
	        </td>
	    </tr>

	    <tr>
	    	<td><label>Cliente: </label></td>
	    	<td>
	    		<select class="form-control" name="cliente" style="width: 250px; margin-top: 20px; margin-bottom: 20px;" >
	    			<option value="--" class="form-control">---</option>
	    		<?php
	    			for ($i=0; $i < count($this->clients); $i++) {?>
	    			<option> <?php echo $this->clients[$i]['nombre_comprador'] ;?></option>
	    		<?php } ?>
	    		</select>
	    	</td>
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
