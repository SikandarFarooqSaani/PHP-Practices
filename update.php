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

$sql = "SELECT * FROM `contact us` WHERE `Name` = 'Sikandar Farooq Saani'";
$result = mysqli_query($conn, $sql);

//find the no of records

$num = mysqli_num_rows($result);
echo $num. "<br> Record Found";
$no = 1;
if ($num > 0)
{

    while($row = mysqli_fetch_assoc($result))
    {
            //echo var_dump($row)."<br>";  
            echo $no. " --- Hello ".$row['Name']." your email is ".$row['Email']." and your password is ".$row['Password']. "<br>"."<br>";
            $no++;
    }
}
//`contact us`.
$sql = "UPDATE `contact us` SET `Password` = 'nahiajtobarishha' WHERE `S No` = 15";
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo "No of effected rows are : $aff";
if ($result ) {
    echo "Record updated Successfully";
}
else
{
    echo "Record not updated";
}
?>