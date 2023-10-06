<?php
$myArray = array("apple", "banana", "cherry", "date", "fig");

$length = count($myArray);
for ($i = $length - 1; $i >= 0; $i--) {
    echo $myArray[$i] . "<br>";
}
?>
