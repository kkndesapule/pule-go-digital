<?php
    include('koneksi.php');

    $id= $_GET['id'];

    $delete = mysqli_query($conn, "DELETE FROM berita WHERE id='$id'");

    if($delete){
        header('Location: dashboard.php');
    }else{
        echo "Berita gagal dihapus.";
    }
?>