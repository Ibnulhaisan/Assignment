<?php

function printFibonacci($n) {
    $first = 0;
    $second = 1;
    
    echo "First $n Fibonacci numbers:\n";

    for ($i = 0; $i < $n; $i++) {
        echo $first . ' ';

        $next = $first + $second;

        $first = $second;
        $second = $next;
    }
}

printFibonacci(15);
?>
