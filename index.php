<?php
    session_start();
    include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset( $_SESSION['usernameSession']) !=""){
    ?>
        <h1>Halo selamat datang <?php echo  $_SESSION['usernameSession'] ?></h1>
            <a href="logout.php">Logout</a></br>
            <a href='login.php'>Login</a></br>
    <?php
        }else{
            echo "<h1>login dulu gan</h1>";
            echo "<a href='login.php'>Login</a></br>";
            echo "<a href='register.php'>Register</a>";
        }
        
    ?>
    <!-- <h1>Halo welcome</h1> -->

    <form action="prosesUpload.php" method="post" enctype="multipart/form-data">
        Silahkan pilih file <input type="file" name="berkas">
        <input type="submit" name="submit" value="Upload">
    </form>
    
    <?php
        $str_query = "SELECT * FROM mahasiswa";

        $query = mysqli_query($connection, $str_query);
        
        // $data = mysqli_fetch_array($query);

        while($data = mysqli_fetch_array($query)){
            echo $data['nim']." - ".$data['nama']." - ".$data['jurusan']." - ".$data['alamat']." - ".$data['tanggal_lahir']."
            <a href='edit.php?id=".base64_encode($data['nim'])."'>Edit</a>&nbsp<a href='delete.php?id=".base64_encode($data['nim'])."'>Delete</a> <br>";
        }
    
    ?>
    <br>
    <form action="prosesDaftarMahasiswa.php" method="post">
        NIM : <input type="text" name="nim"/></br>
        Nama : <input type="text" name="nama"/></br>
        Jurusan : <input type="text" name="jurusan"/></br>
        Alamat : <textarea name="alamat"/></textarea></br>
        Tgl Lahir : <input type="date" name="tanggal_lahir"/></br>
        <input type="submit" name="submit" value="Daftar"/>
    </form>

</body>
</html>