<?php
$servername = "localhost";
$username = "root";
$password = "roman45464748";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$value_to_change= $_REQUEST['$value_to_change'];
$id = $_REQUEST['id'];


$sql = "UPDATE MyGuests SET lastname='".$value_to_change"' WHERE id='".$id."'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
