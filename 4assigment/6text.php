<?php
function shoutCity() {
    $city = readline("Enter city name: ");
    echo "City in uppercase: " . strtoupper($city) . PHP_EOL;
}

shoutCity();
?>
