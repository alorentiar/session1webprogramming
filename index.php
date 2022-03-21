<?php
    session_start();
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
    
</body>
</html>