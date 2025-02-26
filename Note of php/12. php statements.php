1️⃣ Basic PHP Statement:

    <?php
        echo "Hello, World!";  // Output: Hello, World!
    ?>



2️⃣ Assignment Statement:

    <?php
        $age = 25;  // Assigning value 25 to the variable $age
    ?>



3️⃣ Expression Statement:


    <?php
        $total = $price * $quantity;  // Multiplying price and quantity and storing the result in $total
    ?>



4️⃣ Control Structure Statement:

    <?php
        if ($age > 18) {
            echo "You are an adult.";
        } else {
            echo "You are a minor.";
        }
    ?>



5️⃣ Function Call Statement:

    <?php
        echo "Hello, PHP!";  // Calling the built-in echo function to print text
    ?>



6️⃣ Loop Statement:


    <?php
        for ($i = 0; $i < 5; $i++) {
            echo "Number: $i<br>";
        }
    ?>



7️⃣ Break and Continue Statements:


    <?php
        for ($i = 0; $i < 10; $i++) {
            if ($i == 5) {
                break;  // Exits the loop when $i is 5
            }
            echo $i . "<br>";
        }
    ?>


8️⃣ Return Statement:

    <?php
        function add($a, $b)
        {
            return $a + $b;  // Returning the sum of $a and $b
        }
        echo add(5, 3);  // Output: 8
    ?>



9️⃣ Multiple Statements:

    <?php
        $x = 10;
        $y = 20;
        echo $x + $y;
    ?>


🔹 Empty Statement

    <?php
        for ($i = 0; $i < 10; $i++);  // Empty loop body
    ?>


🔹 Global Statement

    <?php
    $x = 10;

    function myFunction()
    {
        global $x;  // Access global variable $x inside the function
        echo $x;
    }

    myFunction();  // Output: 10
    ?>




🔹 Include and Require Statements

    include ar require statement use kora hoy external PHP files ke include korte. Difference holo, require jodi file missing thake, tahole fatal error dekhay, kintu include warning dey.


    <?php
    include 'header.php';  // Including header.php file
    ?>

    <?php
    require 'config.php';  // Requiring config.php file
    ?>


🔹 Include_once and Require_once Statements

    include_once ar require_once same include ar require statement, kintu ei statement gulo make sure kore je file only once include kora hobe, jate duplicate include na hoy.

    <?php
        include_once 'header.php';  // Includes only once
    ?>



🔹 Switch Statement

    <?php
    $day = 2;

    switch ($day) {
        case 1:
            echo "Monday";
            break;
        case 2:
            echo "Tuesday";
            break;
        case 3:
            echo "Wednesday";
            break;
        default:
            echo "Invalid day";
    }
    ?>