<?php
session_start();

// Change these to fit your SQL database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// If you change the names on index.php change these too
$one = $_POST['1'];
$two = $_POST['2'];
$three = $_POST['3'];

// This creates a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// This will check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Again, fit this to your SQL database
$sql = "INSERT INTO TABLE_NAME (1, 2, 3)
VALUES ('$one', '$two', '$three')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
