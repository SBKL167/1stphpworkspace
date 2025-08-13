<?php
function checkUrlPrefix() {
    try {
        $url = readline("Enter URL: ");
        
        if (empty($url)) {
            throw new Exception("URL cannot be empty.");
        }

        if (!str_starts_with($url, "https://")) {
            throw new Exception("URL must start with 'https://'.");
        }

        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new Exception("Invalid URL format.");
        }

        echo "Valid HTTPS URL: $url\n";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

checkUrlPrefix();
?>
