<?php
session_start();

if (!$_SESSION['id']) {
    header("Location: index_v2.php");
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
            <title>Bookings</title>

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body style="margin: 0; padding: 0; box-sizing: border-box; padding-top: 5%;">
        <section>
            <header>
                <nav class="navbar fixed-top navbar-light" style="background-color:#77BFC7">
                    <div class="container">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="color: black; ">EAD Travel</a>
                            </li>
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

        

        <div class="container">
            <div class="col">
                <table class="table">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Tempat</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Tanggal Perjalanan</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    <?php $sql = "SELECT * FROM bookings";
                  $result = mysqli_query($conn,$sql);
                  $totalharga = 0;
                  while($col = mysqli_fetch_assoc($result)){
                      $id = $col["id"];
                      $nama_tempat = $col["nama_tempat"];
                      $lokasi = $col["lokasi"];
                      $tanggal  = $col["tanggal"];
                      $harga  = $col["harga"];
                      echo "<tr>";
                        echo "<td>" . $id . "</td>";
                        echo "<td>" . $nama_tempat . "</td>";
                        echo "<td>" . $lokasi . "</td>";
                        echo "<td>" . $tanggal . "</td>";
                        echo "<td>" . $harga . "</td>";
                        echo "<td><a href=\"delete.php?id=$id\" class=\"btn btn-danger\">Hapus</a></td>";
                      echo "</tr>";
                      $totalharga = $totalharga + $harga;
                      }?>
                      <?php 
                      echo "<tr>";
                      echo "<td>"  . "</td>";
                        echo "<td><b> Total Harga </b></td>";
                        echo "<td>"  . "</td>";
                        echo "<td>" . "</td>";
                        echo "<td>" . $totalharga . "</td>";
                        echo "<td> </td>";
                      
                    echo "</tr>";?>
                      
                </table>
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