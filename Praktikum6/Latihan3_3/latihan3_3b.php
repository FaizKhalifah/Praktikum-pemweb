<?php
    if(empty($_POST['angka'])){
        echo "Hei, masukkan dulu angka yang Anda";
    }else{
    ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Faktorial</title>
        </head>
        <body>
            <?php
                $angka=$_POST['angka'];
                echo  "Nilai input : $angka"."<br>";
                $result = factorial($angka);
                echo "Nilai factorial : ".$result;
                $sessionArray = [$angka,$result,"225150207111066","Muhammad Alfaiz Khalifah Alamsyah"];
                //Membuat session
                session_start();
                $_SESSION["info"]=$sessionArray;
                // header("location:latihan3_3c.php");
            ?>
            <form action="latihan3_3c.php">
                <input type="submit" name="button" id="button" value="Berikutnya" />
            </form>
        </body>
        </html>
    
       
 <?php }
function factorial($angka):int{
    for($i=$angka;$i>0;$i--){
        $angka+=($i-1);
    }
    return $angka;
}
?>

