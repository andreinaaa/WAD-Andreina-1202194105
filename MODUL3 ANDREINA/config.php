    <?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbname = "modul3";
    $dbpass = "";

    $conn = mysqli_connect("localhost", "root", "", "modul3");

    if(!$conn) {
        echo "<script>
                alert ('Failed Connect Into Database')
            </script>";
    }

    ?>