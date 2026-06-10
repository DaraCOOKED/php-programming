<?php 
// ex 6
$password = "12345";

var_dump($password == "12345"); 
echo "</br>";
var_dump($password === 12345);
echo "</br>" . "== compares only the values and allows   type conversion. 
                === compares both the value and the data type, so it is stricter than ==.";


?>