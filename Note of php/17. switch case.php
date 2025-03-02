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













