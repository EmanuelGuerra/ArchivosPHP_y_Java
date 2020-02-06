<?php 

$conexion = mysql_connect('localhost', 'root', 'root');
mysqli_select_db("registro", $conexion);

mysql_query(" SET NAMES 'utf8'");

 ?>