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
$name = $_REQUEST['name'];
$l_name= $_REQUEST['l_name'];
$email = $_REQUEST['email'];
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES('".$name."', '".$l_name."', '".$email."')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
