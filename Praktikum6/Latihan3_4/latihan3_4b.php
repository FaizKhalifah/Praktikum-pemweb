<?php 
if(isset ($_POST['cd_order']) && isset ($_POST['dvd_order'])) { 
    setcookie("cd_order",$_POST['cd_order']);  
    setcookie("dvd_order",$_POST['dvd_order']);  
    header("Location: Latihan3_4c.php");  
}
