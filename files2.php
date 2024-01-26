<?php

//File reading line by line



// $fptr = fopen("myfile.txt", "r");
// // echo fgets($fptr);
// // echo fgets($fptr);
// while($b = fgets($fptr))
// {
//     echo $b."<br>"; 

// }


//File reading character by character



$fptr = fopen("myfile.txt", "r");
// echo fgets($fptr);
// echo fgets($fptr);
while($b = fgetc($fptr))
{
    echo $b;
     if($b == "h")
     {
        break;
     }

}
fclose($fptr);

?>