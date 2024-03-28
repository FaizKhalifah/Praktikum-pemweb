<?php
    if(!empty($_POST["nama"])&&!empty($_POST["password"])){
        $username = $_POST["nama"];
        $password = $_POST["password"];
        if($username=="admin" && $password == "admin"){
            session_start();
            $_SESSION["session"]=$username;
            header("location:latihan3_4a.php");
        }else{
            echo "username atau password salah";
        }
    }else{
        echo "Password atau nama masih belum diisi";
    }
   
?>