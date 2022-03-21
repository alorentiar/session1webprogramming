<?php 

    if(isset($_POST['submit'])){
        // print_r($_FILES);

        $fileName = $_FILES['berkas']['name'];
        $tempName = $_FILES['berkas']['tmp_name'];

        $dirTujuan = "terupload/";

        // isinya nama file temporary mau dipindahkan kemana
        $upload = move_uploaded_file($tempName, $dirTujuan.$fileName);

        if($upload){
            echo "File berhasil terupload";
            echo "<a href='".$dirTujuan.$fileName."'>".$fileName."</a>";
        } else{
            echo "gagal lur";
        }




    }
?> 