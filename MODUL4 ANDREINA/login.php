<?php
session_start();

function masuk($request)
{
    global $conn;

    $email = $request['email'];
    $password = $request['password'];

    // echo $email;

    $emailCek = "SELECT * FROM users WHERE email='$email'";
    $select = mysqli_query($conn, $emailCek);

        if (mysqli_num_rows($select) == 1) {
            $result = mysqli_fetch_assoc($select);

        if (password_verify($password, $result['password'])) {
            $_SESSION['id'] = $result['id'];
            $_SESSION['nama'] = $result['nama'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['no_hp'] = $result['no_hp'];            

            $_SESSION['message'] = 'Berhasil login.';

            header("Location: index_v2.php");
            exit();
        } else {
            $_SESSION['message'] = 'Gagal login.';
            
            header("Location: login.php");
            exit();
        }

        //jika rememberme di klik
		if(!empty($_POST["rememberme"])) {
			//buat cookie
			setcookie ("email",$_POST["email"],time()+ (3600 * 365 * 24 * 60 * 60));
			setcookie ("password",$_POST["password"],time()+ (3600 * 365 * 24 * 60 * 60));
		} else {
			if(isset($_COOKIE["email"])) {
			 setcookie ("email","");
		   }
		   if(isset($_COOKIE["password"])) {
			 setcookie ("password","");
		   }
		 }
    }

    // $_SESSION['message'] = 'Gagal login!';
    $_SESSION['message'] = $emailCek;

    header("Location: login.php");
    exit();
}

include_once("config.php");

if (isset($_POST['submit'])) {
    masuk($_POST);
}

?>

<!DOCTYPE html>

<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Login</title>

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
                            <li class="nav-item" style="margin-left: 800px;">
                                <a class="nav-link" href="register.php" style="color: black; ">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php" style="color: black; ">Login</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
        </section>

        <?php if (isset($_SESSION['message'])) : ?>
            <div class ='alert alert-danger alert-dismissible fade show fade in' role='alert'>
                <?php echo $_SESSION['message'] ; ?>
                <button type="button" class='close' data-dismiss='alert' aria-label="Close">
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
        <?php
            unset($_SESSION['message']);
        endif;
        ?>

<?php if (isset($_SESSION['registered'])) : ?>
            <div class ='alert alert-success alert-dismissible fade show fade in' role='alert'>
                <?php echo $_SESSION['registered'] ; ?>
                <button type="button" class='close' data-dismiss='alert' aria-label="Close">
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
        <?php
            unset($_SESSION['registered']);
        endif;
        ?>

        <div class="card p-5 m-auto mt-3 mb-3" style="max-width: 700px;">
            <div class="col-md-12" style="max-width: 700px;">
            <div class="card-body">
                <div class="container" style="margin-left: auto; padding: 5px; justify-content: center; padding-bottom:50px;">                     
                    <form action="" method="POST" enctype="multipart/form-data">
                        <h4 style="text-align: center; font-weight: bold;"> Login </h4>
                        <hr>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Alamat E-Mail">
                        </div>
                                
                        <div class="mb-3">
                            <label for="sandi" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Kata Sandi">
                        </div>

                        <div class="mb-3">
                            <div class="form-check" id="check" name="check">
                                <input type="checkbox" name="rememberme" <?php if(isset($_COOKIE["email"])) { ?> checked <?php } ?> value="rememberme" id="rememberme"><label for="rememberme"> Remember Me </label>
                            </div>
                        </div>
                                
                        <input type="submit" name="submit" value = "Login" style="width: 560px; background-color:#306EFF; height:40px; color: white;">

                        <p style="text-align: center; margin-top: 20px;">Belum Punya Akun? <a href="register.php">Register</a></p>
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