************************
Prime Number: Different Way to check prime number
************************


<?php
    function isPrime($num) {
        if ($num < 2) return false; // 0 & 1 prime na
        if ($num == 2) return true; // 2 ekta prime number
        if ($num % 2 == 0) return false; // Even number prime na (except 2)

        for ($i = 3; $i <= sqrt($num); $i += 2) { // Only odd numbers check
            if ($num % $i == 0) return false;
        }
        return true;
    }

    // 1-100 er prime number print
    function printPrimeNumbers($start, $end) {
        for ($num = $start; $num <= $end; $num++) {
            if (isPrime($num)) {
                echo $num . " ";
            }
        }
    }

    echo "Prime Numbers between 1 to 100:\n";
    printPrimeNumbers(1, 100);
?>












