<?php
    include("config.php");

    if(isset($_GET['id'])){
        $id = base64_decode($_GET['id']);
        $str_query = "select * from mahasiswa where nim = '".$id."'";
        $query = mysqli_query($connection, $str_query);
        $data = mysqli_fetch_array($query);
    }

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
<br>
    <form action="prosesEditMahasiswa.php" method="post">
        NIM : <input type="text" name="nim" value="<?php echo $data['nim'];?>" readonly/></br>
        Nama : <input type="text" name="nama" value="<?php echo $data['nama']; ?>"/></br>
        Jurusan : <input type="text" name="jurusan" value="<?php echo $data['jurusan']; ?>"/></br>
        Alamat : <textarea name="alamat"/> <?php echo $data['alamat']; ?>"</textarea></br>
        Tgl Lahir : <input type="date" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>"/></br>
        <input type="submit" name="submit"/>
    </form>
</body>
</html>