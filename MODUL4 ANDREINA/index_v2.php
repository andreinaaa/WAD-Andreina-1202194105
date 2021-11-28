<?php
session_start();

if (!$_SESSION['id']) {
    header("Location: login.php");
    exit();
}

include_once("config.php");
?>

<!DOCTYPE html>

<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Home</title>

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
            </script>
    </head>

    <body style="margin: 0; padding: 0; box-sizing: border-box; padding-top: 5%;">
        <section>
            <header>
                <nav class="navbar fixed-top navbar-light" style="background-color:#77BFC7">
                    <div class="container">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index_v2.php" style="color: black; ">EAD Travel</a>
                            </li>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                            <li class="nav" style="float: right; margin-left:870px;">
                                <a href="booking.php" class="btn btn-danger"><i class="fa-solid fa-cart-shopping"></i>Cart</a>
                            </li>
                            <li class="nav" style="float: right; margin-left: 10px;">
                                <a href="profile.php" class="btn btn-danger"><i class="fa-solid fa-cart-shopping"></i>user</a>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </header>
        </section>

        <?php if (isset($_SESSION['message'])) : ?>
            <div class ='alert alert-success alert-dismissible fade show fade in' role='alert'>
                <?php echo $_SESSION['message'] ; ?>
                <button type="button" class='close' data-dismiss='alert' aria-label="Close">
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
        <?php
            unset($_SESSION['message']);
        endif;
        ?>

        <section>
            <div id="Section1">
                <div class="jumbotron jumbotron-fluid" style="background-color: #AAF0D1; width: 1180px; margin-left: 50px; text-align:center; height: 100px;">
                    <div class="container" style="justify-content:space-around;">
                        <br>
                        <h1>EAD Travel</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
        <div class="card-group" style="margin-top: 20px; padding-bottom:100px;">
            <div class="card">
                <img src="rajaampatt.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Raja Ampat, Papua</h5>
                <p class="card-text">Raja Ampat terkenal dengan pantai dan terumbu karangnya yang kaya dengan biota laut. Lukisan batu dan gua kuno berada di Pulau Misool, sedangkan cendrawasih merah hidup di Pulau Waigeo. Batanta dan Salawati adalah pulau utama kepulauan lainnya.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Rp 7.000.000,-</b></li>
                </ul>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pesan-modal-papua">
          Pesan
                </button>            
            </div>

            <div class="card">
                <img src="bromo.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Gunung Bromo, Malang</h5>
                <p class="card-text">Gunung Bromo adalah gunung berapi somma aktif dan bagian dari pegunungan Tengger, di Jawa Timur, Indonesia. Kawasan ini merupakan salah satu destinasi wisata yang paling banyak dikunjungi di Jawa Timur, dan gunung berapi ini termasuk dalam Taman Nasional Bromo Tengger Semeru.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Rp 2.000.000,-</b></li>
                </ul>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pesan-modal-bromo">
          Pesan
                </button>  
                        </div>

            <div class="card">
                <img src="tanah-lot-2.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Tanah Lot, Bali</h5>
                <p class="card-text">Tanah Lot adalah salah satu pura penting bagi umat Hindu Bali dan lokasi pura terletak di atas batu besar yang berada di lepas pantai. Pura Tanah Lot merupakan ikon pariwisata pulau Bali.</p>
                
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Rp 5.000.000,-</b></li>
                </ul>
                <button type="button" class="btn btn-primary" name="tanahlot" data-bs-toggle="modal" data-bs-target="#pesan-modal-bali">
          Pesan
                </button>  
            </div>

            </div>
        </div>

        <div class="modal fade" id="pesan-modal-papua" tabindex="-1" aria-labelledby="edit-databuku-modal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Perjalanan Ke Raja Ampat</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
              <form action = "create.php" method="POST">
              <label for="tanggal_perjalanan" class="form-label">Tanggal Perjalanan</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal">
                <input type="hidden" name="nama_tempat" value="Raja Ampat">
                <input type="hidden" name="lokasi" value="Papua">
                <input type="hidden" name="harga" value="7000000">
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  <button type="submit" name = "submit" class="btn btn-primary" data-bs-dismiss="modal">Tambahkan</button>
                </div>  
            </form>
                </div>
              </div>
            </div></div>

            <div class="modal fade" id="pesan-modal-bromo" tabindex="-1" aria-labelledby="edit-databuku-modal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Perjalanan Ke Gunung Bromo</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
              <form action = "create.php" method="POST">
              <label for="tanggal_perjalanan" class="form-label">Tanggal Perjalanan</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal">
                <input type="hidden" name="nama_tempat" value="Gunung Bromo">
                <input type="hidden" name="lokasi" value="Malang">
                <input type="hidden" name="harga" value="2000000">
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  <button type="submit" name = "submit" class="btn btn-primary" data-bs-dismiss="modal">Tambahkan</button>
                </div>  
            </form>
                </div>
              </div>
            </div></div>

            <div class="modal fade" id="pesan-modal-bali" tabindex="-1" aria-labelledby="edit-databuku-modal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Perjalanan Ke Tanah Lot</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
              <form action = "create.php" method="POST">
              <label for="tanggal_perjalanan" class="form-label">Tanggal Perjalanan</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal">
                <input type="hidden" name="nama_tempat" value="Tanah Lot">
                <input type="hidden" name="lokasi" value="Bali">
                <input type="hidden" name="harga" value="5000000">
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  <button type="submit" name = "submit" class="btn btn-primary" data-bs-dismiss="modal">Tambahkan</button>
                </div>  
            </form>
                </div>
              </div>
            </div></div>
    
        <footer data-bs-toggle="modal" data-bs-target="#namamodal">
                <div class="fixed-bottom" style="background-color:#77BFC7; text-align: center;">
                    <div class="row">
                        <div class=" text-center m-auto">
                            <br>
                            <p> © 2021 Copyright: <a href="#"> Andreina_1202194105 </a> </p>
                        </div>
                    </div>
                </div>
        </footer>

        <div class="modal fade" id="namamodal" tabindex="-1" aria-labelledby="edit-databuku-modal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Created By:</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>NAMA: ANDREINA ALIRAIHAN SUDRA <br> NIM: 1202194105</p>
                </div>
              </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
  </html>

        
