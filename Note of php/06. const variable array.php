
diffrence between variable and array??

A variable holds one value, while an array holds multiple values.

Example:
Variable: int x = 5; (holds a single value)
Array: int arr[] = {1, 2, 3, 4}; (holds multiple values)



how to use const ??
Constants Example:

const VERSION = "1.0.0"; // Valid - Starts with an uppercase letter
const appName = "MyApp"; // Valid - Starts with a lowercase letter
const _config = {};      // Valid - Starts with an underscore
const user123 = "John";  // Valid - Ends with a number

 const 123user = "John"; // Invalid - Cannot start with a number
 const if = "test";      // Invalid - 'if' is a reserved keyword




PHP te const use kora hoy kono constant value define korar jonno, jeta kokhono change kora jay na. Eta ekbar set korar pore pura code e same thake.
Constant ki?

Constant holo ekta variable moto, kintu etar value kokhono change kora jay na. Mane ekbar set korle sheta fixed.
const keno use korbo?

    Jodi kono value fix rakhta hoy (e.g., site name, version, maximum users), seta const diye define korte hoy.
    Eta program ke predictable kore tole, karon constant value kokhono change hobe na.

Example 1: Simple constant

<?php
const SITE_NAME = "MyWebsite";

echo SITE_NAME; // Output: MyWebsite
?>

Bujhiye bola:

    SITE_NAME ekta constant, jekhane value "MyWebsite".
    echo SITE_NAME; diye value print kora hoy.

Example 2: Class er vitore constant

Class er modhye constant define kore tar value access kora jay.

<?php
class MyClass {
    const VERSION = "1.0.0";

    public function showVersion() {
        return self::VERSION; // self diye class er constant access hoy
    }
}

echo MyClass::VERSION; // Output: 1.0.0

$obj = new MyClass();
echo $obj->showVersion(); // Output: 1.0.0
?>

Bujhiye bola:

    VERSION holo constant, jeta class MyClass er vitore.
    self::VERSION diye ei constant access kora hoy.
    Direct MyClass::VERSION o use kora jay.

Difference between const & define()

    const compile-time e value set kore, mane program suru hoar agei eta fixed.
    define() runtime e value set kore, mane program cholte thakleo eta create kora jay.

Example:

<?php
const MAX_USERS = 100; // compile-time constant
define("MIN_USERS", 10); // runtime constant

echo MAX_USERS; // Output: 100
echo MIN_USERS; // Output: 10
?>

Key Points to Remember:

    Fixed value: const diye set korle kono value kokhono change kora jabe na.
    Class er vitore: Class er vitore const diye static nature er fixed value set kora jay.
    Global use: Class charao globally use kora jay.


4. Multiple Constants in Class:

Ekta class e akadhik constant use kora jete pare.

<?php
class Config {
    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_PASS = "password";

    public function getDbHost() {
        return self::DB_HOST;
    }
}

echo Config::DB_HOST; // Output: localhost
echo Config::DB_USER; // Output: root
?>






