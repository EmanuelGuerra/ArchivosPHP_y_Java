<?php 
/*
	$con=mysql_connect("localhost","root","root");
	mysql_select_db("registro",$con);
	mysql_query("SET NAME 'utf8'");
 */
/*
	function conectar(){

		$user="root";
		$pass="";
		$server="localhost";
		$db="registro";
		$con=mysql_connect($server,$user,$pass) or die ("Error".mysql_error());

		mysql_select_db($db,$con);

		return $con;
	}
*/

	$conexion = mysqli_connect('localhost', 'root', 'root');
	mysqli_select_db($conexion, 'registro');
	$resultado = mysqli_query($conexion, "SELECT id, nombre, apellidos, telefono, ciudad, correo FROM clientes");

	while($fila = mysqli_fetch_array($resultado)){
		echo "ID: ".$fila ['id'].
		"<br> Nombre: " .$fila['nombre'].
		"<br> Apelldios: " .$fila['apellidos'].
		"<br> Telefono: " .$fila['telefono'].
		"<br> Ciudad: " .$fila['ciudad'].
		"<br> Correo: " .$fila['correo']."<hr>";

	}
 ?>