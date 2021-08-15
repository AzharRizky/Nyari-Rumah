<?php

if(!isset($_SESSION)) {
    session_start();
}

require_once("function.php");

if(isset($_SESSION['login'])) {
    header('location: dashboard');
}

?>