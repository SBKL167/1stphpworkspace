<?php
function formatPhoneNumber() {
    $phone = readline("Enter 10-digit phone number: ");
    $phone = trim($phone);
    if (strlen($phone) !== 10 || !is_numeric($phone)) {
        echo "Error: Phone number must be exactly 10 digits." . PHP_EOL;
        return;
    }
    $formatted = "(" . substr($phone, 0, 3) . ") " . substr($phone, 3, 3) . "-" . substr($phone, 6);
    echo "Formatted Phone: $formatted" . PHP_EOL;
}

formatPhoneNumber();
?>
