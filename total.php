<?php
$servername = "172.18.0.3";
$username = "root";
$password = "pwd123";
$dbname = "redlock";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Execute query to get the total number of users
$sql = "SELECT COUNT(*) AS total_users FROM users";
$result = $conn->query($sql);

// Display the total number of users
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Total users: " . $row["total_users"];
} else {
    echo "0 results";
}

$conn->close();
?>
