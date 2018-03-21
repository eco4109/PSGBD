<!DOCTYPE html>
<html>
<head>
	<?php
	$this->load->view('librerias');
	?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
var options = {
		Ventas : ["Por factura","Por cliente.", "Por articulo."],
		Compras : ["Por factura","Por proveedor", "Por articulo"],
	}

$(function(){
	var fillSecondary = function(){
		var selected = $('#primary').val();
		$('#secondary').empty();
		options[selected].forEach(function(element,index){
			$('#secondary').append('<option value='+element.length+'>'+element+'</option>');
		});
	}
	console.log($element.length.value());
	$('#primary').change(fillSecondary);
	fillSecondary();
});
</script>

</head>
<body  >
	<form method= "post" action="fGeneraReporte">
		<h1 style="margin-top: 75px" align="center">Reportes.</h1>

		<table align="center">
			<tr>
				<td align="center">

					<select class="form-control" id="primary" name="primary" style="width: 150px; margin-top: 70px;" >
						<option selected> --- </option>
						<option value="Ventas">Ventas</option>
						<option value="Compras">Compras</option>
						<option value="E.Arts">Existencias Art.</option>
					</select>

					<select class="form-control" id="secondary" name="secondary" style="width: 150px; margin-top: 20px;" >
					</select>

					<input type="submit" value="Generar Reporte" class="btn btn-success" style="width: 150px; margin-top: 20px;">
				</td>
			</tr>
	</form>
	<form method= "post" action="pPrincipal">
		<td align="center" style="padding: 25x">
			<input type="submit" value="Regresar" class="btn btn-warning" style="width: 150px; margin-top: 10px" >
		</td>
	</form>

</table>
</body>
</html>
