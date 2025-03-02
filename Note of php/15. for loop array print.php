*********************
For Loop Array print 
*********************


<?php
    // Example array
    $numbers = [1, 2, 3, 4, 5];

    // For loop diye array print kora
    for ($i = 0; $i < count($numbers); $i++) {
        echo $numbers[$i] . " "; // array er prottekta element print hobe
    }
?>



*********************
For Loop Array print another way
*********************

<?php
// Function to print array elements
    function printArray($array) {
        // Checking if the array is not empty
        if (empty($array)) {
            echo "The array is empty.";
            return;
        }

        // Iterating through the array using a for loop
        for ($i = 0; $i < count($array); $i++) {
            // Printing each element
            echo $array[$i] . " ";
        }
    }

    // Example array
    $numbers = [1, 2, 3, 4, 5];

    // Function call to print the array
    printArray($numbers);
?>




*********************
For Loop Array print another way
*********************

<?php
// Associative array with keys and values
    $array = [
        "apple" => 10,
        "banana" => 20,
        "cherry" => 30
    ];

    // Get the keys and values using array_keys() and array_values()
    $keys = array_keys($array);
    $values = array_values($array);

    // Using for loop to print the keys and values
    for ($i = 0; $i < count($keys); $i++) {
        echo "Key: " . $keys[$i] . ", Value: " . $values[$i] . "\n";
    }
?>





