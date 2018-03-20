<!DOCTYPE html>
<html>
<head>
<?php
	$this->load->view('librerias');
?>
<title>Inicio</title>
<link href="styles/ihover.css" rel="stylesheet">

<style type="text/css">










/* Comunes */

.row1 {
  overflow: hidden;
  position: relative;
  display: flex;
  background-color: #17202A;
  padding-bottom: 30px;
}
.row2 {
  overflow: hidden;
  position: relative;
  display: flex;
  background-color: #17202A;
  color: #707B7C;
  padding-bottom: 30px;
}

p {
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 40px;
}

.seccion {
  margin: auto;
  font-family: "Times";
  font-weight: 1000;
  font-size: 26px;
  padding: 2em;
}

/* Hover 1 */

.boton-linea-ext a,
.boton-linea-ext2 a {
  text-decoration: none;
  color: #A93226;
}

.boton-linea-ext:hover a,
.boton-white-ext:hover a {
  color: rgba(169,50,38);
  background: -moz-linear-gradient(left, rgba(135,238,190,1) 0%, rgba(98,200,228,1) 56%, rgba(40,157,189,1) 100%);
  background: -webkit-gradient(left top, right top, color-stop(0%, rgba(135,238,190,1)), color-stop(56%, rgba(98,200,228,1)), color-stop(100%, rgba(40,157,189,1)));
  background: -webkit-linear-gradient(left, rgba(135,238,190,1) 0%, rgba(98,200,228,1) 56%, rgba(40,157,189,1) 100%);
  background: -o-linear-gradient(left, rgba(135,238,190,1) 0%, rgba(98,200,228,1) 56%, rgba(40,157,189,1) 100%);
  background: -ms-linear-gradient(left, rgba(135,238,190,1) 0%, rgba(98,200,228,1) 56%, rgba(40,157,189,1) 100%);
  background: linear-gradient(to right, rgba(135,238,190,1) 0%, rgba(98,200,228,1) 56%, rgba(40,157,189,1) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#A93226', endColorstr='#A93226', GradientType=1 );
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.boton-linea-ext,
.boton-linea-ext2 {
    padding: 4px 28px;
    border: none;
    background: transparent;
    color: #A93226;
    width: auto;
    float: left;
    position: relative;
    line-height: 45px;
    cursor: pointer;
    margin: 0em 2.5em 1em 2em;
}

.boton-linea-ext .linea1,
.boton-linea-ext .linea2,
.boton-linea-ext2 .linea1_1,
.boton-linea-ext2 .linea2_2,
.boton-white-ext .linea1,
.boton-white-ext .linea2,
.boton-white-ext2 .linea1_1,
.boton-white-ext2 .linea2_2 {
  top: 0;
  right: 0;
}

.boton-linea-ext .linea3,
.boton-linea-ext .linea4,
.boton-linea-ext2 .linea3_2,
.boton-linea-ext2 .linea4_2,
.boton-white-ext .linea3,
.boton-white-ext .linea4,
.boton-white-ext2 .linea3_2,
.boton-white-ext2 .linea4_2 {
  bottom: 0;
  left: 0;
}

.boton-linea-ext .linea1,
.boton-linea-ext .linea3,
.boton-linea-ext2 .linea1_2,
.boton-linea-ext2 .linea3_2,
.boton-white-ext .linea1,
.boton-white-ext .linea3,
.boton-white-ext2 .linea1_2,
.boton-white-ext2 .linea3_2 {
  height: 3px;
  width: 18px;
}

.boton-linea-ext .linea2,
.boton-linea-ext .linea4,
.boton-linea-ext2 .linea2_2,
.boton-linea-ext2 .linea4_2,
.boton-white-ext .linea2,
.boton-white-ext .linea4,
.boton-white-ext2 .linea2_2,
.boton-white-ext2 .linea4_2{
  height: 18px;
  width: 3px;
}

.boton-linea-ext span,
.boton-linea-ext2 span {
  position: absolute;
  background-color: #17202A;
  display: block;
  transition: all 300ms; 
}

.boton-linea-ext:hover,
.boton-linea-ext:active,
.boton-linea-ext2:hover,
.boton-linea-ext2:active {
  backgroundo-color: transparent;
  color: #17202A;
}

.boton-linea-ext:hover .linea1,
.boton-linea-ext:hover .linea3,
.boton-linea-ext:active .linea1,
.boton-linea-ext:active .linea3,
.boton-white-ext:hover .linea1,
.boton-white-ext:hover .linea3,
.boton-white-ext:active .linea1,
.boton-white-ext:active .linea3 {
  width: 100%;
  background: rgba(23,32,43);
background: -moz-linear-gradient(left, rgba(135,238,190,1) 0%, rgba(98,200,228,1) 56%, rgba(40,157,189,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(135,238,190,1)), color-stop(56%, rgba(98,200,228,1)), color-stop(100%, rgba(40,157,189,1)));
background: -webkit-linear-gradient(left, rgba(135,238,190,1) 0%, rgba(98,200,228,1) 56%, rgba(40,157,189,1) 100%);
background: -o-linear-gradient(left, rgba(135,238,190,1) 0%, rgba(98,200,228,1) 56%, rgba(40,157,189,1) 100%);
background: -ms-linear-gradient(left, rgba(135,238,190,1) 0%, rgba(98,200,228,1) 56%, rgba(40,157,189,1) 100%);
background: linear-gradient(to right, rgba(135,238,190,1) 0%, rgba(98,200,228,1) 56%, rgba(40,157,189,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#17202A', endColorstr='#17202A', GradientType=1 );
}

.boton-linea-ext:hover .linea2,
.boton-linea-ext:active .linea2,
.boton-white-ext:hover .linea2,
.boton-white-ext:active .linea2{
  height:100%;
  background: #17202A;
}

.boton-linea-ext:hover .linea4,
.boton-linea-ext:active .linea4,
.boton-white-ext:hover .linea4,
.boton-white-ext:active .linea4{
  height:100%;
  background: #17202A;
}

.btn {
  -webkit-border-radius: 60;
  -moz-border-radius: 60;
  border-radius: 60px;
  -webkit-box-shadow: 9px 7px 14px #666666;
  -moz-box-shadow: 7px 5px 12px #666666;
  box-shadow: 7px 5px 12px #666666;
  font-family: "Times";
  color: #ffffff;
  font-size: 21px;
  background: #54798f;
  padding: 8px 10px 8px 10px;
  text-decoration: none;

  color: #17202A !important;
  font-size: 20px;
  font-weight: 500;
  padding: 0.5em 1.2em;
  background: rgba(0,0,0,0);
  border: 2px solid;
  border-color: #17202A;
  transition: all 1s ease;
  position: relative;
}

.btn:hover {
  background: #17202A;
  color: #17202A !important;

}


</style>
</head>


<body class="body2">
<svg viewbox="0 0 100 20">
  <defs>
    <linearGradient id="gradient" x1="0" x2="0" y1="0" y2="1">
      <stop offset="5%" stop-color="#17202A"/>
      <stop offset="95%" stop-color="#17202A"/>
    </linearGradient>
    <pattern id="wave" x="0" y="0" width="140" height="20" patternUnits="userSpaceOnUse">
      <path id="wavePath" d="M-40 9 Q-30 7 -20 9 T0 9 T20 9 T40 9 T60 9 T80 9 T100 9 T120 9 V20 H-40z" mask="url(#mask)" fill="url(#gradient)">
        <animateTransform
            attributeName="transform"
            begin="0s"
            dur="3.5s"
            type="translate"
            from="0,0"
            to="40,0"
            repeatCount="indefinite" />
      </path>
    </pattern>
  </defs>
  <text text-anchor="middle" x="50" y="11" font-size="7" fill="url(#wave)"  fill-opacity="0.6">Bienvenido</text>
  <text text-anchor="middle" x="50" y="11" font-size="7"  fill="url(#gradient)" fill-opacity="0.1">Bienvenido</text>
</svg>

	<form method= "post" action="pPrincipal">
		<table align="center">
		<tr>
      <td align="center" >
        <div class="seccion">
          <div class="boton-linea-ext">
            <span class="linea1"></span>
            <span class="linea2"></span>
            <span class="linea3"></span>
            <span class="linea4"></span>
            <a href="pPrincipal">Ingresar</a>
          </div>
        </div>
   		 		<!--<input  type="submit" value="Ingresar" class="btn" style="width: 200px; margin-top: 25px"></input>-->
   		 	</td>
	</form>
</tr>
</table>
</body>
</html>
