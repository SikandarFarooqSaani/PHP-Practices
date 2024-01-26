<?php
//include 'C:/xampp/htdocs/saani/dbconnect.php';
require 'C:/xampp/htdocs/saani/dbconnect.php';

$sql = "SELECT * FROM `notes`";
$result = mysqli_query($conn, $sql);

//find the no of records

$num = mysqli_num_rows($result);
echo $num. "<br> Record Found";



while($row = mysqli_fetch_assoc($result))
    {
            //echo var_dump($row)."<br>";  
            echo $row['S No']. " --- Hello ".$row['title']." your age is ".$row['description']."<br>"."<br>";
    }
?>