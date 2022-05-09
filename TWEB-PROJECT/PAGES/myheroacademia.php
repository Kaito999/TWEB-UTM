<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Hero Academia</title>
  <link rel="stylesheet" href="../css/movie.css" />
  <link rel="stylesheet" href="../css/header.css" />
</head>

<body>
  <!-- Navigation menu-->
  <?php require('navbar.php'); ?>

  <div class="container">
    <section class="movie-details">
      <div class="movie-image">
        <img src="../images/myheroacademia.jpg" alt="" />
      </div>
      <div class="title-text">
        <div class="title">
          <span>My Hero Academia</span>
        </div>
        <div class="movie-text">
          <p>
            In a world where most of the population is gifted with special
            powers known as "Quirks", Izuku Midoriya is a young boy who always
            dreamed of becoming a hero, despite not having a Quirk himself,
            until one day he is attacked by a villain made of sludge and is
            rescued by none other than All Might, the most famous hero ever
            and his idol since childhood.
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
      <iframe width="900" height="500" src="https://www.youtube.com/embed/EPVkcwyLQQ8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>

  <script src="../index.js"></script>
</body>

</html>