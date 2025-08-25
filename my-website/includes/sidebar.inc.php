<?php
// sidebar.inc.php
$hour = date('H');
if ($hour < 12) {
    $greeting = "Good Morning!";
} elseif ($hour < 18) {
    $greeting = "Good Afternoon!";
} else {
    $greeting = "Good Evening!";
}
?>
<aside>
    <h3>Side Navigation</h3>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><?php echo $greeting; ?></li>
    </ul>
</aside>
