Type Juggling vs. Type Casting:

    Type Juggling: PHP automatically data type change kore, based on context.

    $value = "123" + 10; // Result: 133 (string automatically integer e convert hoy)

Type Casting: Apni manually type specify kore convert korchen.

    $value = "123";
    $newValue = (int) $value; // Result: 123

Conversion Rules:

    String to Integer: String er shuru jodi valid number hoy, tahole se number e convert hobe; na hole 0 hobe.

    $value = "45hello"; 
    $newValue = (int) $value; // Result: 45

Empty String: Empty string ke (int) korle 0 hobe, (bool) korle false hobe.

    $value = "";
    echo (int) $value; // Result: 0
    echo (bool) $value; // Result: false

Float to Integer:

    Decimal part kete dey.

    $value = 10.99;
    $newValue = (int) $value; // Result: 10

Array Conversion:

    Array e convert korle scalar value ke ekta element hisebe rakhbe.

    $value = "PHP";
    $newValue = (array) $value; 
    print_r($newValue); // Result: Array ([0] => PHP)

Object Conversion:

    Scalar value object e convert korle ekta stdClass object create hobe, jar property scalar hobe.

$value = "PHP";
$newValue = (object) $value;
echo $newValue->scalar; // Result: PHP



Example:

    <?php
        // String to integer casting
        $string = "123";
        $integer = (int) $string;
        echo "String to integer: $integer<br>"; // Output: 123

        // Float to integer casting
        $float = 45.67;
        $integer = (int) $float;
        echo "Float to integer: $integer<br>"; // Output: 45

        // Integer to string casting
        $integer = 100;
        $string = (string) $integer;
        echo "Integer to string: $string<br>"; // Output: 100

        // String to boolean casting
        $string = "Hello";
        $boolean = (bool) $string;
        echo "String to boolean: " . ($boolean ? "true" : "false") . "<br>"; // Output: true

        // Array casting
        $value = 10;
        $array = (array) $value;
        print_r($array); // Output: Array ( [0] => 10 )
    ?>







