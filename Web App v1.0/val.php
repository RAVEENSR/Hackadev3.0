<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO templeaderb (nic, serviceType, comment, name)
VALUES ('".$_POST["nic"]."','".$_POST["serviceType"]."','".$_POST["comments"]."','".$_POST["name"]."')";


if ($conn->query($sql) === TRUE) {
    echo "<h5 class='center header col s12 light'>New record created successfully</h5><br/>";
    echo "<center>";
    echo "<h1>Redirecting to Index...</h1>";
    echo "</center>";
    echo '<meta http-equiv="refresh" content="3; url=index.php" />';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>