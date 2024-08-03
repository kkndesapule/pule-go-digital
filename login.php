<?php     
session_start();

if(isset($_SESSION["loggedInUser"])){  
    header("Location: dashboard.php");    
    exit();
} 
?>

<?php 
    if(isset($_POST['loginBtn']))
    {
        $conn = mysqli_connect('localhost','root','','db_desa_pule');

        if(!empty($_POST['user']) && !empty($_POST['password']))
        {
            $user = mysqli_real_escape_string($conn, $_POST['user']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);

            $userCheck = mysqli_query($conn, "SELECT * FROM user WHERE user='$user' AND password='$password'");
            if($userCheck)
            {
                if(mysqli_num_rows($userCheck) > 0)
                {
                    $_SESSION['loggedInUser'] = true;
                    $_SESSION['show_message'] = 'Logged In Succcessfully';
                    header('Location: dashboard.php');
                }
                else
                {
                    $_SESSION['show_message'] = 'Invalid Email and Password';
                }
            }
            else
            {
                $_SESSION['show_message'] = 'Something Went Wrong in Query';
            }
        }
        else
        {
            $_SESSION['show_message'] = 'All fields are required';
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
  <body id="page-top" style="background-color:#021526;">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Desa Pule</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger text-primary" href="login.php">Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins',sans-serif;
        }
        body{
        overflow: hidden;
        }
        ::selection{
        background: #fed136;
        }
        .login-container{
        max-width: 440px;
        padding: 0 20px;
        margin: 170px auto;
        }
        .login-div{
        width: 100%;
        background: #fff;
        border-radius: 5px;
        box-shadow: 0px 4px 10px 1px rgba(0,0,0,0.1);
        }
        .login-div .title{
        height: 90px;
        background: #fed136;
        border-radius: 5px 5px 0 0;
        color: #021526;
        font-size: 30px;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        }
        .login-div form{
        padding: 30px 25px 25px 25px;
        }
        .login-div form .row{
        height: 45px;
        margin-bottom: 15px;
        position: relative;
        }
        .login-div form .row input{
        height: 100%;
        width: 100%;
        outline: none;
        padding-left: 60px;
        border-radius: 5px;
        border: 1px solid lightgrey;
        font-size: 16px;
        transition: all 0.3s ease;
        }
        form .row input:focus{
        border-color: #fed136;
        box-shadow: inset 0px 0px 2px 2px rgba(26,188,156,0.25);
        }
        form .row input::placeholder{
        color: #999;
        }
        .login-div form .row i{
        position: absolute;
        width: 47px;
        height: 100%;
        color: #fff;
        font-size: 18px;
        background: #fed136;
        border: 1px solid #fed136;
        border-radius: 5px 0 0 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        }
        .login-div form .pass{
        margin: -8px 0 20px 0;
        }
        .login-div form .pass a{
        color: #16a085;
        font-size: 17px;
        text-decoration: none;
        }
        .login-div form .pass a:hover{
        text-decoration: underline;
        }
        .login-div form .button input{
        color: #fff;
        font-size: 20px;
        font-weight: 500;
        padding-left: 0px;
        background: #fed136;
        border: 1px solid #fed136;
        cursor: pointer;
        }
        form .button input:hover{
        background: #021526;
        border: 1px solid #021526;
        }
        .login-div form .signup-link{
        text-align: center;
        margin-top: 20px;
        font-size: 17px;
        }
        .login-div form .signup-link a{
        color: #fed136;
        text-decoration: none;
        }
        form .signup-link a:hover{
        text-decoration: underline;
        }
    </style>

    <div class="container-fluid">
        <div class="container login-container">
            <div class="login-div">
                <div class="title"><span>Login Form</span></div>
                <form method="POST">
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" name="user" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <div class="row button">
                    <input type="submit" value="Login" name="loginBtn">
                </div>
                </form>
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
