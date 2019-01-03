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

	@session_start();
	
	$sql = "SELECT * FROM restaurante WHERE nombre LIKE '$_GET[search]%'";
	$data = $conn -> query($sql);
	while ($result=$data->fetch_assoc()) {
		echo"<div id='modalBtn' class='buttonUser' onClick='usuario(\"$result[email]\");'>$result[nombre]</div>";
	}

?>