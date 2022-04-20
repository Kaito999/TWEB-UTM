<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact us</title>
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/contact.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <?php require('navbar.php') ?>
    <div class="wrapper">
      <form class="form">
        <div class="pageTitle title">Contact Us</div>
        <input type="text" class="name formEntry" placeholder="Name" />
        <input type="text" class="email formEntry" placeholder="Email" />
        <textarea class="message formEntry" placeholder="Message"></textarea>
        <button class="submit formEntry" onclick="thanks()">Submit</button>
      </form>
    </div>
  </body>
</html>
