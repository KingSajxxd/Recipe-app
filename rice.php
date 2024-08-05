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
  
  <<main>
    <div class="container" style="margin-top: 150px; margin-bottom: 100px;">
      <div class="recipe-details">
        <h2>Rice and Curry</h2>
        <img src="img/15.jpg" alt="Rice and Curry">
        <p><strong>Description:</strong> A traditional Sri Lankan dish featuring fragrant rice served with a variety of spicy curries and sambols.</p>
        <h3>Ingredients:</h3>
        <ul>
          <li>2 cups Basmati rice</li>
          <li>1 lb chicken, cut into pieces</li>
          <li>1 large onion, chopped</li>
          <li>2 cloves garlic, minced</li>
          <li>1 tablespoon curry powder</li>
          <li>1 teaspoon turmeric</li>
          <li>1 cup coconut milk</li>
          <li>2 tomatoes, chopped</li>
          <li>Salt and pepper to taste</li>
          <li>Fresh cilantro for garnish</li>
          <li>2 tablespoons vegetable oil</li>
        </ul>
        <h3>Instructions:</h3>
        <ol>
          <li>Rinse the rice under cold water until the water runs clear. Cook according to package instructions and set aside.</li>
          <li>Heat the oil in a large pot over medium heat. Add the chopped onion and garlic, and sauté until soft.</li>
          <li>Add the curry powder and turmeric, and cook for 1 minute until fragrant.</li>
          <li>Add the chicken pieces and cook until browned on all sides.</li>
          <li>Stir in the tomatoes and cook for another 5 minutes.</li>
          <li>Pour in the coconut milk, and season with salt and pepper. Bring to a boil, then reduce heat and simmer for 20 minutes or until the chicken is cooked through.</li>
          <li>Serve the curry over the cooked rice, garnished with fresh cilantro.</li>
        </ol>
        &ensp;
        <p><a href="index.html" class="btn-custom">&larr; Back to Home</a></p>
      </div>
    </div>
  </main>
  
  <footer>
    <p>&copy; 2024 powered by Sajjad. All Rights Reserved.</p>
  </footer>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
