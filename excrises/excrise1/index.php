<?php 


$pizzaPrice = 12;
$numberOfFriends = 4;


$total = $pizzaPrice * 2 * $numberOfFriends;
$payEqual = $total / $numberOfFriends;


$money = 50;
$numberOfFriends = 4;
$remainder = $money % $numberOfFriends;

echo "Total Money: $" . $money . "<br>";
echo "Number of Friends: " . $numberOfFriends . "<br>";
echo "Remainder: $" . $remainder;
echo "Pizza Price: $" . $pizzaPrice . "<br>";
echo "Number of Friends: " . $numberOfFriends . "<br>";
echo "Total Payment: $" . $total . "<br>";
echo "Pay for each: $" . $payEqual;