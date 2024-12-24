<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

// Database configuration
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'testdb';

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password']); // Do not escape; will verify using password_verify()

    // Fetch the user with the provided email
    $sql = "SELECT id, name, email, password FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Both email and password match
            // Start session and set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_email'] = $user['email'];
            header("Location: /CollegeProject/sucess.php");
            exit();
        } else {
            echo "Invalid email or password."; // Password does not match
        }
    } else {
        echo "Invalid email or password."; // Email does not exist
    }
}

// Close the connection
$conn->close();
?>
