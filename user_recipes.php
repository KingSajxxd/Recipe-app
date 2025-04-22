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

// Fetch recipes added by the logged-in user
$sql = "SELECT * FROM recipes WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="img/icon1.png">
  <title>My Recipes - CIBO</title>
  <style>
    .btnLogin-popup {
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
    .btnLogin-popup:hover {
      background: red;
      color: white;
    }
    .userrechome{
      background: url(img/12.jpg); 
    background-size: cover; 
    background-position: center;
    }
    
.card {
    display: flex;
    flex-direction: column;
    height: 100%;
    border: 1px solid #ddd; /* Optional: for better border visibility */
    border-radius: 8px;
    overflow: hidden; /* Ensures content doesn't overflow */
}

.card-img-top {
    width: 100%;
    height: 200px; /* Adjust as needed */
    object-fit: cover;
}

.card-body {
    display: flex;
    flex-direction: column;
    flex: 1; /* Allows the body to take up remaining space */
}

.card-title {
    margin-top: 10px;
    font-size: 1.25rem;
}

.card-text {
    flex-grow: 1; /* Allows text to take up available space */
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
<body class="userrechome">
<header>
   <a class="navbar-brand" href="index.html" style="display: flex; align-items: center;">
    <img src="img/19.png" alt="Logo" width="80px" height="80px">
  </a>
  <h3 class="sublogo">- Your Culinary Companion -</h3>
  <div class="navbar">
    <a href="index.html">Home</a>
    <a href="register.php">Register</a>
    <form action="logout.php" method="POST">
      <button type="submit" class="btnLogin-popup">Logout</button>
    </form> 
  </div>
</header>
<main class="container" style="margin-top: 100px;">
  
<div class="row" style="margin-top: 20px; margin-bottom: 100px;">
    <?php while($row = $result->fetch_assoc()): ?>
    <div class="col-md-4">
      <div class="card border-5 mb-4">
        <img src="img/<?php echo $row['image']; ?>" class="card-img-top" alt="<?php echo $row['title']; ?>">
        <div class="card-body">
            <h5 class="card-title"><?php echo $row['title']; ?></h5>
            <p class="card-text"><?php echo $row['description']; ?></p>
            <a href="view_recipe.php?id=<?php echo $row['id']; ?>" class="btn-custom">View Recipe</a>
            <form action="delete_recipe.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this recipe?');">
                <input type="hidden" name="recipe_id" value="<?php echo $row['id']; ?>">
                <button type="submit" class="btn btn-danger mt-3" style="margin right: 0">Delete</button>
            </form>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
</div>
</main>
<footer>
  <p>&copy; 2024 powered by Sajjad. All Rights Reserved.</p>
</footer>
</body>
</html>

<?php
$stmt->close();
$conn->close();
?>
