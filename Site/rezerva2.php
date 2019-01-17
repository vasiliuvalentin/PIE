<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cafenea";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (isset($_POST["btnRezerva"])){
	$selectOption = $_POST['nrmasa'];
$sql = "INSERT INTO rezervare(numer,data,ora,idm)
        VALUES ('".$_POST["namevalue"]."','".$_POST["dater"]."','".$_POST["ora"]."','".$selectOption."')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
	echo "<script type='text/javascript'>alert('Rezervare efectuata!');</script>";
	header("Refresh:0; url=rezerva.html");

} else {
    echo "<script type='text/javascript'>alert('Rezervare nu a putut fi efectuata!');</script>";
	header("Refresh:0; url=rezerva.html");
}
}

$conn->close();

?>