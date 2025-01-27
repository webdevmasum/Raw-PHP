1. for loop Example:

    <?php
        for($i = 1; $i <= 5; $i++) {
            echo "For Loop: " . $i . "<br>";
        }
    ?>

    Explanation:
        $i = 1: Loop shuru hobe 1 theke.
        $i <= 5: Loop cholbe jokhon $i 5 er equal ba less thakbe.
        $i++: Prottek iteration er por $i barabe.

    Output:
        For Loop: 1
        For Loop: 2
        For Loop: 3
        For Loop: 4
        For Loop: 5

2. while loop Example:

    <?php
        $i = 1;
        while($i <= 5) {
            echo "While Loop: " . $i . "<br>";
            $i++;
        }
    ?>

    Explanation:
        $i = 1: Loop shuru hobe 1 theke.
        while($i <= 5): Loop cholbe jokhon $i 5 er equal ba less thakbe.
        $i++: Prottek iteration er por $i barabe.

    Output:
        While Loop: 1
        While Loop: 2
        While Loop: 3
        While Loop: 4
        While Loop: 5

3. do-while loop Example:

    <?php
        $i = 1;
        do {
            echo "Do-While Loop: " . $i . "<br>";
            $i++;
        } while($i <= 5);
    ?>

    Explanation:
        $i = 1: Loop shuru hobe 1 theke.
        do { ... } while($i <= 5): Prothome ekbar loop cholbe, tarpor condition check hobe.

    Output:
        Do-While Loop: 1
        Do-While Loop: 2
        Do-While Loop: 3
        Do-While Loop: 4
        Do-While Loop: 5

4. foreach loop (for array) Example:

    <?php
        $fruits = ["apple", "banana", "cherry"];
        foreach($fruits as $fruit) {
            echo "Fruit: " . $fruit . "<br>";
        }
    ?>

    Explanation:
        $fruits = ["apple", "banana", "cherry"]: Array define kora hoyeche.
        foreach($fruits as $fruit): Prottek element loop er moddhe fruit variable e assign hobe.

    Output:
        Fruit: apple
        Fruit: banana
        Fruit: cherry

5. Nested for loop Example (Loop inside another loop):

    <?php
        for($i = 1; $i <= 3; $i++) {
            for($j = 1; $j <= 2; $j++) {
                echo "i = $i, j = $j<br>";
            }
        }
    ?>

    Explanation:
        Outer loop $i 1 theke 3 porjonto iterate korbe.
        Inner loop $j 1 theke 2 porjonto iterate korbe prottek outer loop er iteration er jonno.

    Output:
        i = 1, j = 1
        i = 1, j = 2
        i = 2, j = 1
        i = 2, j = 2
        i = 3, j = 1
        i = 3, j = 2

    Summary:
        for loop: Fixed number of iterations.
        while loop: Condition check kore, jokhon condition true thake loop cholbe.
        do-while loop: First ekbar loop cholbe, tarpor condition check hobe.
        foreach loop: Array ba object er upor iterate korar jonno.
        Nested loop: Ek loop er moddhe onno loop chalano.



