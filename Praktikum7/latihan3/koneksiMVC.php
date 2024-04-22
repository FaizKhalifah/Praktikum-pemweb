<?php
    function connectDatabase(){
        $mysqli = new mysqli('localhost', 'root', '', 'praktikumWeb');
        return $mysqli;
    }