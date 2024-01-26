<?php
session_start();
//verified
if(isset($_SESSION['username']))
{


echo "Welcome".$_SESSION['username']."<br>";
echo "Your Favourite Category is ".$_SESSION['favcat'];
echo "We have saved your session";
}
else
{
    echo "Your are not A member";
}
?>