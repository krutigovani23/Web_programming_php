<?php
$cities = [
    "New York" => [
        "population" => 8419600,
        "area" => 468.9, 
        "country" => "USA"
    ],
    "Tokyo" => [
        "population" => 13929286,
        "area" => 845.0, 
        "country" => "Japan"
    ],
    "London" => [
        "population" => 8982000,
        "area" => 607.0, 
        "country" => "UK"
    ],
    "Paris" => [
        "population" => 2148327,
        "area" => 40.7, 
        "country" => "France"
    ],
    "Sydney" => [
        "population" => 5312163,
        "area" => 1687.0, 
        "country" => "Australia"
    ]
];


foreach ($cities as $city => $info) 
{
    echo "City: $city\n"."<br>";
    echo "  Population: " . number_format($info["population"]) . "\n" ."<br>";
    echo "  Area: " . number_format($info["area"], 2) . " square miles\n" ."<br>";
    echo "  Country: " . $info["country"] . "\n" ."<br>";
    echo "<br>"; 
}
?>
