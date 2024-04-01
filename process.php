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

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $content = $_POST["content"];

    // Insert content into database
    $sql = "INSERT INTO content (content) VALUES ('$content')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
