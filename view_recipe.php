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

// Retrieve recipe_id from URL
if (isset($_GET['id'])) {
    $recipe_id = $_GET['id'];
} else {
    // Redirect to user recipes page if no recipe id is provided
    header("Location: user_recipes.php");
    exit();
}

// Fetch recipe details from the database
$sql = "SELECT * FROM recipes WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $recipe_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    // Redirect to user recipes page if recipe not found
    header("Location: user_recipes.php");
    exit();
}

$recipe = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="img/icon1.png">
  <title>Recipe Details - CIBO</title>
  <style>
    .recipe-details {
      margin: 50px auto;
      max-width: 800px;
      padding: 20px;
      background-color: #f8f9fa;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .recipe-details h2 {
      margin-bottom: 20px;
    }
    .recipe-details img {
      max-width: 100%;
      border-radius: 8px;
    }
    .recipe-details p {
      line-height: 1.6;
    }
    .btnLogin-popup {
      width: 130px;
      height: 50px;
      background: white;
      border: 2px wheat;
      outline: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 1.1em;
      color: black;
      font-weight: 500;
      margin-left: 40px;
      transition: .5s ease;
    }
    .btnLogin-popup:hover {
      background: red;
      color: white;
    }
    .recipe-details a{
        width: 130px;
      height: 50px;
      background: wheat;
      border: 2px wheat;
      outline: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 1.1em;
      color: black;
      font-weight: 500;
      margin-left: 40px;
      transition: .5s ease;
    }
    .recipe-details a:hover {
      background: palevioletred;
      color: white;
    }
    .btn-custom {
      color: black;
      background: wheat;
      text-decoration: none;
      border: 2px solid white;
      border-radius: 10px;
      font-weight: 500;
      padding: 10px 40px;
      transition: .5s;
    }

    .btn-custom:hover {
      background: palevioletred;
      color: white;
    }
  </style>
</head>
<body style="background-color: #D0E0D0;">
<header>
<a class="navbar-brand" href="index.html" style="display: flex; align-items: center;">
    <img src="img/19.png" alt="Logo" width="80px" height="80px">
  </a>
  <h3 class="sublogo">- Discover the Flavors of Home -</h3>
  <div class="navbar">
    <a href="index.html">Home</a>
    <a href="register.php">Register</a>
    <form action="logout.php" method="POST">
    <button type="submit" class="btnLogin-popup">Logout</button>
     </form>
  </div>
</header>
  
<main>
  <div class="container" style="margin-top: 150px; margin-bottom: 100px;">
    <div class="recipe-details">
      <h2><?php echo htmlspecialchars($recipe['title']); ?></h2>
      <img src="img/<?php echo htmlspecialchars($recipe['image']); ?>" alt="<?php echo htmlspecialchars($recipe['title']); ?>">
      <p><strong>Description:</strong> <?php echo nl2br(htmlspecialchars($recipe['description'])); ?></p>
      <h3>Ingredients:</h3>
      <p><?php echo nl2br(htmlspecialchars($recipe['ingredients'])); ?></p>
      <h3>Instructions:</h3>
      <p><?php echo nl2br(htmlspecialchars($recipe['instructions'])); ?></p>
      &ensp;
      <p><a href="user_recipes.php" class="btn-custom">&larr; Back to My Recipes</a></p>
    </div>
  </div>
</main>
  
<footer>
        <p>&copy; 2024 powered by Sajjad. All Rights Reserved.</p>
      </footer>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$stmt->close();
$conn->close();
?>
