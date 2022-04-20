<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Weathering with you</title>
    <link rel="stylesheet" href="../css/movie.css" />
    <link rel="stylesheet" href="../css/header.css" />
  </head>
  <body>
    <!-- Navigation menu-->
    <?php require('navbar.php'); ?>

    <div class="container">
      <section class="movie-details">
        <div class="movie-image">
          <img src="../images/weatheringStory.jpg" alt="" />
        </div>
        <div class="title-text">
          <div class="title">
            <span>Weathering with you</span>
          </div>
          <div class="movie-text">
            <p>
              Hodaka runs away from home to chase a light, a light that brings
              him to Hina. Someone who has just experienced a recent tragedy
              that is life-altering and makes it seem the rain overhead, and
              darkness the clouds brings, are very fitting for her mood. But,
              she too sees a light and ventures to where it lands on the top of
              a condemned building. It is there when she finds herself praying
              at a small shrine and finding herself becoming a sunshine girl.
              Now, what is a sunshine girl? Well, it means when Hina prays, the
              rain that has lasted over Tokyo for over 2 months dissipates.
              However, when it comes to Hodaka, Hina is less of a sunshine girl
              because of a mysteriously inherited power and more so for being a
              light in what he portrays to be a rather dark life.
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
          src="https://www.youtube.com/embed/Q6iK6DjV_iE"
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
