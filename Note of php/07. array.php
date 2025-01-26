
*****************
Kind of array
*****************

1. Indexed Arrays
These arrays use numeric indexes to access the elements. The indexes start from 0 by default but can be manually changed.

Example:

    <?php
    $fruits = array("Apple", "Banana", "Orange");
    echo $fruits[0];  // Output: Apple

        // You can also create an indexed array using shorthand syntax:
    $fruits = ["Apple", "Banana", "Orange"];
    ?>


2. Associative Arrays
These arrays use named keys (strings) to access the values instead of numeric indexes. Associative arrays allow you to store data with meaningful keys.

Example:

    <?php
    $person = array("name" => "John", "age" => 25, "city" => "New York");
    echo $person["name"];  // Output: John

        // You can also use shorthand for associative arrays:
        $person = ["name" => "John", "age" => 25, "city" => "New York"];
    ?>


3. Multidimensional Arrays
A multidimensional array is an array containing one or more arrays. This allows you to create arrays with multiple levels.

Example:

    <?php
    $contacts = array(
        array("name" => "John", "email" => "john@example.com"),
        array("name" => "Jane", "email" => "jane@example.com")
    );
    echo $contacts[0]["name"];  // Output: John

    ?>




*****************
Array Functions
*****************


1. array_push()

    Purpose: Adds elements to the end of an array.
    PHP Code:

    <?php
    $fruits = ["apple", "banana"];
    array_push($fruits, "mango", "orange");
    print_r($fruits);
    ?>

    Input:
        Initial array: ["apple", "banana"]
        Elements to add: "mango", "orange"

    Output:
        Array
        (
            [0] => apple
            [1] => banana
            [2] => mango
            [3] => orange
        )

2. array_pop()

    Purpose: Removes the last element from an array.
    PHP Code:

    <?php
    $fruits = ["apple", "banana", "mango"];
    array_pop($fruits);
    print_r($fruits);
    ?>

    Input:
        Initial array: ["apple", "banana", "mango"]

    Output:
        Array
        (
            [0] => apple
            [1] => banana
        )

3. array_shift()

    Purpose: Removes the first element from an array.
    PHP Code:

    <?php
    $fruits = ["apple", "banana", "mango"];
    array_shift($fruits);
    print_r($fruits);
    ?>

    Input:
        Initial array: ["apple", "banana", "mango"]

    Output:
        Array
        (
            [0] => banana
            [1] => mango
        )

4. array_unshift()

    Purpose: Adds elements to the beginning of an array.
    PHP Code:

    <?php
    $fruits = ["banana", "mango"];
    array_unshift($fruits, "apple");
    print_r($fruits);
    ?>

    Input:
        Initial array: ["banana", "mango"]
        Element to add: "apple"

    Output:
        Array
        (
            [0] => apple
            [1] => banana
            [2] => mango
        )

5. array_merge()

    Purpose: Merges two or more arrays.
    PHP Code:

    <?php
    $arr1 = ["apple", "banana"];
    $arr2 = ["mango", "orange"];
    $merged = array_merge($arr1, $arr2);
    print_r($merged);
    ?>

    Input:
        Array 1: ["apple", "banana"]
        Array 2: ["mango", "orange"]

    Output:
        Array
        (
            [0] => apple
            [1] => banana
            [2] => mango
            [3] => orange
        )

6. array_slice()

    Purpose: Extracts a portion of the array.
    PHP Code:

    <?php
    $fruits = ["apple", "banana", "mango", "orange"];
    $slice = array_slice($fruits, 1, 2);
    print_r($slice);
    ?>

    Input:
        Array: ["apple", "banana", "mango", "orange"]
        Start index: 1, Length: 2

    Output:
        Array
        (
            [0] => banana
            [1] => mango
        )

7. array_splice()

    Purpose: Removes or replaces elements from the array.
    PHP Code:

    <?php
    $fruits = ["apple", "banana", "mango", "orange"];
    array_splice($fruits, 1, 2, ["grapes", "watermelon"]);
    print_r($fruits);
    ?>

    Input:
        Array: ["apple", "banana", "mango", "orange"]
        Replace elements from index 1, remove 2 elements, and add ["grapes", "watermelon"]

    Output:
        Array
        (
            [0] => apple
            [1] => grapes
            [2] => watermelon
            [3] => orange
        )

8. array_search()

    Purpose: Searches for a value in the array and returns its key.
    PHP Code:

    <?php
    $fruits = ["apple", "banana", "mango"];
    $index = array_search("banana", $fruits);
    echo "Index of banana is: " . $index;
    ?>

    Input:
        Array: ["apple", "banana", "mango"]
        Search value: "banana"

    Output:
        Index of banana is: 1

9. array_keys()

    Purpose: Returns all keys from an array.
    PHP Code:

    <?php
    $person = ["name" => "John", "age" => 25, "city" => "New York"];
    $keys = array_keys($person);
    print_r($keys);
    ?>

    Input:
        Array: ["name" => "John", "age" => 25, "city" => "New York"]

    Output:
        Array
        (
            [0] => name
            [1] => age
            [2] => city
        )

10. array_values()

    Purpose: Returns all values from an array.
    PHP Code:

    <?php
    $person = ["name" => "John", "age" => 25, "city" => "New York"];
    $values = array_values($person);
    print_r($values);
    ?>

    Input:
        Array: ["name" => "John", "age" => 25, "city" => "New York"]

    Output:
        Array
        (
            [0] => John
            [1] => 25
            [2] => New York
        )

11. in_array()

    Purpose: Checks if a value exists in the array.
    PHP Code:

    <?php
    $fruits = ["apple", "banana", "mango"];
    if (in_array("banana", $fruits)) {
        echo "Banana is in the array.";
    }
    ?>

    Input:
        Array: ["apple", "banana", "mango"]
        Search value: "banana"

    Output:
        Banana is in the array.

12. array_map()

    Purpose: Applies a callback function to all elements of an array.
    PHP Code:

    <?php
    $numbers = [1, 2, 3];
    $squared = array_map(function($num) {
        return $num * $num;
    }, $numbers);
    print_r($squared);
    ?>

    Input:
        Array: [1, 2, 3]

    Output:
        Array
        (
            [0] => 1
            [1] => 4
            [2] => 9
        )

13. array_filter()

    Purpose: Filters elements of an array based on a condition.
    PHP Code:

    <?php
    $numbers = [1, 2, 3, 4, 5];
    $even = array_filter($numbers, function($num) {
        return $num % 2 == 0;
    });
    print_r($even);
    ?>

    Input:
        Array: [1, 2, 3, 4, 5]

    Output:
        Array
        (
            [1] => 2
            [3] => 4
        )

14. array_flip()

    Purpose: Flips the keys and values of an array.
    PHP Code:

    <?php
    $person = ["name" => "John", "age" => 25];
    $flipped = array_flip($person);
    print_r($flipped);
    ?>

    Input:
        Array: ["name" => "John", "age" => 25]

    Output:
        Array
        (
            [John] => name
            [25] => age
        )

15. count()

    Purpose: Counts the number of elements in an array.
    PHP Code:

    <?php
    $fruits = ["apple", "banana", "mango"];
    echo "Total fruits: " . count($fruits);
    ?>

    Input:
        Array: ["apple", "banana", "mango"]

    Output:
        Total fruits: 3












