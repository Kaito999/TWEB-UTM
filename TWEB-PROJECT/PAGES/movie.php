<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jujutsu Kaisen</title>
  <link rel="stylesheet" href="../css/movie.css" />
  <link rel="stylesheet" href="../css/header.css" />
</head>

<body>
  <!-- Navigation menu-->
  <?php require('navbar.php'); ?>

  <div class="container">
    <section class="movie-details">
      <div class="movie-image">
        <img src="../images/jujutsu-details.jpg" alt="" />
      </div>
      <div class="title-text">
        <div class="title">
          <span>Jujutsu Kaisen</span>
        </div>
        <div class="movie-text">
          <p>
            Jujutsu Kaisen is a TV Anime that started back in 2020 and still
            in production with a length of 24 minutes per episode and an
            amazing 8.7 out of 10 stars rating by 30,000 unique voters. Stars
            of Jujutsu Kaisen are Junya Enoki(as Yuji Itadori), Adam
            McArthur(as uuji Itadori), Yûichi Nakamura(as Satoru Gojo).
            Jujutsu Kaisen is a very popular in the anime world and definitely
            worth watching. This anime series tells the story about a boy who
            swallows a cursed talisman also known as the finder of a demon,
            and becomes cursed himself. Then he begins a quest in locating the
            demon's other body parts and enters a shaman's school to exorcise
            himself.
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
      <iframe width="900" height="500" src="https://www.youtube.com/embed/2docezZl574" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>

  <script src="../index.js"></script>
</body>

</html>