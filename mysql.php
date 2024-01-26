<?php
echo "SQL aa gaia g <br>";
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




?>