<?php
function rollDice() {
    $roll = rand(1, 6);
    echo "You rolled: $roll 🎲" . PHP_EOL;
}

rollDice();
?>
