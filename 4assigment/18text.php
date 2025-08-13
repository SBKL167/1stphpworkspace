<?php
function countWords() {
    while (true) {
        $sentence = readline("Enter a sentence: ");
        
        if (!empty(trim($sentence))) {
            break;
        }
        echo "Sentence cannot be empty. Try again.\n";
    }

    $wordCount = str_word_count($sentence);
    $wordsArray = explode(" ", strtolower($sentence));
    $uniqueWords = array_unique($wordsArray);

    echo "Total words: $wordCount\n";
    echo "Unique words: " . implode(", ", $uniqueWords) . "\n";
}

countWords();
?>
