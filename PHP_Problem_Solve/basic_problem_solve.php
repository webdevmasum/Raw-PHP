
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




✅Problem 14: Generate a Random Password

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
✅
✅
✅
✅
✅
✅
✅