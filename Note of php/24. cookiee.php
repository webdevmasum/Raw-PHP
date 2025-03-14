💡 PHP te Cookie kivabe kaj kore? Keno use kora hoy?
✅ Cookie ki?

Cookie holo ekta small text file jeita user-er browser e store kora hoy. Ei data user jokhon abar website e ashe, tokhon automatically server e send hoy.
✅ Keno Cookie use kora hoy?

    User Authentication - Remember Me login option.
    User Preferences Save - Language selection, theme, etc.
    Tracking & Analytics - User er browsing history track kora.
    Shopping Cart - Cart er product save rakha.



🔹 1. Cookie Set kora (setcookie())    

    <?php
        $cookie_name = "user";
        $cookie_value = "John Doe";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/"); // 7 din store thakbe
    ?>


🔹 2. Cookie Read kora ($_COOKIE)

    <?php
        if(isset($_COOKIE["user"])) {
            echo "Welcome back, " . $_COOKIE["user"];
        } else {
            echo "No cookie found!";
        }
    ?>

🔹 3. Cookie Delete kora (Expire time past e set kora)

    <?php
        setcookie("user", "", time() - 3600, "/"); // 1 ghonta age expire
        echo "Cookie Deleted!";
    ?>


