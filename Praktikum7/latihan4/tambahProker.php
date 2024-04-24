<?php
include_once("c_programKerja.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomorProgram = $_POST["nomorProgram"];
    $namaProgram = $_POST["namaProgram"];
    $suratKeterangan = $_POST["SuratKeterangan"];
    
    $controller = new c_programKerja();
    $controller->tambahProgramKerja($nomorProgram, $namaProgram, $suratKeterangan);
    $controller->invoke();
}
?>
