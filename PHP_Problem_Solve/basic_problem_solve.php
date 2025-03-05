
✅ Problem 1: Check if a Number is a Perfect Square

    <?php
        function isPerfectSquare($num) {
            $sqrt = sqrt($num);
            return ($sqrt == floor($sqrt)) ? "Perfect Square" : "Not a Perfect Square";
        }

        // Test
        echo isPerfectSquare(25); // Output: Perfect Square
    ?>



✅ Problem 2: Convert Celsius to Fahrenheit

    <?php
        function celsiusToFahrenheit($celsius) {
            return ($celsius * 9/5) + 32;
        }

        // Test
        echo celsiusToFahrenheit(0); // Output: 32
    ?>


✅ Problem 3: Convert Fahrenheit to Celsius

    <?php
        function fahrenheitToCelsius($fahrenheit) {
            return ($fahrenheit - 32) * 5/9;
        }

        // Test
        echo fahrenheitToCelsius(98.6); // Output: 37
    ?>




✅Problem 4: Generate a Random Password

    <?php
        function generatePassword($length = 8) {
            $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()";
            $password = "";
            for ($i = 0; $i < $length; $i++) {
                $password .= $characters[rand(0, strlen($characters) - 1)];
            }
            return $password;
        }

        // Test
        echo generatePassword(12); // Output: Random 12-character password
    ?>


✅ Problem 5: Remove White Spaces from a String

    <?php
        function removeSpaces($str) {
            return preg_replace('/\s+/', '', $str);
        }

        // Test
        echo removeSpaces("Hello World!"); // Output: HelloWorld!
    ?>



✅ Problem 6: Reverse an Integer

    <?php
        function reverseInteger($num) {
            $reversed = (int) strrev((string) abs($num));
            return $num < 0 ? -$reversed : $reversed;
        }

        // Test
        echo reverseInteger(-12345); // Output: -54321
    ?>



✅ Problem 7: Check if Two Strings are Anagrams

    <?php
        function areAnagrams($str1, $str2) {
            return count_chars($str1, 1) === count_chars($str2, 1) ? "Anagrams" : "Not Anagrams";
        }

        // Test
        echo areAnagrams("listen", "silent"); // Output: Anagrams
    ?>




✅ Problem 8: Find the Missing Number in a Consecutive Array

    <?php
        function findMissingNumber($arr) {
            $n = count($arr) + 1;
            $expectedSum = ($n * ($n + 1)) / 2;
            return $expectedSum - array_sum($arr);
        }

        // Test
        echo findMissingNumber([1, 2, 3, 5]); // Output: 4
    ?>



✅Problem 9: Find the Most Frequent Element in an Array

    <?php
        function mostFrequentElement($arr) {
            $countValues = array_count_values($arr);
            arsort($countValues);
            return key($countValues);
        }

        // Test
        echo mostFrequentElement([1, 3, 3, 2, 3, 1, 1, 1, 4, 5]); // Output: 1
    ?>



✅ Problem 10: Count the Occurrence of Each Character in a String

    <?php
        function countCharacters($str) {
            return array_count_values(str_split($str));
        }

        // Test
        print_r(countCharacters("banana"));
        // Output: Array ( [b] => 1 [a] => 3 [n] => 2 )
    ?>



✅ Problem 11: Convert String to Title Case

    <?php
        function titleCase($str) {
            return ucwords(strtolower($str));
        }

        // Test
        echo titleCase("hello world"); // Output: Hello World
    ?>



✅ Problem 12: Merge Two Sorted Arrays

    <?php
        function mergeSortedArrays($arr1, $arr2) {
            return array_merge($arr1, $arr2);
        }

        // Test
        print_r(mergeSortedArrays([1, 3, 5], [2, 4, 6])); 
        // Output: [1, 3, 5, 2, 4, 6]
    ?>



✅ Problem 13: Check if All Elements in an Array are Unique

    <?php
        function areAllUnique($arr) {
            return count($arr) === count(array_unique($arr)) ? "Unique" : "Not Unique";
        }

        // Test
        echo areAllUnique([1, 2, 3, 4, 5]); // Output: Unique
        echo areAllUnique([1, 2, 3, 3, 5]); // Output: Not Unique
    ?>



✅
✅
✅
✅
✅
✅
✅
✅