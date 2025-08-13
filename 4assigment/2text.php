<?php
function removeLastTask() {
    try {
        $tasks = ["Homework", "Cleaning"];
        if (empty($tasks)) {
            throw new Exception("No tasks to remove.");
        }
        $removed = array_pop($tasks);
        echo "Removed Task: $removed" . PHP_EOL;
        echo "Remaining Tasks: " . implode(", ", $tasks) . PHP_EOL;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . PHP_EOL;
    }
}

removeLastTask();
?>
