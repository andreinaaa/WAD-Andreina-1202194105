<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Patients</title>
        
          <link rel="stylesheet" type="text/css" href="home.css">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"></link>
    </head>

    <body>
        <section>
            <header>
                <nav class="navbar fixed-top navbar-light" style="background-color:#fff">
                    <div class="container">
                        <ul class="nav m-auto" style="color: black;">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="vaccines">Vaccines</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="patients">Patient</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
        </section>

        <div class="card p-5 m-auto mt-3 mb-3" style="max-width: 700px; margin-top: 100px; margin-bottom: 50px;">
            <div class="col-md-12" style="max-width: 700px;">
            <div class="card-body">
                <div class="container" style="margin-left: auto; padding: 5px; justify-content: center;">
                @foreach($jenisVaksin as $a)
                    <form action="/regisPasien" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <h4 style="text-align: center; font-weight: bold;"> Register {{ $a->name }} Vaccine </h4>
                        <div class="mb-3">
                            <label for="vaccine_id" class="form-label">Vaccine ID</label>
                            <input type="text" class="form-control" id="vaccine_id" name="vaccine_id" value="{{ $a->id }}" readonly>
                        </div>
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Patient Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>

                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="number" class="form-control" id="nik" name="nik">
                        </div>
                                
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat"></textarea>
                        </div>
                                
                        <div class="mb-3">
                            <label for="gambar" class="form-label">KTP</label>
                            <input type="file" name="image_ktp" id="image_ktp">
                        </div>

                        <div class="mb-3">
                            <label for="no_hp" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" id="no_hp" name="no_hp">
                        </div>
                                
                        <input type="submit" name="submit" value = "Submit" style="width:560px; background-color:#306EFF; height:40px; color: white;">
                    </form>
                    @endforeach
                </div>
            </div>
        </div>

        
        <footer data-bs-toggle="modal" data-bs-target="#namamodal">
            <div class="fixed-bottom" style="background-color:#fff; text-align: center;">
                <div class="row">
                    <div class=" text-center m-auto">
                        <br>
                        <p> Dibuat oleh <a href="#"> Andreina_1202194105 </a> </p>
                    </div>
                </div>
            </div>
        </footer>
    
        <div class="modal fade" id="namamodal" tabindex="-1" aria-labelledby="edit-databuku-modal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Kesan Pesan Praktikum</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <p><b>Kesan: </b> SUSAHHHH trs agak capek ya bund tapi menyenangkan hehehe <br> <b>Pesan: </b> Semangatt teruss bang akbarrr makasih udah ngebimbing aku sama temen-temen 06:) </p>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>