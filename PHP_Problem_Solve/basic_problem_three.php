

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




✅ Problem 5: Check if a Year is a Leap Year

    <?php
        function isLeapYear($year) {
            return ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0) ? "Leap Year" : "Not a Leap Year";
        }

        // Test
        echo isLeapYear(2024); // Output: Leap Year
    ?>




✅ Problem 6: Find the Second Largest Number in an Array

    <?php
        function secondLargest($arr) {
            $uniqueArr = array_unique($arr);
            rsort($uniqueArr);
            return $uniqueArr[1] ?? "Array has no second largest number";
        }

        // Test
        echo secondLargest([10, 20, 4, 45, 99, 99]); // Output: 45
    ?>




✅ Problem 7: Count the Number of Words in a String

    <?php
        function wordCount($str) {
            return str_word_count($str);
        }

        // Test
        echo wordCount("Hello world, this is PHP!"); // Output: 5
    ?>




✅ Problem 8: Reverse an Array Without Using Built-in Functions

    <?php
        function reverseArray($arr) {
            $reversed = [];
            for ($i = count($arr) - 1; $i >= 0; $i--) {
                $reversed[] = $arr[$i];
            }
            return $reversed;
        }

        // Test
        print_r(reverseArray([1, 2, 3, 4, 5])); 
        // Output: [5, 4, 3, 2, 1]
    ?>



✅ Problem 9: Find the Largest Number in an Array

    <?php
        function findLargestInArray($arr) {
            return max($arr);
        }

        // Test
        echo findLargestInArray([1, 5, 3, 9, 2]); // Output: 9
    ?>




✅ Problem 10: Find the Smallest Number in an Array

    <?php
        function findSmallestInArray($arr) {
            return min($arr);
        }

        // Test
        echo findSmallestInArray([1, 5, 3, 9, 2]); // Output: 1
    ?>

