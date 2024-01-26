<?php 
echo "Saani Here <br>";

function number($marksArr)
{
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
    }
    return $sum;
}
function averageMarks($marksArr)
{
    $sum = 0;
    $i = 1;
    foreach ($marksArr as $value) {
        $sum += $value;
        $i++;
    }
    
    return $sum/$i;
}
$Sikandar = [45,65,89, 91, 55, 77];
$Ziaad = [99, 98 , 97, 92, 88 , 89];
$sumofmarksziaad = number($Ziaad);
$sumOfMarks = number($Sikandar);
$avgofsaani = averageMarks($Sikandar);
$avgofshahg = averageMarks($Ziaad);
echo "<br> Total Marks Scored by Saani Sahab are ".$sumOfMarks." Out of 600 <br>";
echo "<br> Total Marks Scored by Shah G Sahab are ".$sumofmarksziaad." Out of 600 <br>";
echo "<br> Total Average Scored by Saani Sahab are ".$avgofsaani." Out of 600 <br>";
echo "<br> Total Marks Scored by Shah G Sahab are ".$avgofshahg." Out of 600 <br>";

for ($k=0; $k < 4; $k++) { 
    echo "..<br>";
}

function sum($a, $s)
{
    return $a + $s;
}

$numA = 5;
$numB = 55;
$try = sum($numA, $numB);
echo "$try";
?>