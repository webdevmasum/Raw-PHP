
✅ Problem 1: Check if a Number is a Perfect Square

    <?php
        function isPerfectSquare($num) {
            $sqrt = sqrt($num);
            return ($sqrt == floor($sqrt)) ? "Perfect Square" : "Not a Perfect Square";
        }

        // Test
        echo isPerfectSquare(25); // Output: Perfect Square
    ?>