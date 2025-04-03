<?php
// Generate a random string of 5 characters using ASCII values
$string = substr(chr(random(1024)), 0, 5);
echo $string;
?>
