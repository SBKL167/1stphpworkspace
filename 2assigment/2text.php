<?php
$char = 'a';
$char = strtolower($char);

if (in_array($char, ['a', 'e', 'i', 'o', 'u'])) {
    echo "$char is a vowel";
} else {
    echo "$char is a consonant";
}
?>
