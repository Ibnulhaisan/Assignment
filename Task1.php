<?php
function printEvenNumbersWithForLoop($start, $end, $step) {
    echo "Using for loop:\n";
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . ' ';
    }
    echo "\n";
}

printEvenNumbersWithForLoop(2, 20, 2);

function printEvenNumbersWithWhileLoop($start, $end, $step) {
    echo "Using while loop:\n";
    while ($start <= $end) {
        echo $start . ' ';
        $start += $step;
    }
    echo "\n";
}

printEvenNumbersWithWhileLoop(2, 20, 2);

function printEvenNumbersWithDoWhileLoop($start, $end, $step) {
    echo "Using do-while loop:\n";
    do {
        echo $start . ' ';
        $start += $step;
    } while ($start <= $end);
    echo "\n";
}

printEvenNumbersWithDoWhileLoop(2, 20, 2);
?>

