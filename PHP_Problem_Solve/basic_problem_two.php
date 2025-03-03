
✅ Problem 1: Check if a Number is Even or Odd


    <?php
        function checkEvenOdd($num) {
            if ($num % 2 == 0) {
                return "$num is Even";
            } else {
                return "$num is Odd";
            }
        }

        // Test
        echo checkEvenOdd(10); // Output: 10 is Even
    ?>


✅ Problem 2: Find the Largest of Two Numbers


    <?php
        function findLargest($num1, $num2) {
            if ($num1 > $num2) {
                return "$num1 is the largest.";
            } else if ($num1 < $num2) {
                return "$num2 is the largest.";
            } else {
                return "Both numbers are equal.";
            }
        }

        // Test
        echo findLargest(10, 20); // Output: 20 is the largest.
    ?>



✅ Problem 3: Sum of Numbers in an Array


    <?php
        function sumOfArray($arr) {
            $sum = 0;
            foreach ($arr as $num) {
                $sum += $num;
            }
            return $sum;
        }

        // Test
        echo sumOfArray([1, 2, 3, 4, 5]); // Output: 15
    ?>



✅ Problem 4: Factorial of a Number

    <?php
        function factorial($num) {
            $factorial = 1;
            for ($i = 1; $i <= $num; $i++) {
                $factorial *= $i;
            }
            return $factorial;
        }

        // Test
        echo factorial(5); // Output: 120
    ?>




























