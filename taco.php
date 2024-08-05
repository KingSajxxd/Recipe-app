<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" type="image/png" href="img/icon1.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Spicy Tacos - CIBO</title>
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
<body style="background-color: #D0E0D0;">
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
      <h2>Spicy Tacos</h2>
      <img src="img/3.jpg" alt="Spicy Tacos">
      <p><strong>Description:</strong> Try these flavorful tacos with a spicy kick.</p>
      <h3>Ingredients:</h3>
      <ul>
        <li>500g ground beef</li>
        <li>1 packet taco seasoning</li>
        <li>12 taco shells</li>
        <li>1 cup shredded lettuce</li>
        <li>1 cup diced tomatoes</li>
        <li>1/2 cup shredded cheese</li>
        <li>1/4 cup chopped fresh cilantro</li>
        <li>1 jalapeño, sliced (optional for extra heat)</li>
        <li>Salt and pepper to taste</li>
      </ul>
      <h3>Instructions:</h3>
      <ol>
        <li>In a skillet over medium heat, cook the ground beef until browned. Drain excess fat.</li>
        <li>Add taco seasoning to the beef and mix according to packet instructions.</li>
        <li>Warm taco shells according to package instructions.</li>
        <li>Fill each taco shell with seasoned beef, then top with lettuce, tomatoes, cheese, and cilantro.</li>
        <li>Add jalapeño slices if desired for extra heat.</li>
        <li>Serve immediately with your favorite taco toppings.</li>
      </ol>
      &ensp;
      <p><a href="index.html" class="btn-custom">&larr; Back to Home</a></p>
    </div>
  </div>
</main>
  
<footer>
  <p>&copy; 2024 powered by Sajjad. All Rights Reserved.</p>
</footer>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
