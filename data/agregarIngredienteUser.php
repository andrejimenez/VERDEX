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

	$searchIngrediente = str_replace(" ","_","$_GET[search]%");
	$sql = "SELECT * FROM ingredientes WHERE nombre LIKE '$searchIngrediente'";
	$data = $conn -> query($sql);
	while ($result=$data->fetch_assoc()) {
		$nombreIngrediente = str_replace("_"," ","$result[nombre]");
		echo"<div id='modalBtn' class='buttonUser' onClick='openModal(\"$result[nombre]\",\"$result[unidad]\");'>$nombreIngrediente</div>";
	}

?>