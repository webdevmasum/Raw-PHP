*******************
Example for switch case:
*******************

<?php
    $day = "Saturday";

    switch($day) {
        case "Monday":
            echo "Today is Monday.";
            break;
        case "Tuesday":
            echo "Today is Tuesday.";
            break;
        case "Wednesday":
            echo "Today is Wednesday.";
            break;
        case "Thursday":
            echo "Today is Thursday.";
            break;
        case "Friday":
            echo "Today is Friday.";
            break;
        case "Saturday":
            echo "Today is Saturday.";
            break;
        case "Sunday":
            echo "Today is Sunday.";
            break;
        default:
            echo "Invalid day.";
    }
?>




*******************
Complex Example for switch case: 
*******************


<?php
    $score = 85;
    $category = "adult";

    switch(true) {
        case ($score >= 90 && $category == "adult"):
            echo "You are an adult with an excellent score!";
            break;
        case ($score >= 80 && $score < 90 && $category == "adult"):
            echo "You are an adult with a good score!";
            break;
        case ($score >= 70 && $score < 80 && $category == "adult"):
            echo "You are an adult with an average score!";
            break;
        case ($score >= 90 && $category == "teen"):
            echo "You are a teen with an excellent score!";
            break;
        case ($score >= 80 && $score < 90 && $category == "teen"):
            echo "You are a teen with a good score!";
            break;
        case ($score >= 70 && $score < 80 && $category == "teen"):
            echo "You are a teen with an average score!";
            break;
        default:
            echo "Invalid score or category.";
    }
?>




*******************
More Complex Example for switch case: 
*******************

<?php
    $age = 25;
    $score = 92;
    $membership = "premium";

    switch(true) {
        case ($age >= 18 && $age <= 30):
            if ($score >= 90 && $membership == "premium") {
                echo "You are a young adult with an excellent score and a premium membership.";
            } elseif ($score >= 80 && $score < 90) {
                echo "You are a young adult with a good score and a premium membership.";
            } elseif ($score >= 70 && $score < 80) {
                echo "You are a young adult with an average score and a premium membership.";
            } else {
                echo "You are a young adult with a low score and a premium membership.";
            }
            break;

        case ($age >= 31 && $age <= 50):
            if ($score >= 90 && $membership == "standard") {
                echo "You are a middle-aged adult with an excellent score and a standard membership.";
            } elseif ($score >= 80 && $score < 90) {
                echo "You are a middle-aged adult with a good score and a standard membership.";
            } elseif ($score >= 70 && $score < 80) {
                echo "You are a middle-aged adult with an average score and a standard membership.";
            } else {
                echo "You are a middle-aged adult with a low score and a standard membership.";
            }
            break;

        case ($age > 50):
            if ($score >= 90) {
                echo "You are a senior adult with an excellent score.";
            } elseif ($score >= 80 && $score < 90) {
                echo "You are a senior adult with a good score.";
            } elseif ($score >= 70 && $score < 80) {
                echo "You are a senior adult with an average score.";
            } else {
                echo "You are a senior adult with a low score.";
            }
            break;

        default:
            echo "Invalid age or score.";
    }
?>











