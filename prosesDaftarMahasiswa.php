<?php
    include("config.php");

    if(isset($_POST['submit']));
    if(isset($_POST['submit'])){
        $str_query = "insert into mahasiswa values('".$_POST['nim']."','".$_POST['nama']."','".$_POST['jurusan']."','".$_POST['alamat']."',
        '".$_POST['tanggal_lahir']."')";

        $query = mysqli_query($connection, $str_query);

        if($query){
            echo "<script>alert('Insert berhasil');window.location='index.php';</script>";

        }else{
            echo "<script>alert('Insert gagal');window.location='index.php';</script>";
        }
    }

?>