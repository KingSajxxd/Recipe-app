<?php
session_start();

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$uname = $_POST['email'];
$pass = $_POST['password'];

// Handling the Admin Login to Access UsersList.php 
if($uname == "admin@gmail.com" && $pass == "admin2024"){
        $_SESSION['adminloggedin'] = true;
        header('Location: usersList.php');
        exit();
}

// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recipe_app";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL query to fetch the user details
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $uname);
$stmt->execute();
$result = $stmt->get_result();

// Check if the user exists
if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    // Display the entered and stored passwords for debugging
    echo "<div style='margin: 20px; padding: 10px; border: 1px solid #ccc; background-color: #f9f9f9;'>";
    echo "<p style='color: red;'>Entered Password: <strong>" . htmlspecialchars($pass) . "</strong></p>";
    echo "<p style='color: blue;'>Stored Password: <strong>" . htmlspecialchars($user['password']) . "</strong></p>";
    echo "</div>";

    // Verify the password
    if ($user['password'] === $pass) {
        $_SESSION['user_id'] = $user['id'];
        // Redirect to the desired page
        $_SESSION['userloggedin'] = $uname;
        header("Location: dashboard.php");
        exit();
    } else {
        // Invalid password
        echo "<p style='color: red;'>Invalid password</p>"; // For debugging purposes
        // header("Location: login.php?error=invalid_password");
        // exit();
    }
} else {
    // Invalid email or user does not exist
    echo "<p style='color: red;'>Invalid email or user does not exist</p>"; // For debugging purposes
    // header("Location: login.php?error=invalid_email");
    // exit();
}

// Close the database connection
$stmt->close();
$conn->close();
?>
