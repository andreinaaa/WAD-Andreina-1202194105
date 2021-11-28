    <?php
    session_start();
    include_once('config.php');

    if(isset($_POST['submit'])){
        $user_id = $_SESSION['id'];
        $nama_tempat = $_POST['nama_tempat'];
        $lokasi = $_POST['lokasi'];
        $harga = $_POST['harga'];
        $tanggal = $_POST['tanggal'];
        
        $query = "INSERT INTO bookings (user_id, nama_tempat, lokasi, harga, tanggal) VALUE ('$user_id','$nama_tempat', '$lokasi', '$harga','$tanggal')";
        $insert = mysqli_query($conn, $query);

        // echo $query;

        if ($insert){
            $_SESSION['message'] = 'Berhasil memesan tiket.';
            header('Location: index_v2.php');
        }
    }

    
    ?>