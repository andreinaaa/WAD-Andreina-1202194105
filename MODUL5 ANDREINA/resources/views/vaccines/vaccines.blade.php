<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Vaccines</title>
        
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

        <section>
            <div class="container" style="margin-left: auto; margin-top: 100px; padding: 5px; text-align: center;">
                <table class="table">
                    
                    @if (count($daftar_vaccines) > 0)
                        <h1>List Vaccines</h1>
                        <br>
                        <a href="daftar" class="btn btn-primary" style="float: left;">Add Vaccine</a>
                        <br>
                        <br>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                        </tr>
                        @foreach( $daftar_vaccines as $x )
                            <tr>
                                <th scope="col">{{$x->id}}</th>
                                <th scope="col">{{$x->name}}</th>
                                <th scope="col">{{$x->price}}</th>
                                <th scope="col">
                                    <a href="/vaccines/edit/{{ $x->id }}" class="btn btn-success"> Edit </a>
                                    <a href="/vaccines/delete/{{ $x->id }}" class="btn btn-danger"> Delete </a>
                                </th>
                                <!-- <th>{{count($daftar_vaccines)}}</th> -->
                            </tr>
                        @endforeach

                    @else
                        <h3> There is no data. </h3>
                        <br>
                        <a href="daftar" class="btn btn-primary">Add Vaccine</a>
                    @endif
                </table>

            </div>
        </section>

        
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