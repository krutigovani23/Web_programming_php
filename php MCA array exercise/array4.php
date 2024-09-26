<?php
$fruits = array("1.apple","2.banana","3.cherry","4.mango","5.orange");

$fruitsascending = $fruits;
asort($fruitsascending);

$fruitsdescending = $fruits;
rsort($fruitsdescending);

echo "fruits in ascending order:<br>";
print_r($fruitsascending);

echo "<br>";
echo "<br>";

echo "fruits in descending order:<br>";
print_r($fruitsdescending);

?>