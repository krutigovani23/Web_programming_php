<?php

$countries = array(
    "USA" => "Washington, D.C.",
    "Canada" => "Ottawa",
    "Germany" => "Berlin",
    "Japan" => "Tokyo",
    "Australia" => "Canberra"
);

	ksort($countries);
	echo "Countries sorted by keys (ascending):<br>";
	foreach ($countries as $country => $capital)
	{
    echo $country . " => " . $capital . "<br>";
    }
	asort($countries);
	
    $sortedByValues = array_reverse($countries);
	
	echo "<br>Capitals sorted by values (descending):<br>";
    foreach ($sortedByValues as $country => $capital)
	{
    echo $country . " => " . $capital . "<br>";
    }
?>