<?php
function printEvenNumbersWithForLoop($start, $end, $step) {
    echo "Using for loop:\n";
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . ' ';
    }
    echo "\n";
}

printEvenNumbersWithForLoop(2, 20, 2);
?>

