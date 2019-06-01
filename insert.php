<?php
$servername = "localhost";
$username = "id9788065_admin";
$password = "admin";
$dbname = "id9788065_admin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO InformacionPersonal
(nombre, apellido, edad)
VALUES ('Roman', 'Mancilla', '19')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>