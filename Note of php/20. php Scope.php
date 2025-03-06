

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













