<?php

$sum = 0;

for ($x = 1; $x <= 30; $x++) {
    
    if ($x % 2 == 0) {
        
        $sum += $x;
    }
}
echo "The sum of all even integers between 1 and 30 is: " . $sum;


?>