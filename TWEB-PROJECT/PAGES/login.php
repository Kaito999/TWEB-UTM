<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/header.css" />
  <link rel="stylesheet" href="../css/login.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>
<body>
  <?php require('navbar.php') ?>

  <section class="forms-section">
  <div class="forms">
    <div class="form-wrapper is-active">

      <button type="button" class="switcher switcher-login">
        Sign in
        <span class="underline"></span>
      </button>
      <form action="signIn.php" method="post" class="form form-login">
        
        <div class="error-message">
          <?php session_start(); 
            if (isset($_SESSION['signin-errors']) && $_SESSION['signin-errors']){
              echo " <div style='background-color: red'> Wrong email or password. </div> ";
              $_SESSION['signin-errors'] = false;
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
              <input name="input-password" id="login-password" placeholder="Password" type="password" required minlength="8">
              <span class="requirements">Password must be between 7 to 16 charachters and contain only characters, 
                numeric digits, underscore and first character must be a letter</span>
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
      <form action="signUP.php" method="post" class="form form-signup">
        
        <p style='color: red'>
          <?php 
            if(isset($_SESSION['query_result']) && $_SESSION['signup-errors'] == true){
              echo $_SESSION['query_result'];
              unset($_SESSION['query_result']);
            }
          ?>
        </p>

        <fieldset>
          <legend>Please, enter your email, password and password confirmation for sign up.</legend>
          <div class="input-block">
            <label for="signup-email">E-mail</label>
            <input name="register-email" id="signup-email" placeholder="Email" type="email" required>
          </div>
          <div class="input-block">
            <label for="signup-password">Password</label>
            <input name="register-password" id="signup-password" placeholder="Password" type="password" required>
          </div>
          <div class="input-block">
            <label for="signup-password-confirm">Confirm password</label>
            <input name="confirm-password" id="signup-password-confirm" placeholder="Confirm password" type="password" required>
          </div>
        </fieldset>
        <button type="submit" class="btn-signup">Sign up</button>
      </form>
    </div>
  </div>
  <script src="../index.js"></script>
  </section>
</body>
</html>




