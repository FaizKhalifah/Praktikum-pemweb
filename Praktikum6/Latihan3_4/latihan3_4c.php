<?php
    session_start();
    if(empty($_SESSION["session"])){
        echo"session anda telah habis";
    }else{
        
?>

<!DOCTYPE html> 
<html> 
    <head>  
        <title>Order Form</title>  
    </head>  
    <body>  
        <p><u>Order Summary</u></p>  
        <?php  
        $num_cd_order = $_COOKIE['cd_order'];  
        $num_dvd_order = $_COOKIE['dvd_order'];  
        echo "Ordered CD: ".$num_cd_order." pieces <br>";  
        echo "Ordered DVD: ".$num_dvd_order." pieces <br>";  
        ?>  
        <form action="signOut.php">
        <input type="submit" name="button" id="button" value="keluar"> 
        </form>
    </body>  
</html>
<?php } ?>
