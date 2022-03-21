<?php
    session_start();


    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['username'];

        $_SESSION['usernameSession'] = $username;
        $_SESSION['passwordSession'] = $password;
        
        header("location:index.php");
    }
?>
