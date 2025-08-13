<?php
function formatMoney() {
    $amount = readline("Enter amount: ");
    if (!is_numeric($amount)) {
        echo "Error: Not a valid number." . PHP_EOL;
        return;
    }
    echo "Formatted Money: $" . number_format($amount, 0) . PHP_EOL;
}

formatMoney();
?>
