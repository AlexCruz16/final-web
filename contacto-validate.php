<?php 
	
	 error_reporting(0);

	 $destino = 'alexcz9303@gmail.com';

	if(isset($_POST['nombre'])){
		$nombre=$_POST['nombre'];
	}else{
		$nombre="";
	}

	if(isset($_POST['email'])){
	$email=$_POST['email'];
	}else{
		$email="";
	}

	if(isset($_POST['mensaje'])){
	$mensaje=$_POST['mensaje'];
	}else{
		$mensaje="";
	}

	$contenido = "Nombre:" . $nombre . "\nCorreo:" . $email . "\nMensaje:" . $mensaje;

	mail($destino,$contenido);


    $servername = "127.0.0.1";
	$username = "root";
	$pasword = "";
	$dbname = "registro";


	// Create Conection

	$conn = new mysqli($servername,$username,$pasword,$dbname);

	// Check Conection

	if ($conn->connect_error) {
		die("Conection failed:". $conn->connect_error);
	}

	$sql = "INSERT INTO Users (nombre, email, mensaje)
	VALUES ('$nombre', '$email', '$mensaje')";

	if ($conn->query($sql) === TRUE) {
	    echo"<script type=\"text/javascript\">window.location='malibu.php';</script>";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();


 ?>