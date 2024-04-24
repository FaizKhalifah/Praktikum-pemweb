<?php
include_once("c_programKerja.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $nomorProgram = $_GET["id"];
    
    $controller = new c_programKerja();
    $controller->hapusProgramKerja($nomorProgram);
}
?>
