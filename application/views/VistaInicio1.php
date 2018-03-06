<!DOCTYPE html>
<html>
<head>
<?php
	$this->load->view('librerias');
?>
<title>Inicio</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<style type="text/css">
body,html{
  margin:0px  ;padding:40px  ;height:100%;
}
body{
  background-size:cover;
  font-family: "Courier New", Courier, monospace;
  display:flex;
  flex-direction:column;
  align-items:center; 
}
svg{
  font-weight:bold;max-width:500px;height:auto;
}

.btn {
  -webkit-border-radius: 60;
  -moz-border-radius: 60;
  border-radius: 60px;
  -webkit-box-shadow: 9px 7px 14px #666666;
  -moz-box-shadow: 9px 7px 14px #666666;
  box-shadow: 9px 7px 14px #666666;
  font-family: Courier New;
  color: #ffffff;
  font-size: 21px;
  background: #54798f;
  padding: 8px 10px 8px 10px;
  text-decoration: none;
}

.btn:hover {
  background: #7b96a6;
  
}


</style>
</head>


<body class="body2">
<svg viewbox="0 0 100 20">
  <defs>
    <linearGradient id="gradient" x1="0" x2="0" y1="0" y2="1">
      <stop offset="5%" stop-color="#326384"/>
      <stop offset="95%" stop-color="#123752"/>
    </linearGradient>
    <pattern id="wave" x="0" y="0" width="120" height="20" patternUnits="userSpaceOnUse">
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
  <text text-anchor="middle" x="50" y="15" font-size="17" fill="url(#wave)"  fill-opacity="0.6">Bienvenido</text>
  <text text-anchor="middle" x="50" y="15" font-size="17" fill="url(#gradient)" fill-opacity="0.1">Bienvenido</text>
</svg>

	<form method= "post" action="pPrincipal">
		<table align="center">
		<tr>  
  	  		<td align="center" > 
   		 		<input  type="submit" value="Ingresar" class="btn" style="width: 200px; margin-top: 25px"></input>
   		 	</td>    		
	</form>
</tr>
</table>
</body>
</html>