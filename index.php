<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Neon Rental</title>

  
  <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick-theme.css"/>
  <!--<link rel="stylesheet" href="style.css">-->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Smooch+Sans&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;

    }

    body {
      
      background-image: url('img/rental_background.jpg');
      background-size: cover;

      font-family: 'Roboto', sans-serif;
      font-family: 'Smooch Sans', sans-serif;
      
    }

    /*h1 {
      color: white;
    }*/

    .logo {
      display: flex;
      justify-content: center;
      margin: 20px;
      height: 250px;
      
    }
    
    .intro {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      margin: 40px;
      color: white;

      background-color: rgb(30, 30, 30, 0.8);
      border-radius: 18px;
      height: 100px;
      font-size: 24px;

    }

    .card {
      border: none;
      border-radius: 18px;
      background: rgb(30,30,30, 0.8);
      color: white;
      margin: 20px 80px;

      display: flex;
      flex-direction: column;
      padding: 10px;
      max-width: 500px;
      font-size: 20px;
    }

    .card .info {
      display: flex;
      justify-content: space-between;
      align-items: center;
     
    }

    .card h2 {
      font-size: 36px;
    }

    .card h5 {
      font-size: 20px;
    }

    .card p {
      margin: 10px 0;
    }

    .card img {
      width: 100%;
      margin-top: 10px;

    }

    button {
      margin: 50px;
    }

    .alugar {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    input {
      margin: 20px;
      background-color: rgb(4,217,255); 
      color: rgb(255, 255, 255);
      font-size: 20px; 
      padding: 10px 20px; 
      border: none; 
      border-radius: 5px;

    }
    


  </style>

</head>

<body>

  <!--<h1>Neon Rental</h1>-->
  <div class='logo'><img src='img/neon_logo.png'></div>

  <div class="intro">
  <p>"É o ano de 20XX e mais um dia chega ao fim em Purple City. Conforme o fevor diurno dá lugar à agitação noturna, você refaz o caminho para casa exausto do trabalho.</p>
  <p>Você decide parar na sua habitual locadora de vídeos e descobre que chegou uma nova coleção de filmes do início do século. São verdadeiras relíquias para falar a verdade.</p>
  <p>Qual você alugará?"</p>
  </div>

  <?php
    include ('data-processing.php');
  ?>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="slick-1.8.1/slick/slick.min.js"></script>

  <script>
      // Initialize the Slick slider
      $(document).ready(function(){
          $('.card-slider').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 3,
            responsive: [
              {
                breakpoint: 768,
                settings: {
                  arrows: false,
                  centerMode: true,
                  centerPadding: '40px',
                  slidesToShow: 3
                }
              },
              {
                breakpoint: 480,
                settings: {
                  arrows: false,
                  centerMode: true,
                  centerPadding: '40px',
                  slidesToShow: 1
                }
              }
            ]
          });
      });
  </script>
   
</body>
</html>