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

  <style media="screen">
    #ListeErkek{
      background-color:#99ffff;
      font-weight: bold;
    }
    #ListeErkek a{
      background-color:#0066ff;
      color:#ffffff;
      width:50px;
    }
    #ListeKIZ{
      background-color:#ffccff;
      font-weight: bold;
    }
    #ListeKIZ a{
      background-color:#ff66ff;
      color:#000000;
      width:50px;
    }
  </style>

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
            <a class="nav-link" href="erkekmi.php">Erkek İsimleri</a>
          </li>
          <li class="nav-item ml-0">
            <a class="nav-link" href="kizmi.php">Kız İsimleri</a>
          </li>
          <li class="nav-item ml-0">
            <a class="nav-link" href="uniseksmi.php">Üniseks İsimler</a>
          </li>
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
      <div class="col-sm-8 p-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="jumbotron text-center bg-dark text-white">
                <h1 class="display-4">ERKEK İSİMLERİ</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a class="btn btn-primary btn-lg" href="erkekmi.php" role="button">Listele</a>
              </div>
            </div>
            <div class="carousel-item">
              <div class="jumbotron text-center bg-warning">
                <h1 class="display-4">KIZ İSİMLERİ</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a class="btn btn-primary btn-lg" href="kizmi.php" role="button">Listele</a>
              </div>
            </div>
            <div class="carousel-item">
              <div class="jumbotron text-center bg-success">
                <h1 class="display-4">ÜNİSEKS İSİMLERİ</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a class="btn btn-primary btn-lg" href="uniseksmi.php" role="button">Listele</a>
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

  <!-- CARD -->
  <div class="container">
    <div class="row ">
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="img/erkekmi.jpg" alt="Erkek İsimleri">
          <div class="card-body">
            <h5 class="card-title">Erkek İsimleri</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="erkekmi.php" class="btn btn-primary">Listele</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="img/kizmi.jpg" alt="Erkek İsimleri">
          <div class="card-body">
            <h5 class="card-title">Kız İsimleri</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="kizmi.php" class="btn btn-primary">Listele</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="img/uniseksmi.jpg" alt="Erkek İsimleri">
          <div class="card-body">
            <h5 class="card-title">Üniseks İsimler</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="uniseksmi.php" class="btn btn-primary">Listele</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- CARD -->
  <p>&nbsp;</p>

  <!-- İSİM MENÜSÜ V1 -->
  <!-- ERKEK İSİM MENÜSÜ -->
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Erkek İsimleri</h2>
      </div>
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
  <!-- /ERKEK İSİM MENÜSÜ -->

  <!-- KIZ İSİM MENÜSÜ -->
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Kız İsimleri</h2>
      </div>
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
  <!-- /KIZ İSİM MENÜSÜ -->
  <!-- /İSİM MENÜSÜ V1 -->
  <p>&nbsp;</p>

  <!-- İSİM MENÜSÜ V2 -->
  <!-- ERKEK İSİM MENÜSÜ -->
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Erkek İsimleri</h2>
      </div>
      <div class="col-md-12 text-center p-3" style="background-color:#99ffff;">
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>A</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>B</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>C</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>Ç</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>D</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>E</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>F</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>G</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>H</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>I</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>İ</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>J</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>K</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>L</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>M</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>N</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>O</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>Ö</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>P</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>R</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>S</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>Ş</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>T</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>U</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>Ü</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>V</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>Y</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background-color:#0066ff; color:#ffffff;"> <b>Z</b> </a>
      </div>
    </div>
  </div>
  <!-- /ERKEK İSİM MENÜSÜ -->

  <!-- KIZ İSİM MENÜSÜ -->
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Kız İsimleri</h2>
      </div>
      <div class="col-md-12 text-center p-3" style="background-color:#ffccff;">
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>A</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>B</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>C</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>Ç</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>D</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>E</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>F</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>G</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>H</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>I</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>İ</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>J</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>K</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>L</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>M</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>N</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>O</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>Ö</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>P</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>R</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>S</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>Ş</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>T</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>U</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>Ü</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>V</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>Y</b> </a>
        <a href="#" class="btn btn-sm mr-1" style="background:#ff66ff; color:black;"> <b>Z</b> </a>
      </div>
    </div>
  </div>
  <!-- /KIZ İSİM MENÜSÜ -->
  <!-- /İSİM MENÜSÜ V2 -->
  <p>&nbsp;</p>

  <!-- İSİM MENÜSÜ V3 -->
  <!-- ERKEK İSİM MENÜSÜ -->
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Erkek İsimleri</h2>
      </div>
      <div class="col-md-12 text-center p-3" style="background-color:#99ffff;">
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>A</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>B</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>C</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>Ç</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>D</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>E</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>F</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>G</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>H</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>I</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>İ</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>J</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>K</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>L</b> </a>
      </div>
      <div class="col-md-12 text-center p-3" style="background-color:#99ffff;">
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>M</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>N</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>O</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>Ö</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>P</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>R</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>S</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>Ş</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>T</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>U</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>Ü</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>V</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>Y</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background-color:#0066ff; color:#ffffff; width:50px;"> <b>Z</b> </a>
      </div>
    </div>
  </div>
  <!-- /ERKEK İSİM MENÜSÜ -->
  <p>&nbsp;</p>
  <!-- KIZ İSİM MENÜSÜ -->
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Kız İsimleri</h2>
      </div>
      <div class="col-md-12 text-center p-3" style="background-color:#ffccff;">
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>A</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>B</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>C</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>Ç</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>D</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>E</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>F</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>G</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>H</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>I</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>İ</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>J</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>K</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>L</b> </a>
      </div>
      <div class="col-md-12 text-center p-3" style="background-color:#ffccff;" >
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>M</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>N</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>O</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>Ö</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>P</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>R</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>S</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>Ş</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>T</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>U</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>Ü</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>V</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>Y</b> </a>
        <a href="#" class="btn btn-lg mr-1" style="background:#ff66ff; color:black; width:50px;"> <b>Z</b> </a>
      </div>
    </div>
  </div>
  <!-- /KIZ İSİM MENÜSÜ -->

  <!-- /İSİM MENÜSÜ V3 -->
  <p>&nbsp;</p>
  <!-- İSİM MENÜSÜ V4 -->
  <!-- ERKEK İSİM MENÜSÜ -->
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Erkek İsimleri</h2>
      </div>
      <div class="col-md-12 text-center p-3" id="ListeErkek">
        <a href="#" class="btn btn-lg mr-1"> A </a>
        <a href="#" class="btn btn-lg mr-1"> B </a>
        <a href="#" class="btn btn-lg mr-1"> C </a>
        <a href="#" class="btn btn-lg mr-1"> Ç </a>
        <a href="#" class="btn btn-lg mr-1"> D </a>
        <a href="#" class="btn btn-lg mr-1"> E </a>
        <a href="#" class="btn btn-lg mr-1"> F </a>
        <a href="#" class="btn btn-lg mr-1"> G </a>
        <a href="#" class="btn btn-lg mr-1"> H </a>
        <a href="#" class="btn btn-lg mr-1"> I </a>
        <a href="#" class="btn btn-lg mr-1"> İ </a>
        <a href="#" class="btn btn-lg mr-1"> J </a>
        <a href="#" class="btn btn-lg mr-1"> K </a>
        <a href="#" class="btn btn-lg mr-1"> L </a>
      </div>
      <div class="col-md-12 text-center p-3" id="ListeErkek">
        <a href="#" class="btn btn-lg mr-1"> M </a>
        <a href="#" class="btn btn-lg mr-1"> N </a>
        <a href="#" class="btn btn-lg mr-1"> O </a>
        <a href="#" class="btn btn-lg mr-1"> Ö </a>
        <a href="#" class="btn btn-lg mr-1"> P </a>
        <a href="#" class="btn btn-lg mr-1"> R </a>
        <a href="#" class="btn btn-lg mr-1"> S </a>
        <a href="#" class="btn btn-lg mr-1"> Ş </a>
        <a href="#" class="btn btn-lg mr-1"> T </a>
        <a href="#" class="btn btn-lg mr-1"> U </a>
        <a href="#" class="btn btn-lg mr-1"> Ü </a>
        <a href="#" class="btn btn-lg mr-1"> V </a>
        <a href="#" class="btn btn-lg mr-1"> Y </a>
        <a href="#" class="btn btn-lg mr-1"> Z </a>
      </div>
    </div>
  </div>
  <!-- /ERKEK İSİM MENÜSÜ -->
  <!-- KIZ İSİM MENÜSÜ -->
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>Kız İsimleri</h2>
      </div>
      <div class="col-md-12 text-center p-3" id="ListeKIZ">
        <a href="#" class="btn btn-lg mr-1"> A </a>
        <a href="#" class="btn btn-lg mr-1"> B </a>
        <a href="#" class="btn btn-lg mr-1"> C </a>
        <a href="#" class="btn btn-lg mr-1"> Ç </a>
        <a href="#" class="btn btn-lg mr-1"> D </a>
        <a href="#" class="btn btn-lg mr-1"> E </a>
        <a href="#" class="btn btn-lg mr-1"> F </a>
        <a href="#" class="btn btn-lg mr-1"> G </a>
        <a href="#" class="btn btn-lg mr-1"> H </a>
        <a href="#" class="btn btn-lg mr-1"> I </a>
        <a href="#" class="btn btn-lg mr-1"> İ </a>
        <a href="#" class="btn btn-lg mr-1"> J </a>
        <a href="#" class="btn btn-lg mr-1"> K </a>
        <a href="#" class="btn btn-lg mr-1"> L </a>
      </div>
      <div class="col-md-12 text-center p-3" id="ListeKIZ">
        <a href="#" class="btn btn-lg mr-1"> M </a>
        <a href="#" class="btn btn-lg mr-1"> N </a>
        <a href="#" class="btn btn-lg mr-1"> O </a>
        <a href="#" class="btn btn-lg mr-1"> Ö </a>
        <a href="#" class="btn btn-lg mr-1"> P </a>
        <a href="#" class="btn btn-lg mr-1"> R </a>
        <a href="#" class="btn btn-lg mr-1"> S </a>
        <a href="#" class="btn btn-lg mr-1"> Ş </a>
        <a href="#" class="btn btn-lg mr-1"> T </a>
        <a href="#" class="btn btn-lg mr-1"> U </a>
        <a href="#" class="btn btn-lg mr-1"> Ü </a>
        <a href="#" class="btn btn-lg mr-1"> V </a>
        <a href="#" class="btn btn-lg mr-1"> Y </a>
        <a href="#" class="btn btn-lg mr-1"> Z </a>
      </div>
    </div>
  </div>
  <!-- /KIZ İSİM MENÜSÜ -->
  <!-- /İSİM MENÜSÜ V4 -->
  <p>&nbsp;</p>

  <!-- İSİM LİSTESİ -->
  <div class="row my-5 mr-5">
    <div class="col-1">
    </div>
    <div class="col-1">
      <ul>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
      </ul>
    </div>
    <div class="col-1">
      <ul>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
      </ul>
    </div>
    <div class="col-1">
      <ul>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
      </ul>
    </div>
    <div class="col-1">
      <ul>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
      </ul>
    </div>
    <div class="col-1">
      <ul>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
      </ul>
    </div>
    <div class="col-1">
      <ul>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
      </ul>
    </div>
    <div class="col-1">
      <ul>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
      </ul>
    </div>
    <div class="col-1">
      <ul>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
      </ul>
    </div>
    <div class="col-1">
      <ul>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
      </ul>
    </div>
    <div class="col-1">
      <ul>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
        <li class="nav-link"><a href="#">Hasan</a></li>
      </ul>
    </div>
    <div class="col-1">
    </div>
  </div>
  <!-- /İSİM LİSTESİ -->

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>


<footer class="bg-dark p-3 text-white text-center">
  <p>Özgür Yazılım Yaz Kampı 2018 / Php ile Web Programlama</p>
</footer>


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
