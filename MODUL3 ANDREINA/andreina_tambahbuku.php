<?php
include('config.php');
//$query = "SELECT * FROM modul3";
//$select = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah Buku</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="margin: 0; padding: 0; box-sizing: border-box; padding-top: 5%; margin-bottom: 100px;">
        <section>
            <header>
                <nav class="navbar fixed-top navbar-light" style="background-color:#000">
                    <div class="container">
                        <ul class="nav">
                            <li class="nav-item">
                                <img class="logo" style="width: 150px ; float: left ; margin-left: 15%;" src="logopng.png" alt="logoEAD">
                            </li>
                            <li class="nav-item m-auto">
                                <a class="btn btn-primary" href="andreina_tambahbuku.php" style="margin-right: 8px; margin-left: 820px;">Tambah Buku</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
        </section>

    <div class="card p-5 m-auto mt-3 mb-3" style="max-width: 700px;">
        <div class="col-md-12" style="max-width: 700px;">
        <div class="card-body">
            <div class="container" style="margin-left: auto; padding: 5px; justify-content: center;">                     
                <form action="create.php" method="POST" enctype="multipart/form-data">
                    <h4 style="text-align: center; font-weight: bold;"> Tambah Data Buku </h4>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Buku</label>
                        <input type="text" class="form-control" id="judul_buku" name="judul_buku" placeholder="Contoh: Pemrograman Web Bersama EAD">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Penulis</label>
                        <input type="text" class="form-control" id="penulis_buku" name="penulis_buku" value="Andreina_1202194105" readonly>
                    </div>
                            
                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun Terbit</label>
                        <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="Contoh: 1990">
                    </div>
                            
                    <div class="mb-3">
                        <label for="desc" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Contoh: Buku ini menjelaskan tentang..."></textarea>
                    </div>
                            
                    <div class="mb-3">
                        <label for="bahasa" class="form-label">Bahasa</label>
                        <input type="radio" name="bahasa" value="Indonesia" id="bhsindo"><label for="bhsindo"> Indonesia </label>
                        <input type="radio" name="bahasa" value="Lainnya" id="bhslain"><label for="bhslain"> Lainnya </label>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Tag</label>
                            <div class="form-check" id="check" name="check">
                                <input type="checkbox" name="tag[]" value="Pemrograman" id="pemrograman"><label for="pemrograman"> Pemrograman </label>
                                <input type="checkbox" name="tag[]" value="Website" id="website"><label for="website"> Website </label>
                                <input type="checkbox" name="tag[]" value="Java" id="java"><label for="java"> Java </label>
                                <input type="checkbox" name="tag[]" value="OOP" id="oop"><label for="oop"> OOP </label>
                                <input type="checkbox" name="tag[]" value="MVC" id="mvc"><label for="mvc"> MVC </label>
                                <input type="checkbox" name="tag[]" value="Kalkulus" id="kalkulus"><label for="kalkulus"> Kalkulus </label>
                                <input type="checkbox" name="tag[]" value="lain" id="lain"><label for="lain"> Lainnya </label>
                            </div>
                    </div>
                            
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" name="file" id="file">
                    </div>
                            
                    <input type="submit" name="submit" value = "+ Tambah" style="width:560px; background-color:#306EFF; height:40px; color: white;">
                </form>
            </div>
        </div>
    </div>

    <footer>
            <div class="fixed-bottom" style="background-color: lightgray; text-align: center; margin-top: auto;">
                <div class="row">
                    <div class=" text-center m-auto">
                        <p> Dibuat oleh Andreina_1202194105 </p>
                    </div>
                </div>
            </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>