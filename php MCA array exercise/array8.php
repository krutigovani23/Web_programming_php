<?php
  $countries = array(
    "USA" => "Washington, D.C.",
    "Canada" => "Ottawa",
    "Germany" => "Berlin",
    "Japan" => "Tokyo",
    "Australia" => "Canberra"
);

 $specificCountry = "Germany";
 
 if (array_key_exists($specificCountry, $countries)) 
 {
    $capital = $countries[$specificCountry];
    echo "The capital of " . $specificCountry . " is " . $capital . ".";
  } 
 else 
 {
    echo "Country not found in the array.";
 }
?>