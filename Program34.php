<?php
$inputString = "Hello, World!";

$noWhiteSpaceString = str_replace(' ', '', $inputString);

echo "Original string: $inputString<br>";
echo "String with white spaces removed: $noWhiteSpaceString";
?>
