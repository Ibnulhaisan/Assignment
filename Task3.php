<?php
$first = 0;
$second = 1;

echo "First 10 Fibonacci numbers less than or equal to 100:\n";

for ($i = 0; $i < 10; $i++) {
   
    $next = $first + $second;

    if ($next > 100) {
        break; 
    }
    echo $next . ' ';

    $first = $second;
    $second = $next;

}
?>
