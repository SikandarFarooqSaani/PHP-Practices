<?php
echo "Scope <br>";
$a = 4;
function printval()
{
    global $a;
    echo "The Value of the Variable is $a";
};
printval();
echo "<br>";
echo $a;
?>