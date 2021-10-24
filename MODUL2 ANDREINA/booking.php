<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="margin: 0; padding: 0; box-sizing: border-box; padding-top: 5%;">
    <section>
        <header>
            <nav class="navbar fixed-top navbar-light" style="background-color:#000000">
                <div class="container">
                    <ul class="nav m-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="booking.php">Booking</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    </section>

    <div class="hello" style="border: 1px solid #000; color: #fff; background-color: #000; text-align: center; justify-content: center; margin-left: 50px; margin-right: 50px; vertical-align: middle;">
        <div class="container-fluid text-center m-auto">
            <p>Reserve your venue now!</p>
        </div>
    </div>

    <div class="card p-5 m-auto mt-3 mb-3" style="max-width: 1155px;">
        <div class="row g-2">
            <div class="col-md-4">
                
                <img src="nusantara.jpeg" class="img-fluid rounded-start" alt="..." style="justify-content:center;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <form action="mybooking.php" method="GET">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="nama" value="Andreina_1202194105" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="event" class="form-label">Event Date</label>
                        <input type="date" class="form-control" id="event" name="date">
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label">Start Time</label>
                        <input type="time" class="form-control" id="time" name="time">
                    </div>
                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration (Hrs)</label>
                        <input type="number" class="form-control" id="duration" name="duration">
                    </div>
                    <div class="mb-3">
                        <label for="building" class="form-label">Building Type</label><br>
                        <select name="building" class="form-control">
                            <option value="Nusantara Hall"> Nusantara Hall</option>
                            <option value="Garuda Hall">Garuda Hall</option>
                            <option value="Gedung Serba Guna">Gedung Serba Guna</Option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="number" class="form-control" id="phone" name="phone">
                    </div>
                    <label class="form-label">Add Service(s)</label>
                    <div class="form-check" id="check" name="check">
                        <input type="checkbox" name="services1" value="catering" id="catering" ><label for="catering"> Catering/$700 </label>
                        <input type="checkbox" name="services2" value="decor "id="decor" ><label for="decor"> Decoration/$450 </label>
                        <input type="checkbox" name="services3" value="soundsystem" id="soundsystem" ><label for="soundsystem"> Sound System/$250 </label>
                    </div>
                    <input type="submit" style="width:670px; background-color:#306EFF; height:40px; color: white;">
                </form>
                
            </div>
          </div>
        </div>
      </div>

    <footer>
        <div class="container-fluid" style="background-color: gray;">
            <div class="row">
                <div class="col-12 text-center">
                    <p> Dibuat oleh Andreina_1202194105 </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>