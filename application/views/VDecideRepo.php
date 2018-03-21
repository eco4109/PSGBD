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
	$('#primary').change(fillSecondary);
	fillSecondary();
});
</script>
<style type="text/css">
<<<<<<< HEAD

=======
		
>>>>>>> dfffc4bd1c10aa1614fb8b1bf5e7ed15ae860b89
body {
  width: 100%;
  height: 100%;
  position: fixed;
  background-color: #34495e;
}

.content {
  position: absolute;
  top: 18%;
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
<body >
<div class="content">
  <div class="content__container">
    <p class="content__container__text">
      Reporte
    </p>
<<<<<<< HEAD

=======
    
>>>>>>> dfffc4bd1c10aa1614fb8b1bf5e7ed15ae860b89
    <ul class="content__container__list">
      <li class="content__container__list__item">Ventas</li>
      <li class="content__container__list__item">Compras</li>
      <li class="content__container__list__item">Existencias</li>
      <li class="content__container__list__item">Ventas</li>
    </ul>
  </div>
</div>
<<<<<<< HEAD


=======


>>>>>>> dfffc4bd1c10aa1614fb8b1bf5e7ed15ae860b89
	<form method= "post" action="fGeneraReporte">
		<table align="center" style="margin-top: 160px;">
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

					<input type="submit" value="Generar Reporte" class="botonVerde" style="width: 150px; margin-top: 20px;">
				</td>
			</tr>
	</form>
	<form method= "post" action="pPrincipal">
		<td align="center" style="padding: 25x">
			<input type="submit" value="Regresar" class="botonNaranja" style="width: 150px; margin-top: 10px" >
		</td>
	</form>

</table>
</body>
</html>
