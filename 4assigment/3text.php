<?php
function combineLists() {
    $fruits = ["Apple", "Banana"];
    $veggies = ["Carrot", "Tomato"];
    $combined = array_merge($fruits, $veggies);
    echo "Combined List: " . implode(", ", $combined) . PHP_EOL;
}

combineLists();
?>
