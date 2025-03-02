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
    // Function to print array elements using implode
    function printArray($array) {
        // Checking if the array is not empty
        if (empty($array)) {
            echo "The array is empty.";
            return;
        }

        // Printing array elements as a space-separated string
        echo implode(" ", $array);
    }

    // Example array
    $numbers = [1, 2, 3, 4, 5];

    // Function call to print the array
    printArray($numbers);
?>








