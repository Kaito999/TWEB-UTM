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
          <img src="../images/demonslayer.jpg" alt="" />
        </div>
        <div class="title-text">
          <div class="title">
            <span>Demon Slayer</span>
          </div>
          <div class="movie-text">
            <p>
              A family is attacked by demons and only two members survive -
              Tanjiro and his sister Nezuko, who is turning into a demon slowly.
              Tanjiro sets out to become a demon slayer to avenge his family and
              cure his sister.
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
          src="https://www.youtube.com/embed/VQGCKyvzIM4"
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
