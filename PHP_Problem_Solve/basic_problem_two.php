
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
