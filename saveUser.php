<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spamdata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from POST request
$Name = $_POST['Name'];
$email = $_POST['email'];
$number = $_POST['number'];

// Prepare SQL query to insert user data
$sql = "INSERT INTO userdata (Name, email, number) VALUES ('$Name', '$email', '$number')";

// Check if the query is successful
if ($conn->query($sql) === TRUE) {
    echo "User data saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
