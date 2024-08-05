
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" type="image/png" href="img/icon1.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Dashboard - CIBO</title>
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
    color: black;    ;
    font-weight: 500;
    margin-left: 40px;
    transition: .5s ease;

}
.btnLogin-popup:hover {
    background: red;
    color: black;
}
.dashboard{
    background: url(img/10.jpg); 
    background-size: cover; 
    background-position: center;
}
  </style>
</head>
<body class="dashboard">
<header>
<a class="navbar-brand" href="index.html" style="display: flex; align-items: center;">
    <img src="img/19.png" alt="Logo" width="80px" height="80px">
  </a>
  <h3 class="sublogo">- Recipes for Every Craving -</h3>
  <div class="navbar">
    <a href="index.html">Home</a>
    <a href="register.php">Register</a>
    <form action="logout.php" method="POST">
    <button type="submit" class="btnLogin-popup">Logout</button>
     </form>
  </div>
</header>
  <main>
  <div style="margin-top: 150px;" class="container-md text-center " style="max-width: 850px;">
        <h1 style="font-size: 5em;" class="logo">Welcome!</h1>

        <div style="justify-content: center;" class="row">
          

            
          
        <a class="col-4 dash-card card p-3 rounded-5" id="recipeh4" style="width: 25rem; text-decoration: none; color: black" href="user_recipes.php">
  <img src="img/9.jpg" class="card-img-top" alt="..."/>
  <h4 style="margin-top: 10px;">View Added Recipes</h4>
</a>

            &ensp;
            &ensp;
            &ensp;
            &ensp;
            <a class="col-4 dash-card card p-3 rounded-5" style="width: 25rem; text-decoration: none; color: black" href="add_recipe.php">
            <img src="img/8.jpg" class="card-img-top" alt="..."/>
            <h4 style="margin-top: 10px;">Add New Recipes</h4>
            </a>
            
          
      </div>
    </div>

   

  </main>
  <footer>
    <p>&copy; 2024 powered by Sajjad. All Rights Reserved.</p>
  </footer>
</body>
</html>
