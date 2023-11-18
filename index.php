<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seleção Especial de Filmes</title>

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick-theme.css"/>

</head>

<body>

  <h1>Seleção Especial de Filmes</h1>
  
  <?php
    include ('data-processing.php');
  ?>

  <div class="your-slider-class"></div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="slick-1.8.1/slick/slick.min.js"></script>

  <script>
      // Initialize the Slick slider
      $(document).ready(function(){
          $('.card-slider').slick({
              slidesToShow: 3, // Number of cards to show
              slidesToScroll: 1,
              autoplay: true,
              autoplaySpeed: 2000, // Autoplay speed in milliseconds
          });
      });
  </script>

</body>
</html>