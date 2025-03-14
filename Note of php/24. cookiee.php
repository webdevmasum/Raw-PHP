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


🛠 Practical Example: Remember Me Login


    <?php
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            
            // Cookie store
            setcookie("username", $username, time() + (86400 * 30), "/"); 

            echo "Cookie Set! Welcome, " . $username;
        }
        ?>

        <form method="post">
            <input type="text" name="username" placeholder="Enter your name">
            <input type="submit" name="submit" value="Login">
        </form>

        <?php
        if(isset($_COOKIE["username"])) {
            echo "<p>Welcome back, " . $_COOKIE["username"] . "</p>";
        }
    ?>




📌📌📌📌📌📌📌📌📌📌📌📌
Real Life Example 
📌📌📌📌📌📌📌📌📌📌📌📌

🏗✅ ✅ Step 1: Login Page (login.php)


    <?php
        if(isset($_POST['login'])){
            $username = $_POST['username'];

            // User jokhon login korbe, tokhon cookie set hobe 7 din er jonno
            setcookie("username", $username, time() + (86400 * 7), "/");

            echo "✅ Login Successful! <a href='welcome.php'>Go to Dashboard</a>";
        }
    ?>

    <h2>Login</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Enter your name" required>
        <button type="submit" name="login">Login</button>
    </form>


🏗✅ ✅ Step 2: Welcome Page (welcome.php)


    <?php
        // Cookie check kore welcome message dekhano
        if(isset($_COOKIE["username"])) {
            echo "<h2>Welcome back, " . $_COOKIE["username"] . "!</h2>";
            echo "<a href='logout.php'>Logout</a>";
        } else {
            echo "<h2>No user found! Please <a href='login.php'>Login</a></h2>";
        }
    ?>


🏗✅ ✅ Step 3: Logout Page (logout.php)

    <?php
        // Cookie delete kore logout kora
        setcookie("username", "", time() - 3600, "/"); 

        echo "✅ You have been logged out! <a href='login.php'>Login Again</a>";
    ?>

