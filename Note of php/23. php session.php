
1.✅ Session Start & Data Set

    <?php
        session_start(); // Session start korte hobe

        $_SESSION['username'] = "Rakib"; // Session variable set
        $_SESSION['role'] = "Admin";

        echo "Session set successfully!";
    ?>


2.✅ Session Data Access

    <?php
        session_start(); // Always start session to access session data

        if(isset($_SESSION['username'])){
            echo "Welcome, " . $_SESSION['username']; // Session theke data access
        } else {
            echo "No session found!";
        }
    ?>


3.✅ Session Destroy (Logout)

    <?php
        session_start();
        session_unset(); // Sob session variable remove kore
        session_destroy(); // Session completely destroy kore

        echo "Session destroyed!";
    ?>
