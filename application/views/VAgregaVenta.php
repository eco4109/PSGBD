<!DOCTYPE html>
<html>
<head>
	<?php
 $this->load->view('librerias');
 ?>
	<title >Agregar una Venta</title>
	<link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
<style type="text/css">
	body{
		
		background-image: url(https://images.unsplash.com/photo-1433785124354-92116416b870?q=80&fm=jpg&s=38f06298f26c11c59024eabf3b0be3bb);
		background-position: center center;
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
	}form{
		color: white; 
	}
</style>     </head> <body>
<form method= "post" action="controlador_login/agregarT">         <h1
align="center">Hacer una Venta.</h1>      <table align="center">
<tr>                 <td > <label for="n_empleado" >Número empleado:
</label></td>                 <td style="padding:10px;"><input type="number"
id="n_empleado" name="n_empleado" type="text" placeholder="Numero de Empleado"
class="form-control" required=""></td>
	              
	 		  </tr>
	          <tr>
	              <td><label for="nombre">Nombre:</label></td>
	              <td  style="padding:10px;"><input type="text" name="nombre" id="nombre" class="form-control" required=""></td>
	              <td><label for="a_paterno">Apellido Paterno:</label></td>
	              <td style="padding:10px;" ><input type="text" name="a_paterno" id="a_paterno" class="form-control" required=""></td>
	              <td><label for="a_materno">Apellido Materno:</label></td>
	            <td style="padding:10px;"><input type="text" name="a_materno" id="a_materno" class="form-control" required=""></td>
	              
	          </tr>

	          <tr>
	          	<td><label for="direccion">Direccion: </label></td>

	            <td style="padding:10px;"><input type="text" name="direccion" id="direccion" class="form-control" required=""></td>

	            <td><label for="telefono">Telefono: </label></td>

	            <td style="padding:10px;"><input type="text" name="telefono" id="telefono" maxlength="10" class="form-control" required=""></td>
	            
	          </tr>

	          <tr></tr>

	          <tr>
	            <td><label for="email">Correo electronico: </label></td>

	            <td style="padding:10px;"><input type="email" name="email" id="email" class="form-control" required=""></td>
	            
	          </tr>

	          <tr><td><label for="t_empleado">Tipo de empleado</label></td>
	          	<td style="padding:10px;"> 

	          <select name="t_empleado" class="form-control">Tipo de Empleado
    		  <option value="trabajador" class="form-control">Trabajador</option>
    	      <option value="supervisor" class="form-control">Supervisor</option>
              </select>
          </td>
              <br><br>
              </tr>
	            <td><label for="fecha">Fecha de ingreso: </label></td>

	            <td style="padding:10px;"><input type="date" name="fecha" id="fecha" class="form-control" required=""></td>

	            <td><label for="Sindicalizado">Sindicalizado?si=1 no=0: </label></td>

	            <td style="padding:10px;"><input type="number" name="Sindicalizado" id="Sindicalizado" min=0 max = 1 class="form-control" required=""></td>
	          </tr>
	          
	          <tr>
	            <td><label for="cve_jefe">Clave de su jefe: </label></td>
	            <td style="padding:10px;"><input type="number" name="cve_jefe" id="cve_jefe" min="0" class="form-control" required=""></td>
	          </tr>

	          <tr>
	          

	              <td align="center"> <input type="submit" value="Enviar" class="btn btn-success" style="width: 100px;" required=""></input></td>
	              <td align="center" style="padding:10px;"> <input type="reset" value="Limpiar" class="btn btn-success" style="width: 100px;"></input></td>       
	      </form>

	      <form method="post" action="controlador_login/regresar">
	        	<td>
	            	<input type="submit" value="Regresar" class="btn btn-success" style="width:100px;">
	            </td>
	        </form>
	      <form method= "post" action="controlador_login/logout">
	          	
	              <td> <input type="submit" value="Salir" class="btn btn-success" style="width: 100px;"></td>
	       </form>
</tr>
</table>


</body>
</html>
