<?php
// @@!!@@@@!!@@
// If Statement Example
// @@!!@@@@!!@@

$age = 20;

if ($age >= 18) {
    echo "You are an adult.";
}

?>



<?php
//!! ek sathe 2ta condition use korte pare.

$age = 20;
$hasID = true;

if ($age >= 18 && $hasID) {
    echo "You are eligible to enter.";
} else {
    echo "You are not eligible to enter.";
}
?>



<?php
// @@!!@@@@!!@@
// else Statement Example
// @@!!@@@@!!@@

$age = 16;

if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}

?>

<?php
// @@!!@@@@!!@@
// elseif Statement Example
// @@!!@@@@!!@@

$age = 17;

if ($age >= 18) {
    echo "You are an adult.";
} elseif ($age == 17) {
    echo "You are almost an adult.";
} else {
    echo "You are a minor.";
}

?>

<?php
// @@!!@@@@!!@@
// switch Statement Example
// @@!!@@@@!!@@

$day = "Monday";

switch ($day) {
    case "Monday":
        echo "Today is Monday.";
        break;
    case "Tuesday":
        echo "Today is Tuesday.";
        break;
    case "Wednesday":
        echo "Today is Wednesday.";
        break;
    default:
        echo "Not a valid day.";
}
?>
