<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" type="image/png" href="img/icon1.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Kottu Roti - CIBO</title>
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
    body {
      background-color: #D0E0D0;
    }
  </style>
</head>
<body>
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
        <h2>Kottu Roti</h2>
        <img src="img/16.jpg" alt="Kottu Roti">
        <p><strong>Description:</strong> A popular Sri Lankan street food made with shredded roti, vegetables, and your choice of meat, all stir-fried together with aromatic spices.</p>
        <h3>Ingredients:</h3>
        <ul>
          <li>4 roti, shredded</li>
          <li>1 cup chicken or beef, diced</li>
          <li>1 large onion, chopped</li>
          <li>2 cloves garlic, minced</li>
          <li>1 bell pepper, chopped</li>
          <li>2 carrots, sliced</li>
          <li>1/2 cup green beans, chopped</li>
          <li>2 tablespoons curry powder</li>
          <li>1 tablespoon soy sauce</li>
          <li>2 tablespoons vegetable oil</li>
          <li>Salt and pepper to taste</li>
          <li>Fresh cilantro for garnish</li>
        </ul>
        <h3>Instructions:</h3>
        <ol>
          <li>Heat the oil in a large pan or wok over medium heat. Add the chopped onion and garlic, and sauté until soft.</li>
          <li>Add the diced meat and cook until browned on all sides.</li>
          <li>Add the bell pepper, carrots, and green beans, and cook until the vegetables are tender.</li>
          <li>Stir in the curry powder and soy sauce, and cook for 1 minute until fragrant.</li>
          <li>Add the shredded roti and mix well to combine all ingredients. Cook for an additional 5 minutes, stirring frequently.</li>
          <li>Season with salt and pepper to taste, and garnish with fresh cilantro before serving.</li>
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
