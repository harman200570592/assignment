<?php

// Database connection
$servername = "localhost";
$username = "employee name";
$password = "1234567";
$dbname = "employee records";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve content from database
$sql = "SELECT * FROM content";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Content: " . $row["content"] . "<br>";
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close()