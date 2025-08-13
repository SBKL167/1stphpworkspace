<?php
function addToCart() {
    try {
        $item = readline("Enter an item to add to the shopping list: ");
        if (trim($item) === "") {
            throw new Exception("Item name cannot be empty.");
        }
        $shoppingList = [];
        array_push($shoppingList, $item);
        echo "Shopping List: " . implode(", ", $shoppingList) . PHP_EOL;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . PHP_EOL;
    }
}

addToCart();
?>
