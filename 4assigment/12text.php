<?php
function cleanInput() {
    try {
        $name = readline("Enter your name: ");
        $name = trim($name);
        if ($name === "") {
            throw new Exception("Name cannot be empty after trimming.");
        }
        echo "Cleaned Name: $name" . PHP_EOL;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . PHP_EOL;
    }
}

cleanInput();
?>
