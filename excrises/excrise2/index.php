<?php

$xp = 150;
$bonus = 50;

$totalXP = $xp + $bonus;

$doubleXP = $totalXP * 2;

$xpPower = $totalXP ** 2;

echo "Original XP: " . $xp . "<br>";
echo "Bonus XP: " . $bonus . "<br>";
echo "Total XP: " . $totalXP . "<br>";
echo "X2 XP: " . $doubleXP . "<br>";
echo "XP Power: " . $xpPower;

?>