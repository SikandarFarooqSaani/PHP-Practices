<?php
// echo "Welcome to write files";

// $fptr = fopen("myfile2.txt", "w");
// fwrite($fptr, "This is one of the pathetic files of this planet and please dont argue \n");
// fwrite($fptr, "This is one of the pathetic files of this planet and please dont argue\n");
// fwrite($fptr, "This is one of the pathetic files of this planet and please dont argue \n");
// fclose($fptr);


$fptr = fopen("myfile2.txt", "a");
 fwrite($fptr, "This is one of the pathetic files of this planet and please dont argue 666\n");
 fclose($fptr);

?>