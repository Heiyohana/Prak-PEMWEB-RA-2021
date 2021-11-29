<!--This File for Connection with database mahasiswa dengan nama tabel "data"-->

<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "mahasiswa";

    $koneksi = mysqli_connect($server, $user, $pass, $dbname);
    if (mysqli_connect_errno()){
        echo "Database connection failed".mysqli_connect_error();
    } 
    /**else {echo "Hai, keren";} */ //For test database terkoneksi atau tidak
?>