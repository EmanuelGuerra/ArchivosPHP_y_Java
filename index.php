<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
		<title>Proyecto</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style type="text/css">
	@import url("css/mycss.css");
</style>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>

	<?php
		error_reporting(E_ALL);
		ini_set('display_errors', '1');
	?>
<div class="container">
   <div id="contenido">
  	<table class="table" >
  		<thead>
  			<th>N°</th>
  			<th>Nombre</th>
  			<th>Apellidos</th>
  			<th>Cargo<th>
  			<th> <a href=""> <button type="button" class="btn btn-info">Agregar</button> </a> 
  			<a href=""> <button type="button" class="btn btn-success">Editar</button> </a> </th>
  		</thead>
  	</table>

	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> Agregar	</button>

		<!-- Modal -->
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Agregar usuario</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        </button>
		      </div>

		<div class="modal-body">
		    <form>
 	 			<div class="input-group">
    				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    				<input id="nombre" type="text" class="form-control" name="nombre" placeholder="Nombre">
  				</div><br>
  				<div class="input-group">
    				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    				<input id="apellido" type="text" class="form-control" name="apellido" placeholder="Apellido">
  				</div>
      			<div class="modal-footer">
        			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        			<button type="button" class="btn btn-primary">Guardar cambios</button>
      			</div>
      		</form>
      	</div>
</body>
</html>