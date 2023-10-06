<?php
$inputString = "Hello, World!";
$reversedString = "";
for ($i = strlen($inputString) - 1; $i >= 0; $i--) {
    $reversedString .= $inputString[$i];
}

echo "Original string: $inputString<br>";
echo "Reversed string: $reversedString";
?>
