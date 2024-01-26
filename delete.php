<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "contacts";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful<br>";
}
$sql = "INSERT INTO `phptable` (`sno`, `name`, `age`, `gender`) VALUES ('$sno', '$name', '$age', '$gender')";

$sql = "DELETE FROM `contact us` WHERE `Password` = 'pakistan' LIMIT 3";
$result = mysqli_query($conn, $sql);

$aff = mysqli_affected_rows($conn);
echo "No of effected rows are : $aff";
?>