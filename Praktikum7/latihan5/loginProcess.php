<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipe= $_POST['tipe'];
    echo "Nilai yang dipilih: " . $nilai_pilihan;
    session_start();
    $_SESSION["session"]=$tipe;
    header("location:index.php");
}
?>
