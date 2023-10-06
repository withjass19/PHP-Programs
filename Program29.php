<?php
function fibonacci($n) {
    if ($n <= 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        return (fibonacci($n - 1) + fibonacci($n - 2));
    }
}

$count = 12;

echo "The first $count Fibonacci numbers are: ";

for ($i = 0; $i < $count; $i++) {
    echo fibonacci($i) . " ";
}
?>
