

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



✅
✅
✅
✅
✅
✅
✅
✅
✅
✅