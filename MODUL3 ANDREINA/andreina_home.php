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
        <title>Home</title>

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

    <section>
        <div class="container" style="margin-left: auto; margin-top: 100px; padding: 5px; text-align: center;">
            <?php 
            $sql = "SELECT * FROM buku_table";
            $result = mysqli_query($conn,$sql);

            if (mysqli_num_rows($result) > 0) {
                echo "<table>";
                    while($row = mysqli_fetch_assoc($result)){?>
                        <? foreach( $sql as $row ) : ?>
                            <div class="card col-12" style="width: 18rem;">
                              <img src= file/<?= $row['gambar']?> class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-text"> <?= $row['judul_buku'] ?></h5>
                                <p class="card-text"> <?= $row['deskripsi'] ?></p>
                                <a href="andreina_detailbuku.php?id=<?= $row['id_buku'] ?>" class="btn btn-primary">Tampilkan Lebih Lanjut</a>
                              </div>
                            </div>
                            <div class="col-1"></div>
                        <?endforeach;?>
                        <?php }
                echo "</table>";
            } else {
                echo "<h1> Belum Ada Buku </h1>";
                echo "<hr>";
                echo "<h6> Silahkan Menambahkan Buku </h6>";
            }
            ?>
        </div>
    </section>

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