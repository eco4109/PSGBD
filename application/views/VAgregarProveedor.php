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

<body>
	<div class="content">
	  <div class="content__container">
	    <p class="content__container__text">
	      Ingresar Proveedor
	    </p>
	  </div>
	</div>
<form method= "post" action="AgregarUnProveedor">
<table align="center" style="margin-top: 150px;" >
	<tr>
	    <td><label for="no_empleado">Id del proveedor: </label></td>
	    <td style="padding:10px;"><input class = "form-control" name="ident" value = "<?php echo $id ;?>" readonly ></td>
	</tr>
	<tr>
	    <td><label for="nombre">Nombre del Proveedor: </label></td>
	    <td style="padding:10px;"><input class = "form-control" name="nombre" required ></td>
	<tr>
		<td>
			<td> <input type="submit" value="Confirmar" class="botonVerde" style="width: 100px;"></td>
		</td>

</form>

<form method= "post" action="CargaVAgregar">
  	  	<td align="center" style="padding: 25x">
   		 	<input type="submit" value="Regresar" class="botonNaranja" style="width: 100px;"></input>
   		 </td>
   	</tr>
</form>
</table>
<body>
</html>
