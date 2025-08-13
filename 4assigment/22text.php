<?php
function findEmailSeparator() {
    try {
        $email = readline("Enter email: ");
        
        if (empty($email)) {
            throw new Exception("Email cannot be empty.");
        }

        $pos = strpos($email, "@");

        if ($pos === false) {
            throw new Exception("No '@' found in email.");
        }

        echo "The '@' symbol is at position: $pos\n";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

findEmailSeparator();
?>
