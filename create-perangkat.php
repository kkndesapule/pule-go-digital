<?php
  include('koneksi.php');

  if(isset($_POST['savedBtn']))
    {
        $nama = mysqli_real_escape_string($conn, $_POST['nama']);
        $filename= $_FILES["img"]["name"];
        $tempname= $_FILES["img"]["tmp_name"];
        $folder= "img/foto_perangkat_desa/". $filename;
        $jabatan = mysqli_real_escape_string($conn, $_POST['jabatan']);

        $saved = mysqli_query($conn, "INSERT INTO perangkatdesa VALUES ('', '$nama', '$filename', '$jabatan')");
        $check = mysqli_query($conn, "SELECT * FROM perangkatdesa");

        if($saved){
            move_uploaded_file($tempname, $folder);
            if(mysqli_num_rows($check) > 0)
                {
                    header('Location: dashboard.php');
                }
                else
                {
                    $_SESSION['show_message'] = 'Perangkat Desa Gagal Ditambahkan';
                }
        }
    }
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
              <a class="nav-link text-white brt" href="dashboard.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white brt" href="create-news.php">Tambah Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create-perangkat.php">Tambah Perangkat Desa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container-fluid mt-5">
        <div class="container">
            <div class="section-title my-4">
                <h1>Tambah Perangkat Desa</h1>
            </div>
            <form class="form" method="POST" enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="nama" placeholder="Nama Perangkat Desa" aria-label="nama" aria-describedby="basic-addon1">
                </div>    
                <img class="img-preview img-fluid mb-3 col-sm-5" width="200px" height="200px">
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="image" name="img" onchange="previewImage()">
                    <label class="input-group-text">Tambah Foto</label>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="jabatan" placeholder="Jabatan Perangkat Desa" aria-label="jabatan" aria-describedby="basic-addon1">
                </div>
                <div class="input-group">
                    <input type="submit" value="Submit" name="savedBtn">
                </div>
            </form>
        </div>

        <script>
          function previewImage(){
            const image= document.querySelector('#image');
            const imgPreview= document.querySelector('.img-preview');

            imgPreview.style.display= 'block';

            const oFReader= new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload= function(oFREvent){
              imgPreview.src= oFREvent.target.result;
            }
          }
        </script>
        <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>
  </body>
</html>