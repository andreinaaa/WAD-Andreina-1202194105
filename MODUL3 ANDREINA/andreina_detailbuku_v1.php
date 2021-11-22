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

    <body style="margin: 0; padding: 0; box-sizing: border-box; padding-top: 5%;">
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
                        echo "<tr><td> <img src=file/" . $row["gambar"]. "></td></tr>";
                        echo "<hr>";
                        echo "<tr><td><b> Judul: </b></td></tr>";
                        echo "<tr><td>" . $row["judul_buku"]. "</td></tr>";
                        echo "<tr><td><b> Penulis: </b></td></tr>";
                        echo "<tr><td>" . $row["penulis_buku"]. "</td></tr>";
                        echo "<tr><td><b> Tahun Terbit: </b></td></tr>";
                        echo "<tr><td>" . $row["tahun_terbit"]. "</td></tr>";
                        echo "<tr><td><b> Deskripsi Buku: </b></td></tr>";
                        echo "<tr><td>" . $row["deskripsi"]. "</td></tr>";
                        echo "<tr><td><b> Bahasa: </b></td></tr>";
                        echo "<tr><td>" . $row["bahasa"]. "</td></tr>";
                        echo "<tr><td><b> Tag: </b></td></tr>";
                        echo "<tr><td>" . $row["tag"]. "</td></tr>";}
                    echo "</table>";?>
                    <br>
                    <!-- <a href="#edit-databuku-modal++++
                    " class="btn btn-primary" style="width: 275px;">Sunting</a> -->
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Sunting</button>
                    <a href="#" class="btn btn-danger" style="width: 275px;">Hapus</a>
            
            <!-- The Modal -->
        <div class="modal" id="edit-databuku-modal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Sunting</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="update.php" id="edit-form">
                            <input class="form-control" type="hidden" name="id">
                            <div class="form-group">
                                <label for="judul_buku">Judul Buku</label>
                                <input class="form-control" type="text" name="judul_buku" placeholder="Pemrograman Web Bersama EAD">
                            </div>
                            <div class="form-group">
                                <label for="penulis_buku">Penulis</label>
                                <input type="text" class="form-control" id="penulis_buku" name="penulis_buku" value="Andreina_1202194105" readonly>
                            </div>
                            <div class="form-group">
                                <label for="tahun_terbit">Tahun Terbit</label>
                                <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="1990">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Buku ini menjelaskan tentang..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="bahasa">Bahasa</label>
                                <input type="radio" name="bahasa" value="Indonesia" id="bhsindo"><label for="bhsindo"> Indonesia </label>
                            <input type="radio" name="bahasa" value="Lainnya" id="bhslain"><label for="bhslain"> Lainnya </label>
                            </div>
                            <button type="button" class="btn btn-secondary float-right" data-dismiss="modal"> Tutup </button>
                            <button type="button" class="btn btn-primary float-right" id="btnUpdateSubmit"> Simpan Perubahan </button>
                        </form>
        
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