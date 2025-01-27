Magic Constants Examples:



1. Debugging and Logging

Jodi apni kono function er moddhe problem debug korte chan, taile __LINE__, __FILE__, __FUNCTION__ use kore apni easily track korte parben.

Example:

    function addNumbers($a, $b) {
        echo "Function: " . __FUNCTION__ . " in file: " . __FILE__ . " at line: " . __LINE__ . "\n";
        return $a + $b;
    }

    $result = addNumbers(5, 10);
    echo "Result: " . $result;

Output:
    Function: addNumbers in file: /path/to/your/project.php at line: 2
    Result: 15

Ei example te apni dekhte parben, je __FUNCTION__ function er naam, __FILE__ file er path, ar __LINE__ line number diye debug korte parben.
2. Tracking Errors or Events

Apni jokhon kono error ba important event track korben, tokhon __LINE__ ar __FILE__ use kora onek helpful.

Example:

    function processPayment($amount) {
        if ($amount <= 0) {
            echo "Error: Invalid amount at " . __FILE__ . " line " . __LINE__ . "\n";
            return false;
        }
        echo "Payment processed: " . $amount . "\n";
        return true;
    }

    processPayment(-100);

Output:
    Error: Invalid amount at /path/to/your/project.php line 6

Ekhane __FILE__ ar __LINE__ diye error ta kon file o kon line e ghotshe, seta track kora hocche.

3. Logging Execution Flow

Apni jokhon project er bhitore onek function call korben, tokhon kon function kothay execute hocche ta track korar jonno __FUNCTION__, __LINE__ use korte paren.

Example:

    class OrderProcessor {
        function createOrder() {
            echo "Executing function: " . __FUNCTION__ . " at line: " . __LINE__ . "\n";
            $this->processPayment(200);
        }

        function processPayment($amount) {
            echo "Executing function: " . __FUNCTION__ . " at line: " . __LINE__ . "\n";
            // Process payment logic
        }
    }

    $orderProcessor = new OrderProcessor();
    $orderProcessor->createOrder();

Output:
    Executing function: createOrder at line: 3
    Executing function: processPayment at line: 8

Ei example te apni dekhte parben, je kon function call hocche o kon line e execute hocche.

4. Tracking Namespaces and Classes

Jodi apni Laravel er moddhe ekta class use koren, tokhon __CLASS__ ar __METHOD__ use kore class ar method er naam easily track kora jabe.

Example:

    namespace App\Models;

    class User {
        function getUserInfo() {
            echo "Class: " . __CLASS__ . ", Method: " . __METHOD__ . "\n";
        }
    }

    $user = new User();
    $user->getUserInfo();

Output:
    Class: App\Models\User, Method: App\Models\User::getUserInfo

Ei example e apni dekhte parben, je __CLASS__ diye class er naam, ar __METHOD__ diye method er naam easily track kora hocche.

5. Tracking File and Directory Structure

Jodi apnar project er moddhe multiple files thake ar apni chaan je kon file e code execution hocche, tahole __FILE__ o __DIR__ use korte paren.

Example:

    echo "Current File: " . __FILE__ . "\n";
    echo "Current Directory: " . __DIR__ . "\n";

Output:
    Current File: /path/to/your/project/file.php
    Current Directory: /path/to/your/project

Ei example te apni dekhte parben, je __FILE__ diye full file path ar __DIR__ diye directory path easily show kora hocche.



