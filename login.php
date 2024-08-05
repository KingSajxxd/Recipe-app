<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Now!</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/png" href="img/icon1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="home" id="loginhome">
    <header>
      <a class="navbar-brand" href="index.html" style="display: flex; align-items: center;">
        <img src="img/19.png" alt="Logo" width="80px" height="80px">
      </a>
      <h3 class="sublogo">- Unleash Your Inner Chef -</h3>
      <div class="navbar">
        <a href="index.html">Home</a>
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
      </div>
    </header>
    <div class="container-md" style="max-width: 500px; margin-top: 200px; margin-bottom: 100px; margin-left: 800px;">
      <div class="logo">
        <form action="dblogin.php" method="POST">
          <h1>Login</h1>
          <div class="input-group">
            <input type="text" name="email" required>
            <label for="">Username</label>
            <i class='bx bxs-user'></i>
          </div>
          <div class="input-group">
            <input type="password" name="password" required>
            <label for="">Password</label>
            <i class='bx bxs-lock-alt'></i>
          </div>
          <div class="remember">
            <label for=""><input type="checkbox"> Remember me</label>
          </div>
          <button type="submit" class="btn-primary">Login</button>
        </form>
        <div class="signUp-link">
          <p>Don't have an account? <a href="register.php" class="signUpBtn-link">Register now!</a></p>
        </div>
      </div>
    </div>
    <footer>
      <p>&copy; 2024 powered by Sajjad. All Rights Reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      ScrollReveal({
        reset: true,
        distance: '60px',
        duration: 300,
        delay: 400
      });
      ScrollReveal().reveal('.input-con', { delay: 250, origin: 'left' });
    </script>
  </body>
</html>
