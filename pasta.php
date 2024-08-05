<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" type="image/png" href="img/icon1.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Delicious Pasta - CIBO</title>
  <style>
    /* Add custom styles as needed */
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
<body style=" background-color: #D0E0D0;">
<header>
<a class="navbar-brand" href="index.html" style="display: flex; align-items: center;">
    <img src="img/19.png" alt="Logo" width="80px" height="80px">
  </a>
  <h3 class="sublogo">- Savor Every Moment -</h3>
  <div class="navbar">
    <a href="index.html">Home</a>
    <a href="register.php">Register</a>
    <a href="login.php" class="btnLogin-popup">Login</a>  
  </div>
</header>
  
  <main>
    <div class="container" style="margin-top: 150px; margin-bottom: 100px;">
      <div class="recipe-details">
        <h2>Delicious Pasta</h2>
        <img src="img/2.jpeg" alt="Delicious Pasta">
        <p><strong>Description:</strong> A simple and tasty pasta recipe for any occasion.</p>
        <h3>Ingredients:</h3>
        <ul>
          <li>200g pasta</li>
          <li>2 cups marinara sauce</li>
          <li>1/2 cup grated Parmesan cheese</li>
          <li>Salt and pepper to taste</li>
        </ul>
        <h3>Instructions:</h3>
        <ol>
          <li>Cook pasta according to package instructions until al dente.</li>
          <li>Heat marinara sauce in a pan over medium heat.</li>
          <li>Combine cooked pasta with marinara sauce and toss until well coated.</li>
          <li>Serve hot, sprinkled with Parmesan cheese, salt, and pepper.</li>
        </ol>
        &ensp;
        <p><a href="index.html" class="btn-custom" stl>&larr; Back to Home</a></p>

      </div>
    </div>
  </main>
  
  <footer>
        <p>&copy; 2024 powered by Sajjad. All Rights Reserved.</p>
      </footer>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
