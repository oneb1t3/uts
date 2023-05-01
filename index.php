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

// Execute query
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Display data
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Address</th><th>Position</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Address"]."</td><td>".$row["Position"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
