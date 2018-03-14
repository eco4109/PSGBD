<!DOCTYPE html>
<html>
<head>
	<?php
 $this->load->view('librerias');
 ?>
	<title >Agregar una Venta</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">

<style type="text/css">

</style>     </head> <body>
<form method= "post" action="fagregaVenta">
	<h1 align="center">Información de la venta.</h1>
	<table align="center">
		<tr>
			<td style="padding:10px;"><input type="text"  class="form-control"  value="COMPUTOL"  readonly ></td>
			<td>
				<label>Id de Venta: </label>
			</td>
			<td style="padding: 10px;">

				<input type="text" class="form-control" name="idVenta" value="<?php echo $id ;?>">

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

	            <td style="padding:10px;">
								<select  name="sel" class="form-control">

								</select>
							</td>

	          </tr>

	          <tr></tr>

	          <tr>
	            <td><label for="email">Fecha: </label></td>

	            <td style="padding:10px;"><input type="date" name="fecha" class="form-control" required=""></td>

	          </tr>

	              <td align="center"> <input type="submit" value="Enviar" class="btn btn-success" style="width: 100px;" required=""></input></td>
	              <td align="center" style="padding:10px;"> <input type="reset" value="Limpiar" class="btn btn-primary" style="width: 100px;"></input></td>

	      </form><!DOCTYPE html>
<html>
<head>
	<?php
 $this->load->view('librerias');
 ?>
	<title >Agregar una Venta</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
	<script type="text/javascript" src="/js/jquery.js" >
		function CargarClientes(){
			$.ajax({
				type: "GET",
				url: "<?php echo $this->config->site_url();?>/ControladorInicial/allClients",
				data: {},
				dataType: 'json',
				crossDomain: true
			}).done(function(data){
				var reg = "";
				for(var i = 0; i<data.length; i++){
					reg += ("<label>HOLA</label>");
				}
				$('#sel').fadeIn(500).html(reg);
			}).fail(function(data){
				alert("ERROR.");
			});
		}

	</script>
<style type="text/css">

</style>     </head> <body>
<form method= "post" action="fagregaVenta">
	<h1 align="center">Información de la venta.</h1>
	<table align="center">
		<tr>
			<td style="padding:10px;"><input type="text"  class="form-control"  value="COMPUTOL"  readonly ></td>
			<td>
				<label>Id de Venta: </label>
			</td>
			<td style="padding: 10px;">

				<input type="text" class="form-control" name="idVenta" value="<?php echo $id ;?>">

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

	            <td style="padding:10px;">
								<select  name="sel" class="form-control">

								</select>
							</td>

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


					<td align="center" style="padding:10px;">
						 <button onclick="CargarClientes()" class="btn btn-primary" style="width: 100px;">Obtener</button>
					 </td>

</tr>
</table>


</body>
</html>


	      <form method="post" action="pPrincipal">
	        	<td>
	            	<input type="submit" value="Regresar" class=" btn btn-warning" style="width:100px;">
	            </td>
	        </form>


					<td align="center" style="padding:10px;">
						 <button onclick="CargarClientes()" class="btn btn-primary" style="width: 100px;">Obtener</button>
					 </td>

</tr>
</table>


</body>
</html>
