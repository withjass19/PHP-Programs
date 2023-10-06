<?php
function isPalindrome($str) {
    $str = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $str));
    
    $reverseStr = strrev($str);

    return $str === $reverseStr;
}

$inputString = "A man, a plan, a canal, Panama"; 

if (isPalindrome($inputString)) {
    echo "The string '$inputString' is a palindrome.";
} else {
    echo "The string '$inputString' is not a palindrome.";
}
?>
