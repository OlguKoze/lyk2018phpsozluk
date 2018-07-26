<!doctype html>
<html lang="tr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

  <title>LYK2018-PHP</title>
</head>

<body>
<!-- NAVBAR -->
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">İSİMLER SÖZLÜĞÜ</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Anasayfa <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Erkek İsimleri</a>
          </li>
          <li class="nav-item ml-0">
            <a class="nav-link" href="#">Kız İsimleri</a>
          </li>
          <!--
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Dropdown
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Something else here</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link disabled" href="#">Disabled</a>
</li>
-->
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Hangi ismi arıyorsunuz?" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUL</button>
        </form>
      </div>
    </nav>
  </div>
  <!-- /NAVBAR -->
  <!-- SLAYT -->
  <div class="container mt-2">
    <div class="row">
      <div class="col-sm-2">

      </div>
      <div class="col-sm-8">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100 img-fluid" src="img/erkekmi.jpg" alt="First slide">
              <div class="carousel-caption d-none d-md-block text-dark">
                <h1>Erkek İsimleri</h1>
                <p> <button class="btn btn-primary btn-sm" type="button" name="button">Devamı...</button> </p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-fluid" src="img/kizmi.jpg" alt="Second slide">
              <div class="carousel-caption d-none d-md-block text-dark">
                <h1>Bayan İsimleri</h1>
                <p> <button class="btn btn-primary btn-sm" type="button" name="button">Devamı...</button> </p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 img-fluid" src="img/erkekmi.jpg" alt="Third slide">
              <div class="carousel-caption d-none d-md-block text-dark">
                <h1>Üniseks İsimler</h1>
                <p> <button class="btn btn-primary btn-sm" type="button" name="button">Devamı...</button> </p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-sm-2">

      </div>
    </div>
  </div>
  <!-- /SLAYT -->

  <!-- SLAYT -->
  <div class="container mt-2">
    <div class="row">
      <div class="col-sm-2">

      </div>
      <div class="col-sm-8">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="jumbotron">
                <h1 class="display-4">Hello, world!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
              </div>
            </div>
            <div class="carousel-item">
              <div class="jumbotron">
                <h1 class="display-4">Hello, world!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
              </div>
            </div>
            <div class="carousel-item">
              <div class="jumbotron">
                <h1 class="display-4">Hello, world!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-sm-2">

      </div>
    </div>
  </div>
  <!-- /SLAYT -->

  <!-- İSİM MENÜSÜ -->
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-12 text-center">
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>A</b> </a>
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>B</b> </a>
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>C</b> </a>
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>Ç</b> </a>
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>D</b> </a>
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>E</b> </a>
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>F</b> </a>
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>G</b> </a>
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>H</b> </a>
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>I</b> </a>
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>İ</b> </a>
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>J</b> </a>
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>K</b> </a>
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>L</b> </a>
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>M</b> </a>
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>N</b> </a>
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>O</b> </a>
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>Ö</b> </a>
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>P</b> </a>
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>R</b> </a>
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>S</b> </a>
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>Ş</b> </a>
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>T</b> </a>
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>U</b> </a>
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>Ü</b> </a>
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>V</b> </a>
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>Y</b> </a>
        <a href="#" class="btn btn-info btn-sm mr-1"> <b>Z</b> </a>
      </div>
    </div>
  </div>
  <!-- /İSİM MENÜSÜ -->










  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!--
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
-->
  <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
  <script src="bootstrap/js/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
