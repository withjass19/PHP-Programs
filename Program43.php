<?php
$numbers = array(34, 12, 67, 45, 90, 23, 1, 76, 9);
rsort($numbers);
echo "Sorted array in descending order: ";
foreach ($numbers as $number) {
    echo $number . " ";
}
?>
