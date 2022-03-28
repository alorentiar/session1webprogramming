<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "universitas";

    $connection = mysqli_connect($server, $username, $password, $db_name);

    if($connection){
        echo "Koneksi Berhasil";
    }else{
        echo "Koneksi Gagal ".mysqli_connect_error()." .";
    }
?>