<?php

# This is a single line comment

// This is a single line comment

/*
This is a 
multi-line
comment
*/

#to declare a variable in php we use $variable_name
$a = 10;
$b = 20;
$c = "Hello";
$d = "World";


echo "printing a variable in php<br>";
echo ($a."<br>");
echo ($b."<br>");
echo "<br>";

echo "concatenating two strings in php<br>";
echo ($c.$d."<br>"); 
echo "<br>";

#declaring a function in php
function add($x, $y) {
  return ($x + $y."<br>");
}

echo "calling a function in php<br>";
echo add(10, 20);
echo "<br>";


echo "for loop in php<br>";
for ($i = 0; $i < 10; $i++) {
  echo ($i."<br>");
}
echo "<br>";

echo "while loop in php<br>";
$i = 0;
while ($i < 10) {
  echo ($i."<br>");
  $i++;
}
echo "<br>";

echo "if statement in php<br>";
if ($a > $b) {
  echo ("a is greater than b"."<br>");
} else {
  echo ("b is greater than a"."<br>");
}
echo "<br>";

echo "switch statement in php<br>";
switch ($a) {
  case 10:
    echo ("a is 10"."<br>");
    break;
  case 20:
    echo ("a is 20"."<br>");
    break;
  default:
    echo ("a is not 10 or 20"."<br>");
    break;
}
echo "<br>";

echo "array in php<br>";
$arr = array("a", "b", "c");
echo ($arr[0]."<br>");
echo ($arr[2]."<br>");
echo "<br>";