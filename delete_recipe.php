<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recipe_app";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user_id from session
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    // Redirect to login if not logged in
    header("Location: login.php");
    exit();
}

// Check if recipe_id is set
if (isset($_POST['recipe_id'])) {
    $recipe_id = $_POST['recipe_id'];

    // Delete the recipe
    $sql = "DELETE FROM recipes WHERE id = ? AND user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $recipe_id, $user_id);

    if ($stmt->execute()) {
        // Redirect to user's recipes page
        header("Location: user_recipes.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
