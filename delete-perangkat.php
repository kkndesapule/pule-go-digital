<?php
    include('koneksi.php');

    $id= $_GET['id'];

    $delete = mysqli_query($conn, "DELETE FROM perangkatdesa WHERE id= '$id'");

    if($delete){
        header('Location: dashboard.php');
    }else{
        echo "Perangkat desa gagal dihapus.";
    }
?>