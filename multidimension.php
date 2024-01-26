<?php 
echo "Mutidimension seekhta hn";
echo "<br>";
$multiarr = array(
    array(2,5,7,8),
    array(1,2,3,1),
    array(4,5,0,1)
);
#echo var_dump($multiarr);
echo $multiarr[0][0];
echo "<br>";
for ($i=0; $i < count($multiarr); $i++) { 
    for ($k=0; $k < $multiarr[$i]; $k++) { 
        echo "$multiarr[$i][$k]";
        echo "  ";
    }
    echo "<br>";

}
?>