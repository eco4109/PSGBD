<!DOCTYPE html>
<html>
<head>
<?php
	$this->load->view('librerias');

?>
<title>Titulo</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<script lenguage="javascript" type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<style type="text/css">

body {
  width: 100%;
  height: 100%;
  position: fixed;
  background-color: #34495e;
}

.content {
  position: absolute;
  top: 21%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  height: 50px;
  overflow: hidden;
  font-family: 'Lato', sans-serif;
  font-size: 30px;
  line-height: 40px;
  color: #626567;
}
.content__container {
  font-weight: 800;
  overflow: hidden;
  height: 40px;
  padding: 0 60px;
}
.content__container:before {
  content: '[';
  left: 0;
}
.content__container:after {
  content: ']';
  position: absolute;
  right: 0;
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
  margin: 6;
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
      Agregar
    </p>
    
    <ul class="content__container__list">
      <li class="content__container__list__item">Articulo ?</li>
      <li class="content__container__list__item">Cliente ?</li>
      <li class="content__container__list__item">Proveedor ?</li>
      <li class="content__container__list__item">Articulo ?</li>
    </ul>
  </div>
</div>

	<form method="post" action="fdecideVAgregar">
		<table align="center" style="margin-top: 190px;">
		<tr>
		<td style="padding: 40px">
		<div class="form-group">
<<<<<<< HEAD
			
			<label for="opcion"><font face="Police Monospace">¿Que deseas agregar?</font> </label>
=======
>>>>>>> d714d1135457325e8d0489016a7776a6a2dd71bb
			<select class="form-control" id="opcion" name="opcion">
				<option selected> --- </option>
				<option value="Cliente">Cliente</option>
				<option value="Articulo">Articulo</option>
    			<option value="Proveedor">Proveedor</option>
  			</select>
		</div>
		
				<input type="submit" value="Aceptar" class="botonVerde" style="width: 200px;" onclick="verificar()" ></input>
			</td>
		</tr> 
		</table>
	</form>

	<form method= "post" action="pPrincipal">
		<table align="center">
		<tr>
  	  		<td align="center" style="padding: 25x"> 
   		 		<input type="submit" value="Regresar" class="botonNaranja" style="width: 200px;"></input>
   		 	</td>    		
	</form>
	
</tr>
</table>
</body>
</html>