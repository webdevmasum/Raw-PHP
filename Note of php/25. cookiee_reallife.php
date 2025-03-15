

🏗 Step 1: Cookie Manager Class (CookieManager.php)


    <?php
        class CookieManager {
            private $expiry; // Cookie expiry time

            public function __construct($days = 7) {
                $this->expiry = time() + (86400 * $days); // Default 7 din expiry
            }

            // ✅ Cookie Set Method
            public function setCookie($name, $value, $days = null) {
                $expiry = $days ? time() + (86400 * $days) : $this->expiry;
                setcookie($name, $value, $expiry, "/", "", false, true); // HttpOnly for security
            }

            // ✅ Cookie Get Method
            public function getCookie($name) {
                return isset($_COOKIE[$name]) ? $_COOKIE[$name] : null;
            }

            // ✅ Cookie Check Method
            public function hasCookie($name) {
                return isset($_COOKIE[$name]);
            }

            // ✅ Cookie Delete Method
            public function deleteCookie($name) {
                setcookie($name, "", time() - 3600, "/"); // Expire the cookie
            }
        }
    ?>


🔹 Explanation
    Encapsulation: Data hide kore methods diye access kora.
    Reusability: Ekbar class likhe, project er onno jaigay easily use kora jabe.
    Security: HttpOnly flag use kora hoiche (JavaScript theke access kora jabe na).



🏗 Step 2: Cookie Manage Kore Use Kora
    📌 Login Page (login.php)


    <?php
        require 'CookieManager.php';

        $cookie = new CookieManager();

        if(isset($_POST['login'])){
            $username = $_POST['username'];
            
            // Cookie set for 7 days
            $cookie->setCookie("username", $username, 7);

            echo "✅ Login Successful! <a href='dashboard.php'>Go to Dashboard</a>";
        }
    ?>

    <h2>Login</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Enter your name" required>
        <button type="submit" name="login">Login</button>
    </form>


✅ Explanation
    new CookieManager(); diye class instance create kora holo.
    setCookie("username", $username, 7); diye username 7 din store thakbe.



📌 Dashboard Page (dashboard.php)

    <?php
        require 'CookieManager.php';

        $cookie = new CookieManager();

        if($cookie->hasCookie("username")) {
            echo "<h2>Welcome back, " . $cookie->getCookie("username") . "!</h2>";
            echo "<a href='logout.php'>Logout</a>";
        } else {
            echo "<h2>No user found! Please <a href='login.php'>Login</a></h2>";
        }
    ?>



✅ Explanation
    hasCookie("username") diye check kora hocche cookie exist kore kina.
    getCookie("username") diye cookie er value show kora hocche.



📌 Logout Page (logout.php)

    <?php
        require 'CookieManager.php';

        $cookie = new CookieManager();

        // Cookie delete
        $cookie->deleteCookie("username");

        echo "✅ You have been logged out! <a href='login.php'>Login Again</a>";
    ?>























