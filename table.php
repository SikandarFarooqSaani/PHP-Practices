<?php 

#connecting to the data base
$server = "localhost";
$username = "root";
$password = "";
$database = "dbsaani3";

#create a connection 
$conn = mysqli_connect($server, $username,$password, $database);
if(!$conn)
{ 
    die("Sorry we failed to connect to the server". mysqli_connect_error());
}
else{
    echo "Connection was Successfull";
}

$sql ="CREATE TABLE `trip`.`Data` (`name` VARCHAR(22) NOT NULL , `dob` DATETIME(5) NOT NULL , 
`gender` VARCHAR(12) NOT NULL , `time` TIME(5) NOT NULL , `dd` INT(1) )" ;

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