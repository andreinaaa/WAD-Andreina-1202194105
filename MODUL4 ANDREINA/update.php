<?php

include('config.php');

if(isset($_POST['submit']));{
    $id = $_POST['id'];
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    $query = "UPDATE users SET id = '$id', email = '$email', nama = '$nama', no_hp = '$no_hp', password = '$confirmPassword' WHERE id = '$id' ";
    // echo $query;
    $update = mysqli_query($conn, $query);

    if ($update){
        header('Location: profile.php'); }
    
    }
?>