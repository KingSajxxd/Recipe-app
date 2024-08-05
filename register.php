<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - CIBO</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/png" href="img/icon1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
    <a class="navbar-brand" href="index.html" style="display: flex; align-items: center;">
    <img src="img/19.png" alt="Logo" width="80px" height="80px">
  </a>
  <h3 class="sublogo">- Recipes around the world -</h3>
      <div class="navbar">
          <a href="index.html">Home</a>
          <a href="register.php">Register</a>
          <a href="login.php">Login</a>
          
      </div>
      </header>
      <body class="home" id="registerhome">
      </body>
      <div class="container-md" style="max-width: 500px; margin-top: 200px; margin-bottom: 120px; margin-left: 800px; ">
        <h1 class="logo" style="margin-left: 50px;">Let's get registered!</h1>
        <form action="dbregister.php" method="POST">
            <div class="input-group">
                <input type="email" class="emailadd" id="email" aria-describedby="emailHelp" name="email" placeholder="Email address" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="input-group">
                <input type="text" class="fname" id="first_name" name="first_name" placeholder="First Name" required>
            </div>
            <div class="input-group">
                <input type="text" class="lname" id="last_name" name="last_name" placeholder="Last Name" required>
            </div>
        
            <button type="submit" class="btn-primary" style="margin-left: 100px;">Register</button>
            <div class="d-inline-block signUp-link" style="margin-left: 25px;">
                <p style="margin-left: 50px;">Already a member? <a href="login.php"
                class="signUpBtn-link">Login Now!</a></p>
            </div>
            </div>
        </form>
    </div>
    <footer>
        <p>&copy; 2024 powered by Sajjad. All Rights Reserved.</p>
      </footer>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
    </body>
</html>