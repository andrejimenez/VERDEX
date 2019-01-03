<?php
	header('Accept: application/json');
	header('Content-type: application/json');

	$servername = "localhost";
	$username = "id3966849_rootverdex";
	$password = "rootverdex";
	$dbname = "id3966849_verdex";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	date_default_timezone_set("America/Monterrey");

	// Check connection
	if ($conn->connect_error) 
	{
	    header('HTTP/1.1 500 Bad connection to Database');
	    die("The server is down, we couldn't establish the DB connection");
	}
	else
	{
			@session_start();
			$userActual = $_SESSION['nombre'];
			$email = $_SESSION['email'];
			$ingrediente = $_POST['ingrediente'];
			$cantidad = $_POST['cantidad'];
			$dateT = date("j F Y");
			$ingredienteDistribuidor = "";
			$ingredienteRestaurante = "";

			$sql = "SELECT * FROM comida WHERE dateT = '$dateT' AND emailRestaurante = '$email'";

			$result = $conn->query($sql);

			if($row = $result->fetch_assoc()){
			
				$sql = "UPDATE comida SET $ingrediente = $ingrediente + '$cantidad' WHERE emailRestaurante = '$email' AND dateT = '$dateT'";

				$result = $conn->query($sql);

				$ingredienteDistribuidor .= $ingrediente . 'A';

				$sql = "UPDATE distribuidor SET $ingredienteDistribuidor = $ingredienteDistribuidor + '$cantidad'";
					$result = $conn->query($sql);

				$ingredienteRestaurante .= $ingrediente . 'T';

				$sql = "UPDATE restaurante SET $ingredienteRestaurante = $ingredienteRestaurante + '$cantidad' WHERE email = '$email'";
					$result = $conn->query($sql);

			echo json_encode(0);
			}
			else {

				$sql = "INSERT INTO comida (dateT, nombreRestaurante, emailRestaurante, $ingrediente) VALUES ('$dateT','$userActual','$email','$cantidad')";
				$result = $conn->query($sql);

				$ingredienteDistribuidor .= $ingrediente . 'A';

				$sql = "UPDATE distribuidor SET $ingredienteDistribuidor = $ingredienteDistribuidor + '$cantidad'";
					$result = $conn->query($sql);

				$ingredienteRestaurante .= $ingrediente . 'T';

				$sql = "UPDATE restaurante SET $ingredienteRestaurante = $ingredienteRestaurante + '$cantidad' WHERE email = '$email'";
					$result = $conn->query($sql);

				echo json_encode(0);
			}

		

	} 

?>
