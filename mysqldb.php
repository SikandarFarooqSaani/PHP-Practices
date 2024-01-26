<?php
echo "Connecting to my data base again <br>";
#connecting to the data base;
$servername = "localhost";
$username = "root";
$password = "";

#creating connection
$conn = mysqli_connect($servername,$username,$password);


if(!$conn)
{
    die("Sorry we failed to connect". mysqli_connect_error());
}
else
{
    echo "connection was successfull";
}

$sql = "CREATE DATABASE dbsaani2";
$result = mysqli_query($conn, $sql);

if($result)
{
    echo "Connection was successfull";
}
else
{
    echo"Connection was unsuccessfull because of this error". mysqli_error($conn);
}
#creating db

echo "Result is ";
echo var_dump($result);
echo "<br>";



?>