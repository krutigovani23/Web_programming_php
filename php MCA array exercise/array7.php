<?php
  $countries = array(
    "USA" => "Washington, D.C.",
    "Canada" => "Ottawa",
    "Germany" => "Berlin",
    "Japan" => "Tokyo",
    "Australia" => "Canberra"
);
  $countries["France"] = "Paris";
  
  $countries["Germany"] = "Bulgeriya (Updated)";
  
  foreach($countries as $country =>$capital)
	 {
		echo"the capital of  : ".$country." is ".$capital.".<br>";
	 }
	 ?>