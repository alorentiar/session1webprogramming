<?php
    include("config.php");

    if(isset($_GET['id'])){
        $id = base64_decode($_GET['id']);
        $str_query = "delete from mahasiswa where nim = '".$id."'";
        $query = mysqli_query($connection, $str_query);
        
        if($query){
            echo "<script>alert('Delete berhasil');window.location='index.php';</script>";
        }else{
            echo "<script>alert('Delete gagal');window.location='index.php';</script>";
        }
    }

?>
