<?php
function printEvenNumbers($start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}

printEvenNumbers(1, 20);
?>
