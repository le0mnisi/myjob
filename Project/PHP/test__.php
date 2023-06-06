<?php
require("./config/server.php");


// Connect to the database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve job listings from the database
$sql = "SELECT * FROM job_listings";
$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>