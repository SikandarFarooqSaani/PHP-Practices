<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "contacts";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}
$name = "kidyboy@gmail.com";
$age = "pakistan";
$sno = 20;
$gender = "Sikandar Saani";
$sql = "INSERT INTO `contact us` (`S No`, `Email`, `Password`, `Name`) VALUES ('$sno', '$name', '$age', '$gender')";
$result = mysqli_query($conn, $sql);
if($result){
    echo "The data was created successfully!<br>";
}
else{
    echo "The data was not created successfully because of this error ---> ". mysqli_error($conn);
}
?>