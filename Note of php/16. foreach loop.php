*******************
Foreach Loop Example
*******************


<?php
    $students = ["Rony", "Mia", "Sima", "Alok"];

    foreach ($students as $student) {
        echo $student . "<br>";
    }
?>

Output:
    Rony
    Mia
    Sima
    Alok


*******************
Foreach Loop Example
*******************


<?php
    $students = [
        "student1" => "Rony",
        "student2" => "Mia",
        "student3" => "Sima",
        "student4" => "Alok"
    ];

    foreach ($students as $key => $student) {
        echo $key . ": " . $student . "<br>";
    }
?>

Output:
    student1: Rony
    student2: Mia
    student3: Sima
    student4: Alok

*******************
Foreach Loop Example
*******************


<?php
    $number = 5; // Apnar guner number
    $range = range(1, 10); // 1 theke 10 porjonto array banano

    foreach ($range as $i) {
        echo $number . " x " . $i . " = " . ($number * $i) . "<br>";
    }
?>

Output:
    5 x 1 = 5
    5 x 2 = 10
    5 x 3 = 15
    5 x 4 = 20
    5 x 5 = 25
    5 x 6 = 30
    5 x 7 = 35
    5 x 8 = 40
    5 x 9 = 45
    5 x 10 = 50













