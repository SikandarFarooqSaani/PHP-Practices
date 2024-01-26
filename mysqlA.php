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

?>