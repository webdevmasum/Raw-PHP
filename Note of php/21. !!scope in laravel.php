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





🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️
Global Scope
🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️


✅✅✅ Global Scope in Laravel (Variable Access & Helper Function)

    🔹 Laravel e global scope mane holo ekta variable ba functon ke puro application er moddhe access kora.
    Global variable use korar khetre config file, session,middleware ba helper function best practice.


1️⃣ Global Variable Using global Keyword

    PHP te global keyword diye ekta variable ke multiple function e use kora jay.
    🔹 Example:

    <?php
        namespace App\Http\Controllers;

        use Illuminate\Http\Request;

        class UserController extends Controller
        {
            public function showGlobal()
            {
                global $message; // Global variable use
                $message = "Welcome to Laravel!";
                
                return $message;
            }

            public function showMessage()
            {
                global $message; // Same variable access
                return $message;
            }
        }

        // Routes
        Route::get('/global', [UserController::class, 'showGlobal']);
        Route::get('/message', [UserController::class, 'showMessage']);
    ?>

🔹 Output:
//global  ➝  Welcome to Laravel!
//message ➝  Welcome to Laravel!




📌📌📌 Alternative Way: $GLOBALS['variable_name'] diyeo access kora jay.

    <?php
        public function showMessage()
        {
            return $GLOBALS['message']; // Alternative way to access global variable
        }
    ?>


❌❌❌ Global Variable Avoid Kora Ucchit
    Code readability komay
    Unexpected bugs hote pare
    Laravel er best practice hocche Session, Config, ba Helper Function use kora




2️⃣✅✅ Best Practice: Global Data Store in Session

Session use korle security & stability maintain hoy.

🔹 Example:


    <?php
        public function storeInSession()
        {
            session(['message' => 'Welcome to Laravel!']);
            return "Session set successfully!";
        }

        public function getFromSession()
        {
            return session('message', 'No message found');
        }

        // Routes
        Route::get('/set-session', [UserController::class, 'storeInSession']);
        Route::get('/get-session', [UserController::class, 'getFromSession']);
    
    ?>


🔹 Output:
/set-session  ➝  Session set successfully!
/get-session  ➝  Welcome to Laravel!



3️⃣✅✅ Best Practice: Global Value from Config File

Laravel e config file use kore globally value store kora jay.

🔹 Step 1: config/app.php te Custom Value Add Koro

    <?phpreturn [
        'app_name' => 'My Laravel App'
        ];
    ?>


🔹 Step 2: Controller theke Config Data Fetch Koro

    <?php
        public function getAppName()
        {
            return config('app.app_name');
        }

        // Route
        Route::get('/config-app', [UserController::class, 'getAppName']);

    ?>

🔹 Output:
/config-app  ➝  My Laravel App






