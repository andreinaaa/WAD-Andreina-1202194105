    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> My Booking</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <?php
        $name = isset($_GET['nama']) ? $_GET["nama"] : '';
        $date = isset($_GET['date']) ? $_GET["date"] : '';
        $time = isset($_GET['time']) ? $_GET["time"] : '';
        $duration = isset($_GET['duration']) ? $_GET["duration"] : '';
        $building = isset($_GET['building']) ? $_GET["building"] : '';
        $phone = isset($_GET['phone']) ? $_GET["phone"] : '';
        $services1 = isset($_GET['services1']) ? $_GET["services1"] : '';
        $services2 = isset($_GET['services2']) ? $_GET["services2"] : '';
        $services3 = isset($_GET['services3']) ? $_GET["services3"] : '';
        ?>
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

        <div class="container">
            <div class="row text-center">
                <h3> Thank you Andreina_1202194105 for reserving </h3>
                <h5> Please double check your reservation details </h5>
            </div>
            <div class="col">
                <table class="table">
                    <tr>
                        <th scope="col">Booking Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Check In</th>
                        <th scope="col">Check Out</th>
                        <th scope="col">Building Type</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Services</th>
                        <th scope="col">Total Price</th>
                    </tr>
                    <tr>
                        <th scope="row"><?php (rand(10, 100)); ?></th>
                        <td><?php $name ?></td>
                        <td><?php $dt = strtotime($date . ' ' . $time);
                            date("d-m-Y H:i:s", $dt)  ?></td>
                        <td><?php ""; ?></td>
                        <td><?php $building; ?></td>
                        <td><?php $phone; ?></td>
                        <td><?php $services1;
                            " ";
                            $services2;
                            " ";
                            $services3 ?></td>
                    </tr>
                </table>
            </div>
        </div>
        </div>
        </div>

        <footer>
            <div class="container-fluid fixed-bottom" style="background-color: gray;">
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