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

body {
	width: 100%;
	height: 100%;
	position: fixed;
	background-color: #34495e;
}

.content {
	position: absolute;
	top: 14%;
	left: 50%;
	-webkit-transform: translate(-50%, -50%);
					transform: translate(-50%, -50%);
	height: 50px;
	overflow: hidden;
	font-family: 'Lato', sans-serif;
	font-size: 35px;
	line-height: 35px;
	color: #626567;
}
.content__container {
	font-weight: 1000;
	overflow: hidden;
	height: 40px;
	padding: 0 80px;
}
.content__container:before {
	content: '[';
	left: 30px;
}
.content__container:after {
	content: ']';
	position: absolute;
	right: 30px;
}
.content__container:after, .content__container:before {
	position: absolute;
	top: 0;
	color: #16a085;
	font-size: 42px;
	line-height: 40px;
	-webkit-animation-name: opacity;
	-webkit-animation-duration: 2s;
	-webkit-animation-iteration-count: infinite;
	animation-name: opacity;
	animation-duration: 2s;
	animation-iteration-count: infinite;
}
.content__container__text {
	display: inline;
	float: left;
	margin: 0;
}
.content__container__list {
	margin-top: 0;
	padding-left: 150px;
	text-align: left;
	list-style: none;
	-webkit-animation-name: change;
	-webkit-animation-duration: 10s;
	-webkit-animation-iteration-count: infinite;
	animation-name: change;
	animation-duration: 10s;
	animation-iteration-count: infinite;
}
.content__container__list__item {
	line-height: 40px;
	margin: 0;
}

@-webkit-keyframes opacity {
	0%, 100% {
		opacity: 0;
	}
	50% {
		opacity: 1;
	}
}
@-webkit-keyframes change {
	0%, 12.66%, 100% {
		-webkit-transform: translate3d(0, 0, 0);
						transform: translate3d(0, 0, 0);
	}
	16.66%, 29.32% {
		-webkit-transform: translate3d(0, -25%, 0);
						transform: translate3d(0, -25%, 0);
	}
	33.32%,45.98% {
		-webkit-transform: translate3d(0, -50%, 0);
						transform: translate3d(0, -50%, 0);
	}
	49.98%,62.64% {
		-webkit-transform: translate3d(0, -75%, 0);
						transform: translate3d(0, -75%, 0);
	}
	66.64%,79.3% {
		-webkit-transform: translate3d(0, -50%, 0);
						transform: translate3d(0, -50%, 0);
	}
	83.3%,95.96% {
		-webkit-transform: translate3d(0, -25%, 0);
						transform: translate3d(0, -25%, 0);
	}
}
@keyframes opacity {
	0%, 100% {
		opacity: 0;
	}
	50% {
		opacity: 1;
	}
}
@keyframes change {
	0%, 12.66%, 100% {
		-webkit-transform: translate3d(0, 0, 0);
						transform: translate3d(0, 0, 0);
	}
	16.66%, 29.32% {
		-webkit-transform: translate3d(0, -25%, 0);
						transform: translate3d(0, -25%, 0);
	}
	33.32%,45.98% {
		-webkit-transform: translate3d(0, -50%, 0);
						transform: translate3d(0, -50%, 0);
	}
	49.98%,62.64% {
		-webkit-transform: translate3d(0, -75%, 0);
						transform: translate3d(0, -75%, 0);
	}
	66.64%,79.3% {
		-webkit-transform: translate3d(0, -50%, 0);
						transform: translate3d(0, -50%, 0);
	}
	83.3%,95.96% {
		-webkit-transform: translate3d(0, -25%, 0);
						transform: translate3d(0, -25%, 0);
	}
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


$(container).append('<tr> <td> <label id=tb'+iCnt+' style="margin-left: 150px;" >Elige el producto: '+iCnt+' </label><select  class="form-control" name="desArts[]"><option value="--" class="form-control">---</option><?php for ($i=0; $i < count($this->artics); $i++) {?><option> <?php echo $this->artics[$i]['des_articulo'] ;?></option><?php } ?></select></td> <td align="center" style="padding:10px;"> <label id=tb'+iCnt+' style="margin-left: 250px;" >Cantidad: </label> <input type="number"  style="margin-left: 250px;" min=1 class="form-control" name="cantArts[]"> </td> </tr>');


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
	<div class="content">
		<div class="content__container">
			<p class="content__container__text">
				Articulos
			</p>
		</div>
	</div>
	<form method= "post" action="fTerminarVenta">

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
					<input type="submit" value="Terminar Venta" class="botonVerde" style="width: 150px;">
				</td>

				<td align="center" style="padding:10px;">
					<input type="reset" value="Limpiar" class="botonAzul" style="width: 100px;">
				</td>
			</tr>




<div id="main" align="center" style="margin-top: 150px;">
	<input type="button" id="btAdd" value="Añadir Articulo" class="bt" />
	<!--<input type="button" id="btRemove" value="Eliminar Articulo" class="bt" />-->
	<input type="button" id="btRemoveAll" value="Eliminar Todos" class="bt" /><br />
</div>


	</form>
</table>
</body>
</html>
