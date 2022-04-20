<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="CSS/header.css" />
  <link rel="stylesheet" href="CSS/login.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>
<body>
  <?php require('Templates/navbar.php') ?>

  <section class="forms-section">
  <div class="forms">
    <div class="form-wrapper is-active">

      <button type="button" class="switcher switcher-login">
        Sign in
        <span class="underline"></span>
      </button>
      <form action="loginForm.php" method="post" class="form form-login">
        
      <div>
        
        <?php session_start(); if (isset($_SESSION['errors']) && $_SESSION['errors']){
          echo "
          <div style='background-color: red'> Error </div>
          ";

          $_SESSION['errors'] = false;
        } 
        ?>


      </div>
        

        <fieldset>
          <legend>Please, enter your email and password for login.</legend>
          <div class="input-block">
            <label for="login-email">E-mail</label>
            <input name="input-email" id="login-email" placeholder="Email" type="email" required>
          </div>
          <div class="input-block">
            <label for="login-password">Password</label>
            <input name="input-password" id="login-password" placeholder="Password" type="password" required>
          </div>
        </fieldset>
        <button type="submit" class="btn-login">Sign in</button>
      </form>

    </div>

    <div class="form-wrapper">
      <button type="button" class="switcher switcher-signup">
        SIGN UP
        <span class="underline"></span>
      </button>
      <form class="form form-signup">
        <fieldset>
          <legend>Please, enter your email, password and password confirmation for sign up.</legend>
          <div class="input-block">
            <label for="signup-email">E-mail</label>
            <input id="signup-email" placeholder="Email" type="email" required>
          </div>
          <div class="input-block">
            <label for="signup-password">Password</label>
            <input id="signup-password" placeholder="Password" type="password" required>
          </div>
          <div class="input-block">
            <label for="signup-password-confirm">Confirm password</label>
            <input id="signup-password-confirm" placeholder="Confirm password" type="password" required>
          </div>
        </fieldset>
        <button type="submit" class="btn-signup">Sign up</button>
      </form>
    </div>
  </div>
  <script src="index.js"></script>
  </section>
</body>
</html>




