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





************************
Prime Number: Another Way to check prime number
************************

    <?php
    function printPrimeNumbers($start, $end) {
        for ($num = $start; $num <= $end; $num++) {
            if (gmp_prob_prime($num) > 0) {
                echo $num . " ";
            }
        }
    }

    echo "Prime Numbers between 1 to 100:\n";
    printPrimeNumbers(1, 100);
?>


Explain here:->

<?php
// printPrimeNumbers function ta prime numbers print korbe je start theke end porjonto
    function printPrimeNumbers($start, $end) {
        // num ke start theke end porjonto iterate kora hocche
        for ($num = $start; $num <= $end; $num++) {
            // gmp_prob_prime function diye check kora hocche je num ta prime kina
            // jodi prime hoy tahole 1 er beshi return kore, sei khetre number ta print hobe
            if (gmp_prob_prime($num) > 0) {
                // prime number ta print korche
                echo $num . " ";
            }
        }
    }

    // ekhon function ta call kora hocche, jekhane prime numbers 1 theke 100 er moddhe print korbe
    echo "Prime Numbers between 1 to 100:\n"; 
    printPrimeNumbers(1, 100);  // 1 theke 100 er moddhe prime numbers print korbe
?>






