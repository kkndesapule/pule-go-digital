
<?php
  include('koneksi.php');

  $query = "SELECT id, title, img, body FROM berita WHERE id = ".$_GET["id"];
  $result= mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Web Profil Desa Pule, Kec. Selogiri, Kab. Wonogiri, Indonesia">
    <meta name="author" content="KKN TIM II UNDIP 2024 Desa Pule">

    <title>Pule Go Digital | Web Profil Desa Pule</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/logo-wonogiri.png"/>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
  </head>
  <body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #212529;" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.php">Desa Pule</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#about">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Profil</a>
            </li>            
            <li class="nav-item">
              <a class="nav-link" href="#services">Lembaga Desa</a>
            </li>                                    
            <li class="nav-item">
              <a class="nav-link" href="#contact">Kontak Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://rulidh.github.io/web-pengaduan-desa-pule/" target="_blank">Web Pengaduan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="login.php">Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php

    while($data = mysqli_fetch_assoc($result)) {
    ?>
    <div class="container-fluid">
        <div class="container">
            <div class="card m-lg-5">
                <img src="img/stored_img/<?php echo $data['img']?>" alt="<?php echo $data['img']?>" style="height: 30rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $data['title']?></h5>
                    <p class="card-text"><?php echo $data['body']?></p>
                </div>
            </div>
        </div>
    </div>
    <?php }?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
  </body>
</html>
