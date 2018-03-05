<!DOCTYPE html>
<html>
<head>
<?php
	$this->load->view('librerias');
?>
<title>Inicio</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<style type="text/css">

  input {
  color: #fff !important;
  font-size: 80px;
  font-weight: 500;
  padding: 0.5em 1.2em;
  background: #318aac;
  position: relative;
  border: 7px solid #318aac;
  outline: 6px solid;
  outline-color: rgba(49, 138, 172, 0.4);
  transition: all 2s cubic-bezier(0.19, 1, 0.22, 1);
}
input:hover {
  box-shadow: inset 0 0 40px rgba(49, 138, 172, 0.5), 0 0 40px rgba(49, 138, 172, 0.4);
  outline-color: rgba(49, 138, 172, 0);
  outline-offset: 100px;
  text-shadow: 4px 4px 9px #fff;
  border-shadow: 
}
	body{
		background-image: url(https://images.unsplash.com/photo-1433785124354-92116416b870?q=80&fm=jpg&s=38f06298f26c11c59024eabf3b0be3bb);
		background-position: center center;
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;

		font: 14.5em/1 Open Sans, Impact;
		text-transform: uppercase;
		margin: 0;
	}svg {
		
		width: 100%;
		height: 100%;
	}

@import url(https://fonts.googleapis.com/css?family=Open+Sans:800);

.text {
  fill: none;
  stroke-width: 6;
  stroke-linejoin: round;
  stroke-dasharray: 70 330;
  stroke-dashoffset: 0;
  -webkit-animation: stroke 6s infinite linear;
  animation: stroke 6s infinite linear;
}

.text:nth-child(5n + 1) {
  stroke: #5d6d7e;
  -webkit-animation-delay: -1.2s;
  animation-delay: -1.2s;
}
.text:nth-child(5n + 2) {
  stroke:   #1b2631;
  -webkit-animation-delay: -2.4s;
  animation-delay: -2.4s;
}

.text:nth-child(5n + 3) {
  stroke: #5d6d7e;
  -webkit-animation-delay: -3.6s;
  animation-delay: -3.6s;
}

.text:nth-child(5n + 4) {
  stroke:  #21618c ;
  -webkit-animation-delay: -4.8s;
  animation-delay: -4.8s;
}

.text:nth-child(5n + 5) {
  stroke:  #7e5109;
  -webkit-animation-delay: -6s;
  animation-delay: -6s;
}

@-webkit-keyframes stroke {
  100% {
    stroke-dashoffset: -400;
  }
}

@keyframes stroke {
  100% {
    stroke-dashoffset: -400;
  }
}

</style>


<svg viewBox="0 0 1320 300">
	<symbol id="s-text">
    <text text-anchor="middle"
          x="50%" y="50%" dy=".35em">
      ¡Bienvenido!
    </text>
	</symbol>  

  <use xlink:href="#s-text" class="text"
       ></use>
  <use xlink:href="#s-text" class="text"
       ></use>
  <use xlink:href="#s-text" class="text"
       ></use>
  <use xlink:href="#s-text" class="text"
       ></use>
  <use xlink:href="#s-text" class="text"
       ></use>

</svg>
</head>


<body class="body">
	<form method= "post" action="pPrincipal">
		<table align="center">
		<tr>
  	  		<td align="center" style="padding: 10px"> 
   		 		<input  type="submit" value="Ingresar" class="btn btn-success" style="width: 100px;"></input>
   		 	</td>    		
	</form>
</tr>
</table>
</body>
</html>