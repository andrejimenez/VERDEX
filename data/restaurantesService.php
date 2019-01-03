 <?php
	$servername = "localhost";
	$username = "id3966849_rootverdex";
	$password = "rootverdex";
	$dbname = "id3966849_verdex";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	//echo "Connected successfully";



	
	$sql = "SELECT nombre, email FROM restaurante";
	$result = $conn->query($sql);
	$i = 0;
	$arr = array();
	while ($row = $result->fetch_assoc()) {
		$arr["datos"][$i]["nombre"] = $row["nombre"];
		$arr["datos"][$i]["email"] = $row["email"];
		$i++;
	}
	echo json_encode($arr);

?>