<?php
  include("koneksi.php");

  $query= "SELECT id, title, head, date FROM berita";
  $result= mysqli_query($conn, $query);

  if(isset($_POST['deleteBtn']))
    {
        $delete = mysqli_query($conn, "DELETE FROM berita WHERE id=". $data['id']);

        if($delete){
          header('Location: dashboard.php');
        } else {
          echo "Berita gagal dihapus.";
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
              <a class="nav-link" href="dashboard.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create-news.php">Tambah Berita</a>
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
        <div class="row">
          <?php echo $deleteMsg??''; ?>
          <div class="table-responsive">
            <table class="table table-bordered">
            <thead><tr><th>No</th>
              <th>Judul</th>
              <th style="width: 50%;">Isi</th>
              <th>Tanggal</th>
              <th>Keterangan</th>
            </thead>
            <tbody>
            <?php
              if (mysqli_num_rows($result) > 0) {
                $sn=1;
                while($data = mysqli_fetch_assoc($result)) {
              ?>
              <tr>
                <td><?php echo $sn; ?> </td>
                <td><?php echo $data['title']; ?> </td>
                <td><?php echo $data['head']; ?>...</td>
                <td><?php echo $data['date']; ?> </td>
                <td>
                  <div class="row">
                    <div class="col-3">
                      <a href="edit-news.php?id=<?php echo $data['id']?>" class="btn btn-primary"><i class="fa fa-pencil-square"></i></a>
                    </div>
                    <div class="col-3">
                      <a href="delete-news.php?id=<?php echo $data['id']?>" class="btn btn-danger"><i class="fa fa-remove"></i></a>
                    </div>
                  </div>
                </td>
              <tr>
              <?php
                $sn++;}} else { ?>
                  <tr>
                  <td colspan="8">No data found</td>
                  </tr>
              <?php } ?>
            </tbody>
          </table>
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
  </body>
</html>