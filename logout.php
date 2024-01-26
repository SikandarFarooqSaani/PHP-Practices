<?php
session_start();
// //verified

// echo "Welcome".$_SESSION['username']."<br>";
// echo "Your Favourite Category is ".$_SESSION['favcat'];
// echo "We have saved your session";
session_unset();
session_destroy();
echo "You are loged out";

?>