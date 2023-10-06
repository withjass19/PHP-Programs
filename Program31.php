<?php
$inputString = "Hello, World!";

$charCount = 0;

for ($i = 0; $i < strlen($inputString); $i++) {
    if ($inputString[$i] !== ' ') {
        $charCount++;
    }
}

echo "The total number of characters (excluding blank spaces) in the string is: $charCount";
?>
