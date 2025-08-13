<?php
function getFirstLetters() {
    try {
        $word = readline("Enter a word: ");
        if (strlen($word) < 3) {
            throw new Exception("Word must be at least 3 letters long.");
        }
        echo "First 3 letters: " . substr($word, 0, 3) . PHP_EOL;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . PHP_EOL;
    }
}

getFirstLetters();
?>
