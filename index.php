
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
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Desa Pule</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="perangkat-desa.php">Perangkat Desa</a>
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

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Selamat Datang di Web Profil</div>
          <div class="intro-heading text-uppercase">Desa Pule</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#portfolio">Selengkapnya</a>
        </div>
      </div>
    </header>

    <!-- Berita Desa Pule -->
    <section id="about">
      <div class="container-fluid">
        <div class="container">
          <div class="section-title">
            <h4 class="m-0 mb-3 text-uppercase font-weight-bold">Featured News</h4>
          </div>
          <div class="row">
            <?php
              if (mysqli_num_rows($result) > 0) {
                $sn=1;
                while($data = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-lg-4 mb-4">
              <div class="card">
                <img src="img/stored_img/<?php echo $data['img']?>" class="card-img-top" alt="<?php echo $data['title']?>" style="height: 15rem;">
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

    <!-- Profil Desa Pule -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Profil</h2>
            <h3 class="section-subheading text-muted">Desa Pule, Kec. Selogiri, Kab. Wonogiri</h3>
          </div>
        </div>
        <div class="container text-center">
          <div class="row row-cols-lg-2 row-cols-2 g-2 g-lg-3">
            <div class="col portfolio-item">
              <img class="img-fluid" src="img/profil/jumlah-penduduk.jpg" alt="">
            </div>
            <div class="col portfolio-item">
              <img class="img-fluid" src="img/profil/jumlah-kk.jpg" alt="">
            </div>
            <div class="col portfolio-item">
              <img class="img-fluid" src="img/profil/laki-laki.jpg" alt="">
            </div>
            <div class="col portfolio-item">
              <img class="img-fluid" src="img/profil/perempuan.jpg" alt="">
            </div>
            <div class="col portfolio-item">
              <img class="img-fluid" src="img/profil/kepadatan-penduduk.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" style="height: 250px;" src="img/profil/pule-maps.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Wilayah</h4>
              <p class="text-muted">Desa Pule</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" style="height:250px;" src="img/profil/lapangan-pule.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Potensi</h4>
              <p class="text-muted">Desa Pule</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" style="height: 250px;" src="img/profil/balai-desa-pule.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Visi dan Misi</h4>
              <p class="text-muted">Desa Pule</p>
            </div>
          </div>          
        </div>
      </div>
    </section>

    <!-- Lembaga Desa -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Lembaga Desa</h2>            
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="img/lembaga-desa/tp-pkk.png" alt="">
            </div>
            <h4 class="service-heading">TP. PKK Desa</h4>
            <p class="text-muted">Lembaga kemasyarakatan sebagai mitra kerja pemerintah dan organisasi kemasyarakatan lainnya, yang berfungsi sebagai fasilitator, perencana, pelaksana, pengendali dan penggerak pada masing-masing jenjang pemerintahan untuk terlaksananya program PKK.</p>
          </div>
          <div class="col-md-4">
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="img/lembaga-desa/karang-taruna.png" alt="">
            </div>
            <h4 class="service-heading">Karang Taruna</h4>
            <p class="text-muted">Karang Taruna merupakan wadah pengembangan generasi muda nonpartisan, yang tumbuh atas dasar kesadaran dan rasa tanggung jawab sosial dari, oleh dan untuk masyarakat khususnya generasi muda di wilayah Desa yang bergerak dibidang kesejahteraan sosial.</p>
          </div>
          <div class="col-md-4">
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="img/lembaga-desa/kelompok-tani.jpg" alt="">
            </div>
            <h4 class="service-heading">Kelompok Tani</h4>
            <p class="text-muted">Kelompok tani adalah kumpulan petani/peternak/pekebun yang dibentuk atas dasar kesamaan kepentingan, kesamaan kondisi lingkungan (sosial, ekonomi, sumberdaya) dan keakraban untuk meningkatkan dan mengembangkan usaha anggota.</p>
          </div>
          <div class="col-md-4">
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="img/lembaga-desa/logo.jpg" alt="">
            </div>
            <h4 class="service-heading">Lembaga Adat</h4>
            <p class="text-muted">Lembaga adat merupakan lembaga yang menyelenggarakan fungsi adat istiadat dan menjadi bagian dari susunan asli Desa yang tumbuh dan berkembang atas prakarsa masyarakat Desa.</p>
          </div>
          <div class="col-md-4">
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="img/lembaga-desa/LPMD.png" alt="">
            </div>
            <h4 class="service-heading">Lembaga Pemberdayaan Masyarakat</h4>
            <p class="text-muted">Lembaga Pemberdayaan Masyarakat Desa adalah lembaga mitra strategis diluar pemerintahan desa yang membantu dalam meningkatkan partisipasi dan pelayanan penyelenggaraan masyarakat desa.</p>
          </div>
          <div class="col-md-4">
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="img/lembaga-desa/logo.jpg" alt="">
            </div>
            <h4 class="service-heading">Badan Usaha Milik Desa</h4>
            <p class="text-muted">Badan Usaha Milik Desa adalah badan usaha yang dibentuk oleh desa dengan sebagian besar atau seluruh modalnya dimiliki desa dan dikelola oleh desa yang kemudian hasil dari usaha ini untuk kesejahteraan desa.</p>
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

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2 class="text-uppercase">Wilayah</h2>
                  <p class="item-intro text-muted">Desa Pule</p>
                  <img class="img-fluid d-block mx-auto" src="img/profil/wilayah-full.png" alt="">
                  <p>Desa Pule merupakan salah satu desa yang ada di Kecamatan Selogiri Kabupaten Wonogiri dengan luas wilayah 336,90 ha. Desa Pule berbatasan dengan Desa Jaten di sebelah utara, sebelah selatan berbatasan dengan Desa Jendi dan Desa Kepatihan, sebelah barat berbatasan dengan Desa Tiyaran, sebelah timur berbatasan dengan Kelurahan Kaliancar.</p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Tutup</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Potensi</h2>
                  <p class="item-intro text-muted">Desa Pule</p>
                  <img class="img-fluid d-block mx-auto" src="img/profil/grafik-penduduk.jpg" alt="">
                  <p>Potensi yang dimiliki oleh Desa Pule adalah dalam bidang pertanian dan bidang peternakan. Pertanian dan perkebunan yang ada Desa Pule sesuai dengan lahan di sini yang terbilang cukup baik. Beberapa komoditas yang ditanam adalah padi, dan ayam petelur.</p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Tutup</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Visi dan Misi</h2>
                  <p class="item-intro text-muted">Kecamatan Selogiri</p>
                  <img class="img-fluid d-block mx-auto" src="img/profil/visi-misi-full.png" alt="">
                  <p class="text-left"><b>VISI :</b>
                    <br/>OPTIMAL DALAM PELAYANAN
                    <br/>TERDEPAN DALAM PEMERINTAHAN
                    <br/><br/><b>MISI :</b>
                    <br/>Untuk terwujudnya visi tersebut ditetapkan empat upaya/cara atau misi yang akan mendukung pencapaian visi yaitu:
                    <br/>&emsp;1.&ensp;Mewujudkan kapasitas kinerja aparatur yang profesional dengan mengedepankan pelayanan masyarakat.
                    <br/>&emsp;2.&ensp;Meningkatkan tanggungjawab, disiplin serta proaktif, produktif, akomodatif, responsif terhadap dinamika perubahan untuk kemajuan pelayanan.
                    <br/>&emsp;3.&ensp;Mewujudkan kondisi tertib, aman dan tenteram dalam kehidupan sosial masyarakat yang berkeadilan dan terjamin kepastian hukum.
                    <br/>&emsp;4.&ensp;Mewujudkan penyelenggaraan pemerintahan yang bersih, bebas dari korupsi, kolusi dan nepotisme (KKN) guna tercipta Good Governance.
                  </p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Tutup</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
