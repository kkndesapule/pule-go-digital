<?php
    include('koneksi.php');

    $query= "SELECT id FROM berita";
    $result= mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);

    $delete = mysqli_query($conn, "DELETE FROM berita WHERE id={$data['id']}");

    if($delete){
        header('Location: dashboard.php');
    }else{
        echo "Berita gagal dihapus.";
    }
?>