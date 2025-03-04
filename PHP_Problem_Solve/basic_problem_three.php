

✅ Problem 1: Check if a Number is Positive, Negative, or Zero
📌

    <?php
        function checkNumber($num) {
            return $num > 0 ? "Positive" : ($num < 0 ? "Negative" : "Zero");
        }

        // Test
        echo checkNumber(-5); // Output: Negative
    ?>



✅ Problem 2: Swap Two Variables Without Using a Third Variable

    <?php
        function swapNumbers(&$a, &$b) {
            $a = $a + $b;
            $b = $a - $b;
            $a = $a - $b;
        }

        // Test
        $a = 5; $b = 10;
        swapNumbers($a, $b);
        echo "a = $a, b = $b"; // Output: a = 10, b = 5
    ?>



✅ Problem 3: Check if a Number is Prime

    <?php
        function isPrime($num) {
            if ($num < 2) return "Not Prime";
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) return "Not Prime";
            }
            return "Prime";
        }

        // Test
        echo isPrime(7); // Output: Prime
    ?>




✅ Problem 4: Find the GCD (Greatest Common Divisor)

    <?php
        function gcd($a, $b) {
            while ($b != 0) {
                $temp = $b;
                $b = $a % $b;
                $a = $temp;
            }
            return $a;
        }

        // Test
        echo gcd(48, 18); // Output: 6
    ?>




✅
✅
✅
✅
✅
✅
✅
✅