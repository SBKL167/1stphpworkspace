<?php
function formatName() {
    $name = readline("Enter name: ");
    $formatted = ucwords(strtolower($name));

    echo "Formatted name: $formatted\n";

    $feedback = match (true) {
        $name === $formatted => "Already in correct format.",
        default => "Name has been formatted.",
    };

    echo $feedback . "\n";
}

formatName();
?>
