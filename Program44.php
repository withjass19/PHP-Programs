<?php
$numbers = array(34, 12, 67, 45, 90, 23, 1, 76, 9);
sort($numbers);

echo "Sorted array in ascending order: ";
foreach ($numbers as $number) {
    echo $number . " ";
}
?>
