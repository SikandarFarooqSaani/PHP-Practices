<?php
$a = 99;
$b = 99;
if ($a > $b)
{
    echo "A is greater then B";
}
elseif ($a < $b)
{
    echo "B is greater then A";
}
else
{
    echo "A and B are Equal";
}


$age = 18;
switch($age){ 
    case 12:
            echo " <br> You are 12 years old ";
            break;
    case 18:
            echo " <br> You are 18 years old";
            break;
    case 25:
            echo " <br> You are 25 years old";
            break;
    default:
            echo " <br>  Your are is weird";

    }
?>

