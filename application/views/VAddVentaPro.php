<!DOCTYPE html>
<html>
<head>
	<?php
	$this->load->view('librerias');
	?>
<title >Agregar una Venta</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<style type="text/css">

body {
	font: 13px verdana;
	font-weight: normal;
}
.bt {
  -webkit-border-radius: 12;
  -moz-border-radius: 12;
  border-radius: 12px;
  font-family: Arial;
  color: #ffffff;
  font-size: 12px;
  background: #206da1;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.bt:hover {
  background: #0f5c8c;
  text-decoration: none;
}




</style>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">

</script>

<script type="text/javascript">

	$(document).ready(function() {
var iCnt = 0;

// Crear un elemento div añadiendo estilos CSS
var container = $(document.createElement('div')).css({
padding: '5px', margin: '20px', width: '170px', border: '1px dashed',
borderTopColor: '#999', borderBottomColor: '#999',
borderLeftColor: '#999', borderRightColor: '#999'
});

$('#btAdd').click(function() {
if (iCnt <= 19) {

iCnt = iCnt + 1;


$(container).append('<tr> <td> <label id=tb'+iCnt+' style="margin-left: 150px;" >Id del producto: '+iCnt+' </label><select  class="form-control" name="idArts[]"><option value="--" class="form-control">---</option><?php for ($i=0; $i < count($this->artics); $i++) {?><option> <?php echo $this->artics[$i]['des_articulo'] ;?></option><?php } ?></select></td> <td align="center" style="padding:10px;"> <label id=tb'+iCnt+' style="margin-left: 250px;" >Cantidad: </label> <input type="number"  style="margin-left: 250px;" min=1 class="form-control" name="cantArts[]"> </td> </tr>');


//$(container).append('<tr> <td> <label id=tb'+iCnt+' style="margin-left: 150px;" >Id del producto: '+iCnt+' </label> <input style="margin-left: 150px;" type="text" style="width:180px;" class="form-control" name="idArts[]"> </td> <td align="center" style="padding:10px;"> <label id=tb'+iCnt+' style="margin-left: 250px;" >Cantidad: </label> <input type="number"  style="margin-left: 250px;" min=1 class="form-control" name="cantArts[]"> </td> </tr>');




if (iCnt == 1) {

var divSubmit = $(document.createElement('div'));
$(divSubmit).append('');
}

$('#main').after(container, divSubmit);
}
else { //se establece un limite para añadir elementos, 20 es el limite

$(container).append('<label>Limite Alcanzado</label>');
$('#btAdd').attr('class', 'bt-disable');
$('#btAdd').attr('disabled', 'disabled');

}
});

$('#btRemove').click(function() { // Elimina un elemento por click
	if (iCnt != 0) { $('#tb' + iCnt).remove(); iCnt = iCnt - 1; }
	if (iCnt == 0) { $(container).empty();
		$(container).remove();
		$('#btSubmit').remove();
		$('#btAdd').removeAttr('disabled');
		$('#btAdd').attr('class', 'bt')
	}
});



$('#btRemoveAll').click(function() { // Elimina todos los elementos del contenedor

$(container).empty();
$(container).remove();
$('#btSubmit').remove(); iCnt = 0;
$('#btAdd').removeAttr('disabled');
$('#btAdd').attr('class', 'bt');

});
});

// Obtiene los valores de los textbox al dar click en el boton "Enviar"
var divValue, values = '';

function GetTextValue() {

$(divValue).empty();
$(divValue).remove(); values = '';

$('.input').each(function() {
divValue = $(document.createElement('div')).css({
padding:'5px', width:'200px'
});
values += this.value + '<br />'
});

$(divValue).append('<p><b>Tus valores añadidos</b></p>' + values);
$('body').append(divValue);

}

</script>

<body  >
	<form method= "post" action="fTerminarVenta">
		<h1 align="center">Información del Articulo.</h1>
		<table align="center">
			<tr>
				<td style="padding:5px;">
					<input type="text"  class="form-control"  value="COMPUTOL"  readonly >
				</td>
				<td>
					<label>Id de Venta: </label>
				</td>
				<td style="padding: 50px;">
					<?php
					session_start();
					$idVenta = $_SESSION['count'];
					?>
					<input style="width:70px;" type="text" class="form-control" name="idVenta" value="<?php echo $idVenta ;?>" readonly>
				</td>
			</tr>


			<tr>
				<td align="center">
					<input type="submit" value="Terminar Venta" class="btn btn-success" style="width: 150px;">
				</td>

				<td align="center" style="padding:10px;">
					<input type="reset" value="Limpiar" class="btn btn-warning" style="width: 100px;">
				</td>
			</tr>




<div id="main" align="center" style="margin-top: 50px;">
	<input type="button" id="btAdd" value="Añadir Articulo" class="bt" />
	<!--<input type="button" id="btRemove" value="Eliminar Articulo" class="bt" />-->
	<input type="button" id="btRemoveAll" value="Eliminar Todos" class="bt" /><br />
</div>


	</form>
</table>
</body>
</html>
