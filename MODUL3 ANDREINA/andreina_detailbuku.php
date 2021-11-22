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
          <title>Detail Buku</title>

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
              <h4 style="text-align: center; font-weight: bold;"> Detail Buku </h4>
                  <?php
                  $idbuku = $_GET['id'];
                  $sql = "SELECT * FROM buku_table WHERE id_buku = '$idbuku'";
                  $result = mysqli_query($conn,$sql);
                  echo "<table>";
                  while($row = mysqli_fetch_assoc($result)){
                      $JudulBuku = $row["judul_buku"];
                      $PenulisBuku = $row["penulis_buku"];
                      $TahunTerbit = $row["tahun_terbit"];
                      $Deskripsi  = $row["deskripsi"];
                      $Bahasa = $row["bahasa"];
                      $Tag = $row["tag"];
                      $idbuku = $row["id_buku"];

                      echo "<tr><td> <img src=file/" . $row["gambar"]. "></td></tr>";
                      echo "<hr>";
                      echo "<tr><td><b> Judul: </b></td></tr>";
                      echo "<tr><td>" . $JudulBuku. "</td></tr>";
                      echo "<tr><td><b> Penulis: </b></td></tr>";
                      echo "<tr><td>" . $PenulisBuku. "</td></tr>";
                      echo "<tr><td><b> Tahun Terbit: </b></td></tr>";
                      echo "<tr><td>" . $TahunTerbit. "</td></tr>";
                      echo "<tr><td><b> Deskripsi Buku: </b></td></tr>";
                      echo "<tr><td>" . $Deskripsi . "</td></tr>";
                      echo "<tr><td><b> Bahasa: </b></td></tr>";
                      echo "<tr><td>" . $Bahasa. "</td></tr>";
                      echo "<tr><td><b> Tag: </b></td></tr>";
                      echo "<tr><td>" . $Tag . "</td></tr>";}
                  echo "</table>";?>
                  <br>
                  <!-- <a href="#edit-databuku-modal++++
                  " class="btn btn-primary" style="width: 275px;">Sunting</a> -->
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-databuku-modal">
          Sunting
          </button>

          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletemodal">
          Hapus
          </button>

          <!-- Modal -->
          <div class="modal fade" id="edit-databuku-modal" tabindex="-1" aria-labelledby="edit-databuku-modal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Sunting</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
              <form action = "update.php" method="POST">
              <label for="judul" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" id="judul_buku" name="judul_buku" value = "<?php echo $JudulBuku?>"">
                <label for="penulis" class="form-label">Penulis Buku</label>
                <input type="text" class="form-control" id="penulis_buku" name="penulis_buku" 
                value = "<?php echo $PenulisBuku?>" readonly>
                <label for="tahun" class="form-label">tahun_terbit</label>
                <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" 
                value = "<?php echo $TahunTerbit?>"">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" value = "<?php echo $Deskripsi?>"></textarea>
                <label for="bahasa" class="form-label">Bahasa</label> <br>
                <?php $DataRadio = explode(',',$Bahasa) ?>
                <input type="radio" name="radio[]" value="Indonesia" <?php if (in_array("Indonesia", $DataRadio)) echo "checked";?> >Indonesia<br>
                <input type="radio" name="radio[]" value="Lainnya" <?php if (in_array("Lainnya", $DataRadio)) echo "checked";?> >Lainnya<br>
                <br>
              <label for="tag" class="form-label">Tag</label> <br>
                <?php $DataTag = explode(',',$Tag) ?>
                <input type="checkbox" name="tag[]" value="Pemrograman" <?php if (in_array("Pemrograman", $DataTag)) echo "checked";?> >Pemrograman<br>
                <input type="checkbox" name="tag[]" value="Website" <?php if (in_array("Website", $DataTag)) echo "checked";?> >Website<br>
                <input type="checkbox" name="tag[]" value="Java" <?php if (in_array("Java", $DataTag)) echo "checked";?> >Java<br>
                <input type="checkbox" name="tag[]" value="OOP" <?php if (in_array("OOP", $DataTag)) echo "checked";?> >OOP<br>
                <input type="checkbox" name="tag[]" value="MVC" <?php if (in_array("MVC", $DataTag)) echo "checked";?> >MVC<br>
                <input type="checkbox" name="tag[]" value="Kalkulus" <?php if (in_array("Kalkulus", $DataTag)) echo "checked";?> >Kalkulus<br>
                <input type="checkbox" name="tag[]" value="Lainnya" <?php if (in_array("Lainnya", $DataTag)) echo "checked";?> >Lainnya<br>
                <input type="hidden" id="id_buku" name="id_buku" value="<?php echo $idbuku ?>">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  <button type="submit" name = "submit" class="btn btn-success" data-bs-dismiss="modal">Sunting</button>
                </div>
              </form>
              </div>
            </div>
          </div>

          <div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Hapus Buku</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <form action = "delete.php" method="POST">
                    <p> Apakah Anda yakin ingin hapus data buku <?php echo $JudulBuku ?> ? </p>
                    
                  
                  </div>
                  <input type="hidden" id="id_buku" name="id_buku" value="<?php echo $idbuku ?>">

                  <div class="modal-footer">

                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Hapus</button>
                  </div>
                  </form>
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