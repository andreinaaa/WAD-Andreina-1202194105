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

                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"></link>

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
                                <li class="nav" style="float: right; margin-left:800px;">
                                    <a href="booking.php" class="btn btn-danger"><i class="fa-solid fa-cart-shopping"></i>Cart</a>
                                </li>
                                <li class="dropdown">
                                  <a class="dropdown-toggle" style="float: right; margin-left: 20px; margin-top: 7px; color: black;" data-bs-toggle="dropdown" href="#"> user
                                  <span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                    <li><a href="profile.php" style="margin-left: 10px;" >Profile</a></li>
                                    <hr>
                                    <li><a href="#" style="margin-left: 10px;" >Logout</a></li>
                                  </ul>
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
                    <form action = "update.php" method="POST">
                        <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value = "<?php echo $email?>" readonly>
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" 
                            value = "<?php echo $nama?>">
                            <label for="no_hp" class="form-label">No. Handphone</label>
                            <input type="number" class="form-control" id="no_hp" name="no_hp" 
                            value = "<?php echo $no_hp?>"">
                            <hr>
                            <label for="sandi" class="form-label">Password</label>
                            <input type="password" class="form-control" id="no_hp" name="no_hp" 
                            value = "<?php echo $password?>"">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" 
                            value = "<?php echo $confirmPassword?>"">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" name = "submit" class="btn btn-success" data-bs-dismiss="modal">Sunting</button>
                            <input type="hidden" id="id_buku" name="id_buku" value="<?php echo $idbuku ?>">    
                        </div>
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