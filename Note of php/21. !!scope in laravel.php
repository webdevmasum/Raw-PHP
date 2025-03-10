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


📌📌📌📌📌📌📌📌📌📌📌📌📌📌
Golbal Scope using Helper Function
📌📌📌📌📌📌📌📌📌📌📌📌📌📌


1️⃣ Helper Function Create Kora (app/helpers.php)


    <?php
        if (!function_exists('uploadImage')) {
            function uploadImage($file, $path)
            {
                $imageName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path($path), $imageName);
                return $path . '/' . $imageName;
            }
        }
    ?>


2️⃣ Helper Function Load Kora (composer.json e autoload kora)


    <?php
        "autoload": {
            "files": [
                "app/helpers.php"
            ]
        }
    ?>


3️⃣ Composer Update Kora

    >>>> composer dump-autoload


4️⃣ Controller theke Helper Function Call Kora


    <?php
        use Illuminate\Http\Request;

        class ImageController extends Controller
        {
            public function store(Request $request)
            {
                $request->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                $imagePath = uploadImage($request->file('image'), 'uploads/images');
                return "Image uploaded successfully: " . $imagePath;
            }
        }
    ?>


5️⃣ Route Setup Kora

    <?php
    use App\Http\Controllers\ImageController;

    Route::post('/upload-image', [ImageController::class, 'store']);
    ?>

✅Output:
Image uploaded successfully: uploads/images/1615245412.jpg



🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️
Static Scope in Laravel (Model Static Function)
🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️


    <?php
        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class User extends Model
        {
            protected $fillable = ['name', 'email'];

            public static function getAllUsers()
            {
                return self::all();
            }
        }
    ?>


🔹 Controller theke call kora:

    <?php
        namespace App\Http\Controllers;

        use App\Models\User;
        use Illuminate\Http\Request;

        class UserController extends Controller
        {
            public function index()
            {
                $users = User::getAllUsers(); // Static function call
                return response()->json($users);
            }
        }

        // Route
        Route::get('/users', [UserController::class, 'index']);
    ?>


🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️
Function Parameter Scope in Laravel (Request Parameters)
🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️


    <?php
        namespace App\Http\Controllers;

        use Illuminate\Http\Request;

        class UserController extends Controller
        {
            public function greetUser($name)
            {
                return "Hello, " . $name;
            }
        }

        // Route
        Route::get('/greet/{name}', [UserController::class, 'greetUser']);
    ?>


🔹 URL Visit: /greet/John
🔹 Output: Hello, John


🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️
✅ Laravel er OOP Scope (Public, Private, Protected)
🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️🛠️

Laravel e OOP scope (public, private, protected) mostly controller, model, middleware, service file gulo te use kora hoy.


    <?php
        namespace App\Http\Controllers;

        use Illuminate\Http\Request;

        class UserController extends Controller
        {
            private function privateMethod()
            {
                return "This is a private method";
            }

            protected function protectedMethod()
            {
                return "This is a protected method";
            }

            public function publicMethod()
            {
                return "This is a public method";
            }
        }

        // Route
        Route::get('/public', [UserController::class, 'publicMethod']); // Works
        Route::get('/private', [UserController::class, 'privateMethod']); // Error
        Route::get('/protected', [UserController::class, 'protectedMethod']); // Error
    ?>





