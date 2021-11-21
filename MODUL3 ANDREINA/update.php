<?php

include('config.php');

if(isset($_POST['submit']));{
    $judul_buku = $_POST['judul_buku'];
    $penulis_buku = $_POST['penulis_buku'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $deskripsi = $_POST['deskripsi'];
    $bahasa = $_POST['bahasa'];
    $idbuku = $_POST['id_buku'];
    $tag = implode(",",$_POST[tag]);

    $query = "UPDATE buku_table SET judul_buku = '$judul_buku', penulis_buku = '$penulis_buku', tahun_terbit = '$tahun_terbit', deskripsi = '$deskripsi', bahasa = '$bahasa', tag = '$tag' WHERE id_buku = '$idbuku' ";
    // echo $query;
    $update = mysqli_query($conn, $query);

    if ($update){
        header('Location: andreina_home.php'); }
    
    }
?>