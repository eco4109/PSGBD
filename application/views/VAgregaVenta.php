<!DOCTYPE html>
<html>
<head>
	<?php
 $this->load->view('librerias');
 ?>
	<title >Agregar una Venta</title>
	
</style>     </head> <body>
<form method= "post" action="fagregaVenta">         
	<h1 align="center">Hacer una Venta.</h1>      
	<table align="center">
		<tr>
			<td style="padding:10px;"><input type="text"  class="form-control"  value="COMPUTOL"  readonly ></td>
			<td>
				<label>Id de Venta: </label>
			</td>
			<td style="padding: 10px;">
				<input type="text" class="form-control" name="idVenta" value="<?php echo $id ;?>" readonly>
			</td>
		</tr>
		<tr>
			<td><label for="nombre">Folio de Factura:</label></td>
	        <td  style="padding:10px;"><input type="text" name="folioF"  class="form-control" required=""></td>
	        <td><label for="t_empleado">Vendedor: </label></td>
	        <td style="padding:10px;"> 

	        <select name="vendedor" class="form-control">Tipo de Empleado:
	        <option value="--" class="form-control">---</option>
    		<option value="1" class="form-control">JUAN PEREZ </option>
    	    <option value="2" class="form-control">CARMEN GARCIA</option>
            </select>
        </td>
   
	              
	          </tr>

	          <tr>
	          	<td><label for="direccion">Cliente: </label></td>

	            <td style="padding:10px;"><input type="text" name="cliente" class="form-control" required=""></td>
	            
	          </tr>

	          <tr></tr>

	          <tr>
	            <td><label for="email">Fecha: </label></td>

	            <td style="padding:10px;"><input type="date" name="fecha" class="form-control" required=""></td>
	            
	          </tr>

	              <td align="center"> <input type="submit" value="Enviar" class="btn btn-success" style="width: 100px;" required=""></input></td>
	              <td align="center" style="padding:10px;"> <input type="reset" value="Limpiar" class="btn btn-primary" style="width: 100px;"></input></td>       
	      </form>

	      <form method="post" action="pPrincipal">
	        	<td>
	            	<input type="submit" value="Regresar" class=" btn btn-warning" style="width:100px;">
	            </td>
	        </form>

</tr>
</table>


</body>
</html>
