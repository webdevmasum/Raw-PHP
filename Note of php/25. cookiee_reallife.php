

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




























