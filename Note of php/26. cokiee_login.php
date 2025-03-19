

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


