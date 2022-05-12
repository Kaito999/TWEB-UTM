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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet" />
</head>

<body>
  <?php require('navbar.php') ?>
  <div class="wrapper">
    <form action="contactSubmit.php" method="post" class="form">
      <div class="pageTitle title">Contact Us</div>
      <input id="contactUs-name" name="contact-name" type="text" class="name formEntry" placeholder="Name" type="name" required />
      <input id="contactUs-email" name="contact-email" class="email formEntry" placeholder="Email" type="email" required />
      <textarea name="contact-message" class="message formEntry" placeholder="Message" type="message" required></textarea>
      <button class="submit formEntry">Submit</button>
    </form>
  </div>

  <script src="../contactValidation.js"></script>
</body>

</html>