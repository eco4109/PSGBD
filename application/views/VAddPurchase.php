<!DOCTYPE html>
<html>
<head>
<?php
	$this->load->view('librerias');
?>
<meta charset="utf-8"></meta>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
	
</body>
</html>


<input type="text" name="searchProvider" id="searchProvider" value="" placeholder="Escribe el nombre de un proveedor" maxlength="30" autocomplete="off" />
	
<div id="ResultsearchProvider"></div>
<script>
	$('#searchProvider').keyup(function(){
		console.log($('#searchProvider').val());
		alert();
		$.ajax({
			type: 'POST',
			url: "<?php echo site_url("ControladorInicial/VAddPurchase/llamaModelo"); ?>",
			data: {
				serachProvider: $('#searchProvider').val()
			},
			dataType: "json"
		}).done(function(arg){
			console.log(arg);
		}).fail(function(arg2){
			console.log(arg2);
		});
	});
</script>