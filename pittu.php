<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" type="image/png" href="img/icon1.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Pittu - CIBO</title>
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
        <h2>Pittu</h2>
        <img src="img/17.jpg" alt="Pittu">
        <p><strong>Description:</strong> A traditional Sri Lankan dish made from steamed rice flour and grated coconut, often served with a variety of curries or sambols.</p>
        <h3>Ingredients:</h3>
        <ul>
          <li>2 cups rice flour</li>
          <li>1 cup grated coconut</li>
          <li>1 teaspoon salt</li>
          <li>1 cup water (or as needed)</li>
          <li>1 tablespoon vegetable oil</li>
          <li>Fresh cilantro for garnish (optional)</li>
        </ul>
        <h3>Instructions:</h3>
        <ol>
          <li>In a large bowl, mix the rice flour and salt. Gradually add water, a little at a time, until you get a crumbly texture that holds together when pressed.</li>
          <li>Layer a steaming tray or basket with a clean cloth or banana leaves. Sprinkle a little grated coconut at the bottom.</li>
          <li>Place a portion of the rice flour mixture on top of the coconut, pressing down gently. Repeat the layers, ending with a layer of grated coconut.</li>
          <li>Cover the tray with a lid or foil and steam over boiling water for about 30 minutes, or until the pittu is cooked through.</li>
          <li>Remove from the steamer and let cool slightly before serving. Garnish with fresh cilantro if desired.</li>
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
