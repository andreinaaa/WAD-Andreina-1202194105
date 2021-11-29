    <?php

    function daftar($request)
    {
        global $conn;

        $nama = $request["nama"];
        $email = $request["email"];
        $no_hp = $request["no_hp"];
        $password = mysqli_real_escape_string($conn, $request['password']);
        $confirmPassword = mysqli_real_escape_string($conn, $request['confirmPassword']);

        $emailCek = "SELECT email FROM user WHERE email='$email'";
        $select = mysqli_query($conn, $emailCek);

        if (!mysqli_fetch_assoc($select)) {
            if ($password == $confirmPassword) {
                $password = password_hash($password, PASSWORD_DEFAULT);
                $query = "INSERT INTO user VALUES ('', '$nama', '$email', '$no_hp', '$password')";
                mysqli_query($conn, $query);

                $_SESSION['registered'] = 'Berhasil registrasi, silahkan login.';

                header("Location: login.php");
                exit();
            }
        }

        $_SESSION['message'] = 'Email Anda sudah terdaftar!';

        header("Location: register.php");
        exit();
    }
    echo "bobi";
    ?>