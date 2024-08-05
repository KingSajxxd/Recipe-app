<?php
// Database connection
$servername = "localhost"; // or your server
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "recipe_app"; // your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get recipe ID from URL
$recipe_id = intval($_GET['id']);

// Prepare and execute SQL query
$sql = "SELECT * FROM recipes WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $recipe_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Fetch the recipe data
    $recipe = $result->fetch_assoc();
} else {
    echo "Recipe not found.";
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title><?php echo htmlspecialchars($recipe['title']); ?> - CIBO</title>
  <style>
    .recipe-details {
      margin: 50px auto;
      max-width: 800px;
      padding: 20px;
      background-color: #f8f9fa;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .recipe-details img {
      max-width: 100%;
      border-radius: 8px;
    }
  </style>
</head>
<body>
<header>
  <a class="navbar-brand" href="index.html">
    <h1>CIBO.</h1>
  </a>
  <h3 class="sublogo">- Where Every Recipe Tells a Story -</h3>
  <div class="navbar">
    <a href="index.html">Home</a>
    <a href="register.php">Register</a>
    <a href="login.php" class="btnLogin-popup">Login</a>  
  </div>
</header>
  
  <main>
    <div class="container">
      <div class="recipe-details">
        <h2><?php echo htmlspecialchars($recipe['title']); ?></h2>
        <img src="img/<?php echo htmlspecialchars($recipe['image']); ?>" alt="<?php echo htmlspecialchars($recipe['title']); ?>">
        <p><strong>Description:</strong> <?php echo htmlspecialchars($recipe['description']); ?></p>
        <h3>Ingredients:</h3>
        <ul>
          <?php
          $ingredients = explode("\n", $recipe['ingredients']);
          foreach ($ingredients as $ingredient) {
              echo "<li>" . htmlspecialchars($ingredient) . "</li>";
          }
          ?>
        </ul>
        <h3>Instructions:</h3>
        <ol>
          <?php
          $instructions = explode("\n", $recipe['instructions']);
          foreach ($instructions as $instruction) {
              echo "<li>" . htmlspecialchars($instruction) . "</li>";
          }
          ?>
        </ol>
        <p><a href="index.html">&larr; Back to Home</a></p>
      </div>
    </div>
  </main>
  
  <footer class="footer mt-auto py-3 bg-light">
    <div class="container">
      <span class="text-muted">&copy; 2024 powered by Sajjad. All Rights Reserved.</span>
    </div>
  </footer>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
