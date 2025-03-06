

1️⃣ Local Scope

    Jokhon ekta variable ekta function er vitor declare kora hoy, tokhon sheta sudhu oi function er moddhei access kora jay. Function er baire access kora jabe na.
    🔹 Example:

    <?php
        function myFunction() {
            $x = 10; // Local Scope
            echo $x; // Works fine
        }

        myFunction();
        echo $x; // Error: Undefined variable
    ?>




2️⃣ Global Scope

    Jokhon ekta variable function er baire declare kora hoy, tokhon sheta global variable hoy. Function er vitor theke direct access kora jabe na, unless global keyword ba $GLOBALS array use kora hoy.
    🔹 Example:


    <?php
        $x = 50; // Global Scope

        function myFunctiontwo() {
            global $x; // Using global keyword
            echo $x;
        }

        myFunctiontwo(); // Output: 50
    ?>



    🔹 Alternative Way ($GLOBALS Array):


    <?php
        $x = 100;

        function myFunctiontwos() {
            echo $GLOBALS['x']; // Accessing global variable
        }

        myFunctiontwos(); // Output: 100
    ?>










