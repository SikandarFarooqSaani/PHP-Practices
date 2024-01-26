<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbsaani";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

// Create a db
$sql ="CREATE TABLE `phptable` (`sno` INT(11) NOT NULL , `name` VARCHAR(11) NOT NULL , `age` INT(11) NOT NULL , `gender` VARCHAR(11) NOT NULL )" ;
  
$result = mysqli_query($conn, $sql);

// Check for the table creation success
if($result){
    echo "The table was created successfully!<br>";
}
else{
    echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
}
?>
