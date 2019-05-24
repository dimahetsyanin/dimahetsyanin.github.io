<?php
/*$servername = $_REQUEST['servername'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];*/
$name_of_db =$_REQUEST['name_of_database'];
$servername = "localhost";
$username = "root";
$password = "roman45464748";
$dbname = "myDB";
// Create connection
$conn = new mysqli($servername,$username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Create database
$sql = "CREATE DATABASE $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
