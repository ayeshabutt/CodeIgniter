<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "code_igniter";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$val = "'$name'".','."'$email'".','."'$message'";
$sql = "INSERT INTO contact_us (name, email, message) VALUES ($val)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>