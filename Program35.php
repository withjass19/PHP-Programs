<?php
$inputString = "Hello, World!";

$swappedCaseString = "";

for ($i = 0; $i < strlen($inputString); $i++) {
    $char = $inputString[$i];
    if (ctype_lower($char)) {
        $swappedCaseString .= strtoupper($char); 
    } else {
        $swappedCaseString .= strtolower($char); 
    }
}
echo "Original string: $inputString<br>";
echo "String with swapped case: $swappedCaseString";
?>
