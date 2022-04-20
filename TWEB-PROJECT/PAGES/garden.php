<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Demon Slayer</title>
    <link rel="stylesheet" href="../css/movie.css" />
    <link rel="stylesheet" href="../css/header.css" />
  </head>
  <body>
    <!-- Navigation menu-->
    <?php require('navbar.php'); ?>

    <div class="container">
      <section class="movie-details">
        <div class="movie-image">
          <img src="../images/garden.jpg" alt="" />
        </div>
        <div class="title-text">
          <div class="title">
            <span>Garden of words</span>
          </div>
          <div class="movie-text">
            <p>
              On a rainy morning in Tokyo, Takao Akizuki, an aspiring shoemaker,
              decides to skip class to sketch designs in a beautiful garden.
              This is where he meets Yukari Yukino, a beautiful yet mysterious
              woman, for the very first time. Offering to make her new shoes,
              Takao continues to meet with Yukari throughout the rainy season,
              and without even realizing it, the two are able to alleviate the
              worries hidden in their hearts just by being with each other.
              However, their personal struggles have not disappeared completely,
              and as the end of the rainy season approaches, their relationship
              will be put to the test.
            </p>
          </div>
          <div class="trailer-button">
            <a href="#trailer">
              <button><span>Watch Trailer</span></button>
            </a>
          </div>
        </div>
      </section>

      <div class="trailer-video" id="trailer">
        <iframe
          width="900"
          height="500"
          src="https://www.youtube.com/embed/FMabhvDoolc"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>
      </div>
    </div>

    <script src="../index.js"></script>
  </body>
</html>
