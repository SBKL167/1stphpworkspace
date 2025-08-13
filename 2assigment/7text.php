<?php
for ($num = 1; $num <= 9; $num++) {
    echo "<b>Table of $num</b><br>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$num x $i = " . ($num * $i) . "<br>";
    }
    echo "<br>";
}
?>
