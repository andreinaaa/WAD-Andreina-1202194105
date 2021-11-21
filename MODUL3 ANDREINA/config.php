<?php
$dbhost = "localhost";
$dbuser = "root";
$dbname = "modul3";
$dbpass = "nugget";

$conn = mysqli_connect("localhost", "root", "nugget", "modul3");

if(!$conn) {
    echo "<script>
            alert ('Failed Connect Into Database')
        </script>";
}

?>