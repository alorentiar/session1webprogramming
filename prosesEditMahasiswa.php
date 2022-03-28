<?php
    include("config.php");
    if(isset($_POST['submit'])){
        $str_query ="update mahasiswa set nama='".$_POST['nama']."', jurusan='".$_POST['jurusan']."', alamat='".$_POST['alamat']."', tanggal_lahir='".$_POST['tanggal_lahir']."' where nim='".$_POST["nim"]."'";
        $query = mysqli_query($connection, $str_query);

        if($query){
            echo "<script>alert('Insert berhasil');window.location='index.php';</script>";

        }else{
            echo "<script>alert('Insert gagal');window.location='index.php';</script>";
        }

    }

?>