<?php 
echo "Saani Here <br>";
$arr = array("Facewash", "Milkpack Cream", "pillow", "Lotion", "Fruit");
for ($i=0; $i < count($arr); $i++) { 
    echo $arr[$i];
    echo "<br>";
}
for ($j=0; $j < 3; $i++) { 
    echo "<br>";  
}

foreach ($arr as $value) {
    echo "$value <br>";
}
?>