<?php
$inputString = "Hello, World!";

$inputString = strtolower($inputString);

$vowelCount = 0;

for ($i = 0; $i < strlen($inputString); $i++) {
    $char = $inputString[$i];
    if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u') {
        $vowelCount++;
    }
}
echo "The total number of vowels in the string is: $vowelCount";
?>
