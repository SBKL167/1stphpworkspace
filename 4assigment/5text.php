<?php
function checkNameLength() {
    try {
        $name = readline("Enter your name: ");
        if (trim($name) === "") {
            throw new Exception("Name cannot be empty.");
        }
        echo "Length of name: " . strlen($name) . PHP_EOL;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . PHP_EOL;
    }
}

checkNameLength();
?>
