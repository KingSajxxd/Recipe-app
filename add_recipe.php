
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" type="image/png" href="img/icon1.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Add Recipe - CIBO</title>
  <style>
    .form-container {
      max-width: 800px;
      margin: 50px auto;
      padding: 20px;
      background-color: #f8f9fa;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .btnLogin-popup {
    width: 130px;
    height: 50px;
    background: wheat;
    border: 2px wheat;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1.1em;
    color: black;    ;
    font-weight: 500;
    margin-left: 40px;
    transition: .5s ease;

}
.btnLogin-popup:hover {
    background: red;
    color: black;
}
.addrechome{
  background: url(img/11.jpg); 
    background-size: cover; 
    background-position: center;
}
  </style>
</head>
<body class="addrechome">
<header>
<a class="navbar-brand" href="index.html" style="display: flex; align-items: center;">
    <img src="img/19.png" alt="Logo" width="80px" height="80px">
  </a>
  <h3 class="sublogo">- Cook. Share. Enjoy -</h3>
  <div class="navbar">
    <a href="index.html">Home</a>
    <a href="register.php">Register</a>
    <form action="logout.php" method="POST">
    <button type="submit" class="btnLogin-popup">Logout</button>
     </form>
</header>
  <main>
    <div class="container" style="margin-top: 150px;">
      <div class="form-container" style="background: lightsteelblue;">
        <h2>Add New Recipe</h2>
        <form action="dbadd_recipe.php" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="title" class="form-label">Recipe Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="ingredients" class="form-label">Ingredients</label>
            <textarea class="form-control" id="ingredients" name="ingredients" rows="5" required></textarea>
          </div>
          <div class="mb-3">
            <label for="instructions" class="form-label">Instructions</label>
            <textarea class="form-control" id="instructions" name="instructions" rows="5" required></textarea>
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image" required>
          </div>
          <button type="submit" class="btn-primary">Add Recipe</button>
        </form>
      </div>
    </div>
  </main>
  
  <footer>
        <p>&copy; 2024 powered by Sajjad. All Rights Reserved.</p>
      </footer>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

