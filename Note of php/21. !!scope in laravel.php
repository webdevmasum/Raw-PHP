✅ 
❌  
💡
🔥
🌟 
📌 
🛠️ 

🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️
Local Scope
🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️

✅✅✅ Local Scope in Laravel Controller Function

    🔹 Laravel e local scope mane holo kon ekta function er moddhe declare kora variable sudhu oitar moddhei access pabe. Ei dhoroner variable ke local variable bola hoy.

    🔹 Example:


    <?php
        namespace App\Http\Controllers;

        use Illuminate\Http\Request;

        class UserController extends Controller
        {
            public function showUser()
            {
                $name = "John"; // Local Scope
                return "User Name: " . $name;
            }
        }

        // Route
        Route::get('/user', [UserController::class, 'showUser']);

        //!! Output: User Name: John
    ?>


💡💡💡 Example: Function Scope Test
    🔹 Ekhon jodi arekta function e $name use korte chai, tahole error dibe.

    <?php
            class UserController extends Controller
        {
            public function showUser()
            {
                $name = "John"; // Local Scope
            }

            public function anotherFunction()
            {
                return "User Name: " . $name; // ❌ Error! Undefined variable: name
            }
        }
    ?>



📌📌📌 Solution: Global Variable (Property Use Kora)

    🔹Jodi same variable multiple function er moddhe use korte chai, tahole class property use korte hobe.


    <?php
        class UserController extends Controller
        {
            private $name; // Global variable
        
            public function __construct()
            {
                $this->name = "John"; // Assign value globally
            }
        
            public function showUser()
            {
                return "User Name: " . $this->name; // Access global variable
            }
        
            public function anotherFunction()
            {
                return "Again User Name: " . $this->name; // Same variable access
            }
        }

        //!! User Name: John
        //!! Again User Name: John

    ?>    

🔥 Conclusion:
    ✔ Local scope e variable sudhu oi function er moddhei thake.
    ✔ Onno function theke access korte hole class property ba global variable use korte hobe.
    ✔ Function er baire local variable access korle Undefined variable error dibe.

    🔹 Best Practice:
        Jodi variable sudhu ekta function e use hoy, tahole local scope e rakhle valo.
        Jodi multiple function e use korte hoy, tahole class property declare kore use kora valo.





















