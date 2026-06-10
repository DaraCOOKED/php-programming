<?php 
$menu = "Burger";




switch ($menu) {
    case "Burger":
    $price = 5;
    
    echo "Selected Menu:" . $menu;
    echo "</br>";
    echo "Price: = " . $price; "$ ";
    break;
    case "Pizza":
    $price = 8;
    echo "Selected Menu:" . $menu;
    echo "Price: = " . $price; "$";
    break;
    case "Coffee":
    $price = 2;
    echo "Selected Menu:" . $menu;
    echo "Price: = " . $price; "$";

}


?>