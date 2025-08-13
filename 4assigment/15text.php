<?php
function processTags() {
    $tags = readline("Enter comma-separated tags: ");
    $tagArray = explode(",", $tags);
    foreach ($tagArray as &$tag) {
        $tag = "#" . trim($tag);
    }
    echo "Hashtags: " . implode(" ", $tagArray) . PHP_EOL;
}

processTags();
?>
