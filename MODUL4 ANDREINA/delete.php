    <?php
    session_start();
    include_once('config.php');

    if(isset($_POST['btn']));{

    $id = $_GET['id'];

    $query = "DELETE FROM bookings WHERE id = '$id'";
    echo $query;
    $delete = mysqli_query($conn, $query);

    if ($delete){
        header('Location: booking.php'); }
    }
    ?>