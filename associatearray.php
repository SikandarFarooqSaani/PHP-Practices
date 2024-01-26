<?php 
echo "Associate Array Again <br>";

$favCar = array(
    'Sikandar' => 'Urus',
    'Ziaad' => 'Sonata',
    'Hamza' => 'Nivera',
);
echo $favCar['Sikandar'];
echo "<br>";
echo $favCar['Ziaad'];
#echo $facCar[3];
echo "<br>";
foreach ($favCar as $key => $value) {
    echo "Favourite Car of $key is $value <br>";
}
?>