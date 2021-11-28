<?php
session_start();

if (!$_SESSION['id']) {
    header("Location: profile.php");
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
            <title>Profile</title>

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                                <a href="#" class="btn btn-danger"><i class="fa-solid fa-cart-shopping"></i>user</a>
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
                    <form action="update.php" method="POST" enctype="multipart/form-data">
                        <h4 style="text-align: center; font-weight: bold;"> Profile </h4>
                        <hr>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email_register" name="email_register" placeholder="Masukkan Alamat E-Mail" dissable>
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama_register" name="nama_register" placeholder="Masukkan Nama Lengkap">
                        </div>
    
                        <div class="mb-3">
                            <label for="nohp" class="form-label">Nomor Handphone</label>
                            <input type="number" class="form-control" id="nohp_register" name="nohp_register" placeholder="Masukkan Nomor Handphone">
                        </div>

                        <hr>
                                
                        <div class="mb-3">
                            <label for="sandi" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="sandi_register" name="sandi_register" placeholder="Masukkan Kata Sandi">
                        </div>

                        <div class="mb-3">
                            <label for="konfirmasisandi" class="form-label">Konfirmasi Kata Sandi</label>
                            <input type="password" class="form-control" id="konfirmasisandi_register" name="konfirmasisandi_register" placeholder="Konfirmasi Kata Sandi Anda">
                        </div>

                        <div class="mb-3">
                            <label for="warnanavbar" class="form-label">Warna Navbar</label>
                            <input type="text" class="form-control" id="konfirmasisandi_register" name="konfirmasisandi_register" value="Blue Ocean">
                        </div>
                                
                        <button type="button" name="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-databuku-modal">
                        Simpan
                        </button>

                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#deletemodal">
                        Cancel
                        </button>
                    </form>
                </div>
            </div>
        </div>

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