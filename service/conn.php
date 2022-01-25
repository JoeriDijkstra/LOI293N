<?php
$servername = "localhost";
$username = "webuser";
$password = "password";
$database = "293N5";

// Create the connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    mysqli_close($conn);
}