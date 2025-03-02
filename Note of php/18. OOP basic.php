Example: A Simple Contact Form (Real-Life Example)
OOP concept in php basic



1. Project Structure

/contact-form
|-- index.php (Form UI)
|-- process.php (Form handling & DB insert)
|-- db.php (Database connection)
|-- success.php (Form submission success message)




2. Database Table (MySQL)

CREATE TABLE contacts (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100),
message TEXT,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);




3. Database Connection (db.php)

<?php
    $host = "localhost";
    $user = "root";  // Your DB username
    $pass = "";      // Your DB password
    $dbname = "test_db"; // Your Database name

    $conn = new mysqli($host, $user, $pass, $dbname);

    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }
?>




4. Contact Form (index.php)


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



5. Form Handling & Data Insert (process.php)


<?php
    include 'db.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        // Basic Validation
        if (empty($name) || empty($email) || empty($message)) {
            die("All fields are required!");
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


6. Success Page (success.php)

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