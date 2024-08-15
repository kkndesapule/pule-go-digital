
<?php
  include('koneksi.php');

  $query= "SELECT * FROM berita";
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
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #212529;" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Desa Pule</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="berita-desa.php">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="perangkat-desa.php">Perangkat Desa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="https://rulidh.github.io/web-pengaduan-desa-pule/" target="_blank">Web Pengaduan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger text-primary" href="login.php">Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Berita Desa -->
    <section id="about">
      <div class="container-fluid">
        <div class="container">
          <div class="section-title">
            <h4 class="m-0 mb-3 text-uppercase font-weight-bold">Berita Pule</h4>
          </div>
          <div class="row">
            <?php
              if (mysqli_num_rows($result) > 0) {
                $sn=1;
                while($data = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-lg-4 mb-4">
              <div class="card">
                <img src="img/stored_img/<?php if($data['img']!= ''){ echo $data['img']; } else { echo 'no-image.jpg';}?>" class="card-img-top" alt="<?php echo $data['title']?>" style="height: 15rem;">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $data['title']?></h5>
                  <a href="detail-news.php?id=<?php echo $data['id']?>"><p class="card-text"><?php echo $data['head']?>...</p></a>
                  <p class="card-text"><small class="text-body-secondary"><?php echo $data['date']?></small></p>
                </div>
              </div>
            </div>
            <?php
                $sn++;}} else { ?>
                <div class="col mb-4">
                  <div class="card" style="width: 18rem;">
                    <img src="img/profil/wilayah.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">No Data Found</h5>
                      <a href=""><p class="card-text">No Paragraph</p></a>
                    </div>
                  </div>
                </div>
              <?php } ?>
          </div>
        </div>
      </div>
    </section>

    <!-- Kontak -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Kontak Kami</h2>
            <h3 class="section-subheading text-white">Silakan menghubungi kami melalui informasi di bawah ini:</h3>
          </div>
        </div>
        <div class="text-center">
          <iframe class="container" src="//www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.087615801361!2d110.86568127449894!3d-7.780534692239089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a3070195e9af7%3A0x3d139bdc70ed51df!2sBalai%20Desa%20Pule!5e0!3m2!1sid!2sid!4v1720278564470!5m2!1sid!2sid" width="" height="350px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright 2024 &copy;
          </div>          
          <div class="col-md-4">            
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="https://github.com/kkndesapule/pule-go-digital">KKN UNDIP TIM II Tahun 2024</a>
              </li>              
            </ul>
          </div>
        </div>
      </div>
    </footer>

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
