<?php
    include("koneksiMVC.php");
    $controller = new c_programKerja("Project Days"); 
    $controller->invoke();

?>