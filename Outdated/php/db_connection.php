<?php
// db_connection.php
$servername = "localhost";
$username = "root";  // Default MySQL username
$password = "";  // Your MySQL password
$dbname = "finhub_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
