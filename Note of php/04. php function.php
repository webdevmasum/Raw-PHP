

**********
Defining and Calling Function
**********

In PHP, to define a function, you use the function keyword. After defining a function, you can call it to use its functionality.

example:

    //! Function definition
    function greet($name) {
        return "Hello, $name!";
    }

    //! Function call
    echo greet("John");  // Output: Hello, John!

Explanation:
    Function Definition:
        The function is named greet.
        It takes one parameter, $name.
        Inside the function, it returns a string that says "Hello" followed by the value of $name.

    Function Call:
        To use the greet function, you call it with a value. In this case, "John" is passed as the argument.
        The function returns "Hello, John!", which is then displayed using echo.


**********
Function Parameters and Return Values
**********

What are Function Parameters and Return Values?
Parameters: Think of them as the ingredients you give to a function to make it do something. For example, if you want to add two numbers, those two numbers are the ingredients (parameters).
Return Value: This is the result the function gives back after doing its job. For example, after adding two numbers, the result (sum) is returned.

Examples:
Adding Two Numbers


    function add($a, $b) {
        return $a + $b; // Adds the two numbers and gives back the result
    }
    $result = add(5, 3); // Give 5 and 3 to the function
    echo $result; // Result: 8

    $a and $b are parameters (the numbers you give to the function).
    return $a + $b gives you the result (8 in this case).
    Multiplying Three Numbers

    function multiply($num1, $num2, $num3) {
        return $num1 * $num2 * $num3; // Multiplies three numbers
    }
    $result = multiply(2, 3, 4); // Give 2, 3, and 4 to the function
    echo $result; // Result: 24

    You give three numbers, and it returns their multiplication.
    Function with a Default Value

    function greet($name = "Guest") {
        return "Hello, $name!"; // If you don’t give a name, it will say “Hello, Guest!”
    }
    echo greet(); // Result: Hello, Guest!

    echo greet("John"); // Result: Hello, John!
    The function greet has a default name "Guest." If you don’t pass a name, it uses "Guest."
    Returning Multiple Values


    function getDetails() {
        return ["John Doe", 25, "john@example.com"]; // Gives back an array with 3 things: name, age, email
    }
    $details = getDetails();
    echo "Name: " . $details[0]; // Output: Name: John Doe
    echo "Age: " . $details[1]; // Output: Age: 25
    echo "Email: " . $details[2]; // Output: Email: john@example.com

    The function getDetails gives back multiple values as an array (name, age, and email).
    Checking if You Passed 


    function checkGrade($score) {
        if ($score >= 50) {
            return "Pass"; // If score is 50 or more, it returns "Pass"
        } else {
            return "Fail"; // If score is less than 50, it returns "Fail"
        }
    }
    echo checkGrade(55); // Result: Pass
    echo checkGrade(45); // Result: Fail
    
    The function checkGrade checks the score. If it’s 50 or more, it returns "Pass", otherwise "Fail".
    Simple Summary:
    Parameters are the things you give to a function (like numbers, names, etc.).
    Return Value is the result you get back from the function (like a sum, a product, or a message).







