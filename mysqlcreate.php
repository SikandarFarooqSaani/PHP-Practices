<?php 

#connecting to the data base
$server = "localhost";
$username = "root";
$password = "";

#create a connection 
$conn = mysqli_connect($server, $username,$password);
if(!$conn)
{ 
    die("Sorry we failed to connect to the server". mysqli_connect_error());
}
else{
    echo "Connection was Successfull";
}

#creating a data base
$sql = "CREATE DATABASE dbsaani23";
$result = mysqli_query($conn,$sql);
if ($result)
{
    echo "The DB was created Successfully";
}
else
{
    echo "DB was not created so Please see it again because of ". mysqli_error;
}


?>