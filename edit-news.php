<?php
  include('koneksi.php');

  if(isset($_POST['editBtn']))
    {
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $filename= $_FILES["img"]["name"];
        $tempname= $_FILES["img"]["tmp_name"];
        $folder= "img/stored_img/". $filename;
        $body = mysqli_real_escape_string($conn, $_POST['body']);
        $t = time();
        $date= date("Y-m-d", $t);
        $head= substr($body, 0, 50);

        $saved = mysqli_query($conn, "UPDATE berita SET `title` = '$title', `img` = '$filename', `head`= '$head', `body`= '$body', `date` = '$date' WHERE id =". $_GET["id"]);
        $check = mysqli_query($conn, "SELECT * FROM berita");

        if($saved){
          move_uploaded_file($tempname, $folder);
            if(mysqli_num_rows($check) > 0)
                {
                    header('Location: dashboard.php');
                }
                else
                {
                    $_SESSION['show_message'] = 'Berita Gagal Diupdate';
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
    <?php 
        $sql_query = "SELECT id, title, body FROM berita WHERE id = ".$_GET["id"];
        if ($result = mysqli_query($conn, $sql_query)) {
            while ($data = mysqli_fetch_assoc($result)) { 
                $id = $data['id'];
                $title = $data['title'];
                $body = $data['body'];
    ?>
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
              <a class="nav-link text-primary" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container-fluid mt-5">
        <div class="container">
            <div class="section-title my-4">
                <h1>Edit Berita</h1>
            </div>
            <form class="form" action="edit-news.php?id=<?php echo $id?>" method="POST" enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="title" value="<?php echo $title?>" aria-label="judul" aria-describedby="basic-addon1">
                </div>    
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="img" name="img">
                    <label class="input-group-text">Tambah Foto</label>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Isi Berita</span>
                    <textarea class="form-control" rows="6" name="body" aria-label="With textarea"><?php echo $body?></textarea>
                </div>
                <div class="input-group">
                    <input type="submit" value="Update" name="editBtn">
                </div>
            </form>
            <?php 
                    }
                }
            ?>
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