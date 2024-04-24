<?php
    function connectDatabase(){
        $mysqli = new mysqli('localhost', 'root', '', 'praktikum7pemweb');
        return $mysqli;
    }