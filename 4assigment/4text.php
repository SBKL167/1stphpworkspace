<?php
function findStudent() {
    try {
        $students = ["Ali", "Sara", "John"];
        $name = readline("Enter student name to search: ");
        $key = array_search($name, $students);
        if ($key === false) {
            throw new Exception("Student not found.");
        }
        echo "Student '$name' found at index $key" . PHP_EOL;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . PHP_EOL;
    }
}

findStudent();
?>
