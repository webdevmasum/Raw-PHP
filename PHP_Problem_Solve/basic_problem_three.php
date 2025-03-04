

✅ Problem 1: Check if a Number is Positive, Negative, or Zero
📌

    <?php
        function checkNumber($num) {
            return $num > 0 ? "Positive" : ($num < 0 ? "Negative" : "Zero");
        }

        // Test
        echo checkNumber(-5); // Output: Negative
    ?>