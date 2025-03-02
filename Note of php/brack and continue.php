********************
break Example:
********************

<?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 5) {
            break;  // Loop ta 5 er por break kore dibe
        }
        echo "Number: $i\n";
    }
?>


Output:
    Number: 1
    Number: 2
    Number: 3
    Number: 4




****************************
break in Nested Loop Example:
****************************

<?php
    for ($i = 1; $i <= 5; $i++) {
        echo "Outer loop iteration $i\n";
        
        for ($j = 1; $j <= 5; $j++) {
            echo "  Inner loop iteration $j\n";
            
            // Break the outer loop when i = 3 and j = 2
            if ($i == 3 && $j == 2) {
                echo "  Breaking the outer loop at i = $i and j = $j\n";
                break 2;  // This breaks both inner and outer loops
            }
        }
    }
?>


Output:

Outer loop iteration 1
  Inner loop iteration 1
  Inner loop iteration 2
  Inner loop iteration 3
  Inner loop iteration 4
  Inner loop iteration 5
Outer loop iteration 2
  Inner loop iteration 1
  Inner loop iteration 2
  Inner loop iteration 3
  Inner loop iteration 4
  Inner loop iteration 5
Outer loop iteration 3
  Inner loop iteration 1
  Inner loop iteration 2
  Breaking the outer loop at i = 3 and j = 2



********************
continue Example:
********************


<?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 5) {
            continue;  // 5 skip kore porer iteration e chole jabe
        }
        echo "Number: $i\n";
    }
?>


Output:
    Number: 1
    Number: 2
    Number: 3
    Number: 4
    Number: 6
    Number: 7
    Number: 8
    Number: 9
    Number: 10


***********************
continue in Nested Loop Example:
***********************

<?php
    for ($i = 1; $i <= 5; $i++) {
        echo "Outer loop iteration $i\n";
        
        for ($j = 1; $j <= 5; $j++) {
            if ($i == 3 && $j == 2) {
                echo "  Skipping j = 2 at i = $i\n";
                continue 2;  // Skip the current iteration of the inner loop and continue with the outer loop
            }
            
            echo "  Inner loop iteration $j\n";
        }
    }
?>


Output:

Outer loop iteration 1
  Inner loop iteration 1
  Inner loop iteration 2
  Inner loop iteration 3
  Inner loop iteration 4
  Inner loop iteration 5
Outer loop iteration 2
  Inner loop iteration 1
  Inner loop iteration 2
  Inner loop iteration 3
  Inner loop iteration 4
  Inner loop iteration 5
Outer loop iteration 3
  Skipping j = 2 at i = 3
  Inner loop iteration 3
  Inner loop iteration 4
  Inner loop iteration 5
Outer loop iteration 4
  Inner loop iteration 1
  Inner loop iteration 2
  Inner loop iteration 3
  Inner loop iteration 4
  Inner loop iteration 5
Outer loop iteration 5
  Inner loop iteration 1
  Inner loop iteration 2
  Inner loop iteration 3
  Inner loop iteration 4
  Inner loop iteration 5












