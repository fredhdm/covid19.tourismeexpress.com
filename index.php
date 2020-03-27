<?php
$servername = "127.0.0.1";
$username = "root";
$password = "newpassword";
$db = "tourisme-express";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "SELECT id, prenom, nom FROM usager";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>id: " . $row["id"]. " - Nom: " . $row["prenom"]. " " . $row["nom"]. "";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<?php
   // $result = $mysqli->query("SELECT prenom FROM usager");
	//	echo($result);
?>