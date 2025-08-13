<?php
function getEmailDomain() {
    $email = readline("Enter email: ");

    if (!str_contains($email, "@")) {
        echo "Invalid email: Missing '@' symbol.\n";
        return;
    }

    $parts = explode("@", $email);
    $domain = $parts[1] ?? '';

    echo "Domain: $domain\n";
}

getEmailDomain();
?>
