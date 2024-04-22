<?php
    require_once("menteri.php");
    $menteriKastrat = new menteri("Bagas");
    $menteriKastrat->setJabatan("Ketua");
    $menteriKastrat->nim="22213434";
    $menteriKastrat->angkatan="2022";
    echo $menteriKastrat->getJabatan();
    echo "<br>";
    echo $menteriKastrat->getNama();
    echo "<br>";
    echo $menteriKastrat->nim;
    echo "<br>";
    echo $menteriKastrat->angkatan;
?>