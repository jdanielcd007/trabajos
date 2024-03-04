<?php
	//conexion con la base de datos y el servidor
	$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("solicitudes",$link) or die("<h2>Error de Conexion</h2>");

	//obtenemos los valores del formulario
	$Nombre1 = $_POST['Nombre2'];
	$Apellido1 = $_POST['Apellido2'];
	$Correo1 = $_POST['Correo2'];
	$Telefono1 = $_POST['Telefono2'];
	$Mensaje1 = $_POST['Mensaje2'];

	//Obtiene la longitus de un string
	$req = (strlen($Nombre1)*strlen($Apellido1)*strlen($Correo1)*strlen($Telefono1)*strlen($Mensaje)) or die("No se han llenado todos los campos");

	//ingresamos la informacion a la base de datos
	mysql_query("INSERT INTO datos VALUES('','$Nombre2','$Apellido2','$Correo2','$Telefono2')",$Mensaje2) or die("<h2>Error Guardando los datos</h2>");
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="Correo.html";
		</script>
	'


?>