<?php
$myArray = array(1, 2, 3, 2, 4, 5, 3, 6, 7, 7);

$duplicateElements = array();

$uniqueElements = array();

foreach ($myArray as $element) {
    if (!in_array($element, $uniqueElements)) {
        $uniqueElements[] = $element;
    } else {
        if (!in_array($element, $duplicateElements)) {
            $duplicateElements[] = $element;
        }
    }
}
echo "Duplicate elements in the array: ";
foreach ($duplicateElements as $element) {
    echo $element . " ";
}
?>
