<?php
function quietMessage() {
    try {
        $msg = readline("Enter a message: ");
        if (trim($msg) === "") {
            throw new Exception("Message cannot be empty.");
        }
        echo "Lowercase message: " . strtolower($msg) . PHP_EOL;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . PHP_EOL;
    }
}

quietMessage();
?>
