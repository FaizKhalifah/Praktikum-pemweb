<?php
session_start();
if (empty($_SESSION["info"])) {
echo "Maaf, belum ada informasi pada session";
} else {
    $arraySession = $_SESSION["info"];
    foreach($arraySession as $i){
        echo $i."<br>";
    }
    unset($arraySession);
}
?>