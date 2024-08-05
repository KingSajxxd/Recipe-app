<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recipe_app";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ensure user is logged in and user_id is available
session_start();
if (!isset($_SESSION['user_id'])) {
    die("User not logged in.");
}

// Get form data
$title = $_POST['title'];
$description = $_POST['description'];
$ingredients = $_POST['ingredients'];
$instructions = $_POST['instructions'];
$user_id = $_SESSION['user_id']; // Get the logged-in user ID

// Handle file upload
$image = $_FILES['image'];
$image_name = basename($image['name']);
$image_path = 'img/' . $image_name;

if (move_uploaded_file($image['tmp_name'], $image_path)) {
    // Prepare and execute SQL query
    $sql = "INSERT INTO recipes (title, description, ingredients, instructions, image, user_id) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $title, $description, $ingredients, $instructions, $image_name, $user_id);

    if ($stmt->execute()) {
        header("Location: dashboard.php"); // Redirect to the dashboard after adding the recipe
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
} else {
    echo "Error uploading file.";
}

$stmt->close();
$conn->close();
?>
