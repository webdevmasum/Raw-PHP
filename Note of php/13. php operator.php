1️⃣ Arithmetic Operators


    <?php
        $a = 10;
        $b = 5;

        echo $a + $b;  // Output: 15
        echo $a - $b;  // Output: 5
        echo $a * $b;  // Output: 50
        echo $a / $b;  // Output: 2
        echo $a % $b;  // Output: 0
    ?>


2️⃣ Assignment Operators

    <?php
        $a = 10;
        $a += 5;  // $a = $a + 5, now $a is 15
        $a *= 2;  // $a = $a * 2, now $a is 30
        echo $a;  // Output: 30
    ?>



3️⃣ Comparison Operators

    <?php
        $a = 10;
        $b = 5;

        echo $a == $b;  // Output: false
        echo $a !== $b;  // Output: true
    ?>


4️⃣ Increment/Decrement Operators


    <?php
        $a = 10;
        $a++;  // Post-increment, $a becomes 11 after this
        ++$a;  // Pre-increment, $a becomes 12 before using it
        echo $a;  // Output: 12
    ?>



1️⃣ Pre-Increment (++$a)

    <?php
        $a = 5;
        echo ++$a; // Output: 6
    ?>


2️⃣ Post-Increment ($a++)

    <?php
        $a = 5;
        echo $a++; // Output: 5 (puro line execute howar por $a = 6 hobe)
        echo "<br>";
        echo $a; // Output: 6
    ?>


4️⃣ Post-Decrement ($a--)

    <?php
        $a = 5;
        echo $a--; // Output: 5 (puro line execute howar por $a = 4 hobe)
        echo "<br>";
        echo $a; // Output: 4
    ?>


🔹 Example: Pre vs Post Decrement

    <?php
        $a = 5;
        echo --$a; // Output: 4 (age komay, pore print kore)
        echo "<br>";
        echo $a; // Output: 4

        $b = 5;
        echo "<br>";
        echo $b--; // Output: 5 (age print kore, pore komay)
        echo "<br>";
        echo $b; // Output: 4
    ?>




5️⃣ Logical Operators

    <?php
        $a = true;
        $b = false;

        echo $a && $b;  // Output: false
        echo $a || $b;  // Output: true
        echo !$a;       // Output: false
    ?>



6️⃣ String Operators


    <?php
        $a = "Hello";
        $b = "World";

        echo $a . " " . $b;  // Output: Hello World

        $a .= " Everyone";   // $a = $a . " Everyone"
        echo $a;  // Output: Hello Everyone
    ?>


7️⃣ Array Operators

    <?php
        $a = array("a" => "apple", "b" => "banana");
        $b = array("a" => "apple", "c" => "cherry");

        print_r($a + $b);  // Output: Union of $a and $b arrays

        echo ($a == $b);  // Output: false
    ?>



9️⃣ Ternary (Conditional) Operator

    condition ? expr_if_true : expr_if_false;

    <?php
        $a = 10;
        $b = 5;
        $result = ($a > $b) ? "Greater" : "Smaller";  // Checks if $a > $b
        echo $result;  // Output: Greater
    ?>


🔟 Type Operators

    <?php
        class MyClass {}
        $obj = new MyClass();

        echo ($obj instanceof MyClass);  // Output: true
    ?>



