<?php
$fruits = array("1.apple","2.banana","3.cherry","4.mango","5.orange");

$fruits[]="6.pineapple";
$fruits[]="7.grapes";

array_shift($fruits);

print_r($fruits);
?>