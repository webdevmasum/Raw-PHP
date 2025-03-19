

🏗 Step 1: Authentication Controller (app/Http/Controllers/AuthController.php)


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    // ✅ Login Method
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Jodi "Remember Me" check kore, tahole cookie store korte hobe
            if ($request->has('remember')) {
                Cookie::queue('remember_token', $user->id, 60  24  7); // 7 din auto-login
            }

            return redirect('/dashboard')->with('success', 'Login Successful!');
        }

        return back()->with('error', 'Invalid Credentials');
    }

    // ✅ Auto Login Using Cookie
    public function autoLogin(Request $request)
    {
        if ($request->cookie('remember_token')) {
            $user = \App\Models\User::find($request->cookie('remember_token'));

            if ($user) {
                Auth::login($user);
                return redirect('/dashboard')->with('success', 'Auto Logged In!');
            }
        }

        return redirect('/login')->with('error', 'Session Expired! Please Login Again.');
    }

    // ✅ Logout Method
    public function logout()
    {
        Auth::logout();
        Cookie::queue(Cookie::forget('remember_token')); // Cookie delete
        return redirect('/login')->with('success', 'Logged Out!');
    }
}


?>



🏗 Step 2: Routes Setup (routes/web.php)

<?php
use App\Http\Controllers\AuthController;

Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/login', [AuthController::class, 'login']);
Route::get('/dashboard', function () {
    return "Welcome to Dashboard! <a href='/logout'>Logout</a>";
})->middleware('auth');

Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/auto-login', [AuthController::class, 'autoLogin']);

?>






🏗 Step 3: Login Form Create Koro (resources/views/auth/login.blade.php)


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <form action="/login" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Enter Email" required>
        <input type="password" name="password" placeholder="Enter Password" required>
        <label>
            <input type="checkbox" name="remember"> Remember Me
        </label>
        <button type="submit">Login</button>
    </form>

    <p><a href="/auto-login">Auto Login</a></p>
</body>
</html>






🏗 Step 4: Auto Login Middleware (Optional)


php artisan make:middleware AutoLoginMiddleware


<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class AutoLoginMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check() && $request->cookie('remember_token')) {
            $user = \App\Models\User::find($request->cookie('remember_token'));

            if ($user) {
                Auth::login($user);
            }
        }

        return $next($request);
    }
}



?>

📌 Middleware Register Koro (app/Http/Kernel.php)

<?php
protected $middlewareGroups = [
    'web' => [
        \App\Http\Middleware\AutoLoginMiddleware::class, // Auto Login Middleware
    ],
];
