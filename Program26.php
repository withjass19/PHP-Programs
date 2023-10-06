<?php
function sumOfNaturalNumbers($n) {
    $sum = 0;

    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }

    return $sum;
}

$number = 10;
$sum = sumOfNaturalNumbers($number);

echo "The sum of the first $number natural numbers is: $sum";
?>
