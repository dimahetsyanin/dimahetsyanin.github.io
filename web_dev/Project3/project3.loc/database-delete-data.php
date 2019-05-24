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
$idtodelete =$_REQUEST['idtodelete'];
// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=".$idtodelete."";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
