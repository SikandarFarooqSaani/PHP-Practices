<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbsaani";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful<br>";
}

$sql = "SELECT * FROM `phptable`";
$result = mysqli_query($conn, $sql);

//find the no of records

$num = mysqli_num_rows($result);
echo $num. "<br> Record Found";

// row returned by sequel query
if ($num > 0)
{
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row)."<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row)."<br>";  
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row)."<br>";  
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row)."<br>";  
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row)."<br>";  
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row)."<br>";  
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row)."<br>";  
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row)."<br>";  
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row)."<br>";  
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row)."<br>";  
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row)."<br>";  

    while($row = mysqli_fetch_assoc($result))
    {
            //echo var_dump($row)."<br>";  
            echo $row['sno']. " --- Hello ".$row['name']." your age is ".$row['age']." and your gender is ".$row['gender']. "<br>"."<br>";
    }
}