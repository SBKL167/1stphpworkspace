<?php
function validateUsername() {
    try {
        $username = readline("Enter username: ");
        if (strlen($username) < 5 || strlen($username) > 20) {
            throw new Exception("Username must be 5-20 characters long.");
        }
        if (str_contains($username, " ")) {
            throw new Exception("Username cannot contain spaces.");
        }
        echo "Username is valid." . PHP_EOL;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . PHP_EOL;
    }
}

validateUsername();
?>
