<?php 
$role = "Hello";

switch ($role) {
case "admin":
    echo " Role: " .  $role . "</br>";
    echo "</br>";
        echo "Permission:" . "</br>";
        echo " - Manage Courses  " . "</br>";
        echo " - Grade Students " . "</br>";
        echo " - View Reports " . "</br>";

    $permission = "Full Access";
break;
case "teacher":
    echo " Role: " .  $role . "</br>";
    echo "</br>";
      echo "Permission:" . "</br>";
        echo " - Give assignments and homework." . "</br>";
        echo " - Explain lessons and answer questions." . "</br>";
        echo " - Teach students new knowledge and skills." . "</br>";
        echo " - Help students learn and improve." . "</br>";
            

    $permission = "Manage Students";
break;
case "student":
    echo " Role: " .  $role . "</br>";
    echo "</br>";
        echo "Permission:" . "</br>";
        echo " - Increase knowledge." . "</br>";
        echo " - Improve skills." . "</br>";
        echo " - Help you understand new things. " . "</br>";
    

    $permission = "study";
break;
case "guest":
    echo " Role: " .  $role . "</br>";
        echo "</br>";
        echo "Permission:" . "</br>";
        echo " - Visit a place." . "</br>";
        echo " - Attend an event." . "</br>";
        echo " - Use services provided to visitors. " . "</br>";
    
    $permission = "user";
break;
default:
 echo " Role: " .  $role . "</br>";
        echo "</br>";
        echo "Permission:" . "</br>";
        echo " - empty" . "</br>";
        echo " - empty" . "</br>";
        echo " - empty " . "</br>";
break;        
}


?>