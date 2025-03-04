

🔹 Basic Function likha

    <?php
        function sayHello() {
            echo "Hello, World!";
        }

        // Function call
        sayHello();
    ?>

    Output: Hello, World!



🔹 Function with Parameters    


    <?php
        function greet($name) {
            echo "Hello, $name!";
        }

        // Function call
        greet("Rahim");
    ?>

Output: Hello, Rahim!


🔹 Function with Return Value


    <?php
        function add($a, $b) {
            return $a + $b;
        }

        // Function call & output
        $result = add(5, 10);
        echo "Sum: " . $result;
    ?>

Output: Sum: 15




🔹 Default Parameter Function


    <?php
        function welcome($name = "Guest") {
            echo "Welcome, $name!";
        }

        // Function call
        welcome(); // Default value use hobe
        welcome("Karim");
    ?>

Output: Welcome, Guest
Welcome, Karim







