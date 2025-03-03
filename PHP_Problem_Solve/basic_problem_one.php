📌Simple & Easy Pyramid Solution in PHP


    <?php
        function simplePyramid($n)
        {
            for ($i = 1; $i <= $n; $i++) {
                echo str_repeat(" ", $n - $i); // Space print korbo
                echo str_repeat("*", 2 * $i - 1) . "\n"; // Star print korbo
            }
        }

        // Test
        simplePyramid(5);
    ?>



✅Output:

*
***
*****
*******
*********



✅ Best Practice Pyramid Code in PHP

    <?php
        function printPyramid(int $rows): void
        {
            if ($rows <= 0) {
                echo "Rows should be greater than 0.\n";
                return;
            }

            for ($i = 1; $i <= $rows; $i++) {
                echo str_repeat(" ", $rows - $i); // Proper spacing
                echo str_repeat("*", 2 * $i - 1); // Pyramid stars
                echo PHP_EOL; // New line (Best practice over "\n")
            }
        }

        // Example usage
        $rows = 5; // Change this for different sizes
        printPyramid($rows);
    ?>

