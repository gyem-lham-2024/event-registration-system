<?php
$servername = "localhost";  // Use your database server (e.g., localhost)
$username = "root";         // Your MySQL username (default is 'root' for local setup)
$password = "";             // Your MySQL password (leave blank if no password is set)
$dbname = "event_registration_system";  // The name of the database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
