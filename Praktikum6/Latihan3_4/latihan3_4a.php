<?php
    session_start();
    if(empty($_SESSION["session"])){
        echo "session telah habis";
    }else{
?>

<html> 
    <head> 
        <title>Order Form</title> 
    </head> 
    <body> 
        <form action="Latihan3_4b.php" method="post">
            <p> Order CD, amount: 
                <input type="text" name="cd_order" value="0" size="2"   maxlength="2"> 
            </p>  
            <p> Order DVD, amount: 
                <input type="text" name="dvd_order" value="0" size="2"   maxlength="2"> 
            </p>  
        <input type="submit" value="Add To Cart" name="submit">  </form> 
    </body>  
</html>
<?php } ?>
       