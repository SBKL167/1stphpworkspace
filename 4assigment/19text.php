<?php
function reverseWords() {
    $sentence = readline("Enter a sentence: ");
    $words = explode(" ", $sentence);

    for ($i = 0; $i < count($words); $i++) {
        $words[$i] = strrev($words[$i]);
    }

    $reversedSentence = implode(" ", $words);
    echo "Reversed words: $reversedSentence\n";
}

reverseWords();
?>
