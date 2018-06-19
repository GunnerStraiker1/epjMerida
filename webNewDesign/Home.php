<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/Home.css">
    <link rel="stylesheet" href="../css/Menu.css">
    <link rel="shortcut icon" href="../img/favicon.ico">
    <title>EPJ Mérida</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php
			include "Menu.php";
		?>
    <div class="conatiner-flex">
      <div class="container-flex">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="img-fluid" src="../img/timon.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="img-fluid" src="../img/img3.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="img-fluid" src="../img/img4.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="img-fluid" src="../img/img5.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="img-fluid" src="../img/img6.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-12" id="promo1">
            <h1>¡VEN Y FORMA PARTE DE ESTA GRAN FAMILIA!</h1>
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-sm-12 title">
            Próximas Actividades
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 actividades">
            <img src="../img/act6.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 actividades">
            <img src="../img/act4.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 actividades">
            <img src="../img/act1.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript">
    $('.carousel').carousel({
      interval: 4000
    })
  </script>
</html>
