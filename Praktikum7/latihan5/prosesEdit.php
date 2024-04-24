<?php
include_once("c_programKerja.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomorProgram = $_POST["nomorProgram"];
    $namaProgram = $_POST["namaProgram"];
    $suratKeterangan = $_POST["suratKeterangan"];
    $controller = new c_programKerja();
    $controller->prosesEditProgramKerja($nomorProgram, $namaProgram, $suratKeterangan);
    $controller->invoke();
}  
?>