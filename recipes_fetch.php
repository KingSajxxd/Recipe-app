<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recipe_app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch recipes
$sql = "SELECT * FROM recipes ORDER BY created_at DESC";
$result = $conn->query($sql);

$recipes = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $recipes[] = $row;
    }
}
$conn->close();
?>
