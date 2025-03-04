php oop best practice demo

✅ 1. Project Structure


/contact-form
   |-- index.php        (Form UI)
   |-- process.php      (Form handling)
   |-- db.php           (Database connection)
   |-- functions.php    (Reusable functions)
   |-- success.php      (Success message)
   |-- .env             (Environment variables)



✅ 2. Database Connection (db.php)


    <?php
        require_once 'config.php'; // Config file load
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        // Check Connection
        if ($conn->connect_error) {
            die("Database connection failed: " . $conn->connect_error);
        }
    ?>


✅ 3. Config File (config.php)


    <?php
        require_once 'env_loader.php'; // Load .env file

        define('DB_HOST', getenv('DB_HOST'));
        define('DB_USER', getenv('DB_USER'));
        define('DB_PASS', getenv('DB_PASS'));
        define('DB_NAME', getenv('DB_NAME'));
    ?>



✅ 4. Environment Variables (.env)

    DB_HOST=localhost
    DB_USER=root
    DB_PASS=
    DB_NAME=test_db


✅ 5. Helper Functions (functions.php)


    <?php
        // Secure Input Data
        function clean_input($data) {
            return htmlspecialchars(strip_tags(trim($data)));
        }
    ?>






✅ 6. Contact Form UI (index.php)

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Us</h2>
    <form action="process.php" method="POST">
        <label>Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Message:</label>
        <textarea name="message" required></textarea><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>


✅ 7. Form Processing & Secure Data Insert (process.php)


    <?php
        require_once 'db.php';
        require_once 'functions.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = clean_input($_POST['name']);
            $email = clean_input($_POST['email']);
            $message = clean_input($_POST['message']);

            // Validate Email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                die("Invalid email format!");
            }

            // SQL Injection Protection
            $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $message);

            if ($stmt->execute()) {
                header("Location: success.php");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
            $conn->close();
        }
    ?>



✅ 8. Success Page (success.php)


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Success</title>
</head>
<body>
    <h2>Thank you! Your message has been submitted.</h2>
    <a href="index.php">Go Back</a>
</body>
</html>




🔍 Key Best Practices

1️⃣ Security Maintain Koro

    SQL Injection protection (Prepared Statements use koro)
    XSS protection (htmlspecialchars() & strip_tags() use koro)
    CSRF protection (Form e token use koro)

2️⃣ Database Credentials Secure Rakho

    .env file e database credentials rakho
    config.php er madhome credentials load koro

3️⃣ Reusable Code Likho

    Common functions alada functions.php file e rakho
    DRY (Don't Repeat Yourself) principle maintain koro

4️⃣ Validation Always Koro

    Server-side validation must be implemented
    filter_var() use kore email validate koro

5️⃣ Error Handling Implement Koro

    Production mode e error messages directly show koro na
    error_log() function use kore errors log file e rakho

6️⃣ Code Readability Maintain Koro

    Proper indentation use koro
    Meaningful variable & function names use koro

