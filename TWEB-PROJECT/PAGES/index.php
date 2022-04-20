<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Totoro Films</title>
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/slider.css" />
  </head>
  <body>
    <div id="background" class="background"></div>

    <?php require('navbar.php') ?>
    
      <!-- Top container for new anime titles -->
      <section class="top-container">
        <a href="#slider">
          <div class="gif-scroll">
            <div class="scroll"></div>
            <div class="scroll"></div>
            <div class="scroll"></div>
          </div>
        </a>
      </section>

      <section class="soon-container" id="slider">
        <div class="items">
          <div class="item active">
            <a href="movie.php">
              <img
                src="../images/jujutsu-mini.jpg"
                alt="Jujutsu Kaisen Zero"
              />
            </a>
          </div>
          <div class="item next">
            <a href="demonslayer.php">
              <img
                src="../images/demonslayer.jpg"
                alt="Demon Slayer"
              />
            </a>
          </div>
          <div class="item">
            <a href="myheroacademia.php">
              <img src="../images/myheroacademia.jpg" alt="My hero academia" />
            </a>
          </div>
          <div class="item">
            <a href="weathering.php"
              ><img src="../images/weatheringMini.jpg" alt="Weathering with you"
            /></a>
          </div>
          <div class="item prev">
            <a href="garden.php">
              <img src="../images/garden.jpg" alt="Garden of words" />
            </a>
          </div>
          <div class="button-container">
            <div class="button"><i class="fas fa-angle-left"></i></div>
            <div class="button"><i class="fas fa-angle-right"></i></div>
          </div>
        </div>
      </section>

      <!-- Footer -->
      <footer id="footer">
        <p>Totoro Films &copy; 2022</p>
      </footer>
    </div>
    <script src="../index.js"></script>
  </body>
</html>
