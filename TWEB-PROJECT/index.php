<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Totoro Films</title>
    <link rel="stylesheet" href="CSS/main.css" />
    <link rel="stylesheet" href="CSS/header.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="CSS/slider.css" />
  </head>
  <body>
    <div id="background" class="background"></div>

    <?php require('Templates/navbar.php') ?>
    
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
            <a href="PAGES/movie.php">
              <img
                src="Images/JujutsuKaisenMini.jpeg"
                alt="Jujutsu Kaisen Zero"
              />
            </a>
          </div>
          <div class="item next">
            <a href="PAGES/demonslayer.php">
              <img
                src="Images/demonslayer.jpg"
                alt="5 Centimeteres per Seconds"
              />
            </a>
          </div>
          <div class="item">
            <a href="PAGES/weathering.html">
              <img src="Images/weatheringMini.jpg" alt="Weathering with you" />
            </a>
          </div>
          <div class="item">
            <a href="PAGES/suzume.html"
              ><img src="Images/suzumeMini.jpg" alt="Suzume no Tojimari"
            /></a>
          </div>
          <div class="item prev">
            <a href="PAGES/weathering.html">
              <img src="Images/weatheringMini.jpg" alt="Weathering with you" />
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
    <script src="index.js"></script>
  </body>
</html>
