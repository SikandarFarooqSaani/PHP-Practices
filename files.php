<?php 
$fptr = fopen("myfile.txt", "r");
echo var_dump($fptr);
if(!$fptr)
{
    die("<br>Unable to open this file. Please enter sahi wali file");
}
$content = fread($fptr, filesize("myfile.txt"));
echo "<br>".$content;
fclose($fptr);
// $a = readfile("myfile.txt");
// echo $a;
// readfile("myfile.txt");


?>