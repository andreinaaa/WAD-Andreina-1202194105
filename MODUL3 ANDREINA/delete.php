    <?php

    include('config.php');

    if(isset($_POST['submit']));{

    $idbuku = $_POST['id_buku'];

    $query = "DELETE buku_table WHERE id_buku = '$idbuku'";
    // echo $query;
    $delete = mysqli_query($conn, $query);

    if ($delete){
        header('Location: andreina_home.php'); }
    }
    ?>