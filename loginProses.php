<?php
    session_start();

    if(isset($_POST['submit'])){
        if(($_POST['username'] ==  isset($_SESSION['usernameSession'])) && ($_POST['password']== isset($_SESSION['passwordSession']))) {
            header("location:index.php");
        }else{
            echo "maaf anda gagal login pastikan username sesuai";
            echo "<a href='login.php'>Login</a></br>";
            echo "<a href='register.php'>Register</a>";
        }
    }
?>