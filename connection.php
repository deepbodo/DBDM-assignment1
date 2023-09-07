<?php
$host = "localhost";  // Your MySQL server host
$username = "root";   // MySQL username (default for XAMPP)
$password = "";       // MySQL password (default for XAMPP)
$database = "universitydatabase"; // Replace with your database name

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else 
    {
        die("Connection established");
    }
?>
