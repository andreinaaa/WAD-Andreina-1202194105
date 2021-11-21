<?php
include('config.php');

if(isset($_POST['submit'])){
    $judul_buku = $_POST['judul_buku'];
    $penulis_buku = $_POST['penulis_buku'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $deskripsi = $_POST['deskripsi'];
    $bahasa = $_POST['bahasa'];
    $tag = implode(",",$_POST[tag]);

    $validextension = array('png','jpg','jpeg');
    $filename = $_FILES['file']['name'];
    $x = explode('.',$filename);
    $extension = strtolower(end($x));
    $filesize = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];

    if (in_array($extension,$validextension)=== true) {
        if ($filesize < 5044070) {
            move_uploaded_file($file_tmp,'file/'.$filename);
        }
    }
    
    $query = "INSERT INTO buku_table (judul_buku, penulis_buku, tahun_terbit, deskripsi,tag,bahasa,gambar) VALUES ('$judul_buku','$penulis_buku', '$tahun_terbit', '$deskripsi','$tag','$bahasa','$filename')";
    $insert = mysqli_query($conn, $query);

    if ($insert){
        header('Location: andreina_home.php');
    }
}