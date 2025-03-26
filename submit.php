<!-- filepath: c:\wamp64\www\CreatorMagic\submit.php -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "creator_magic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];

// Insert data into the database
$sql = "INSERT INTO subscribers (name, email) VALUES ('$name', '$email')";
if ($conn->query($sql) === TRUE) {
    echo "Thank you for signing up!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>