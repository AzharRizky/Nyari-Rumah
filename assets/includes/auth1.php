<?php

if(!isset($_SESSION)) {
    session_start();
}

require_once("function.php");

if(!isset($_SESSION['login'])) {
    header('location: /admin/');
} else {
    $username = $_SESSION['username'];
    $query = mysqli_query($kon, "SELECT * FROM admin WHERE username = '$username'");
    $row = mysqli_fetch_assoc($query);
}

?>