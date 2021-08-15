<?php

include_once("../assets/includes/auth.php");

if (isset($_POST['login'])) {
    login($_POST);
    header('location: dashboard');
} else {

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="Nyari Rumah"/>
        <meta name="author" content="Azhar Rizki Zulma"/>
        <meta name="keywords" content="Nyari Rumah">
        <meta name="google-site-verification" content=""/>
        <meta property="og:title" content="Nyari Rumah"/>
        <meta property="og:description"content="Home Sweet Home"/>
        <meta property="og:image" content="../assets/img/logo.ico"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content=""/>
        
        <!-- Default CSS -->
        <link rel="stylesheet" href="../assets/css/style.css">
        
        <!-- API Font -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Bootstrap 5.0.0 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        <style>
            html, body {
                height: 100%;
                scroll-behavior: smooth;
            }
        </style>
        
        <!-- Title and Icon -->
        <link rel="shortcut icon" href="../assets/img/logo.ico"/>
        <link rel="apple-touch-icon" href="../assets/img/logo.ico">
        <title>Nyari Rumah | Admin Login</title>
    </head>
    <body>
        <!-- Alert -->
        <?php if(isset($_SESSION['salahpas'])) : ?>
        <div class="alert alert-danger text-center mb-0" role="alert">Password Salah!</div>
        <?php unset($_SESSION['salahpas']) ?>
        <?php endif ?>
        <?php if(isset($_SESSION['salahuser'])) : ?>
        <div class="alert alert-danger text-center mb-0" role="alert">Username Tidak Terdaftar!</div>
        <?php unset($_SESSION['salahuser']) ?>
        <?php endif ?>
        <?php } ?>
        
        <!-- Admin Login -->
        <div id="login" class="login-bg-image">
            <br>
            <br>
            <br>
            <br>
            <form class="login-content animate col-md-3 my-auto mx-auto text-left" method="POST" action="">
                <div class="login-imgcontainer">
                    <a href="/" class="close" title="Close Modal">&times;</a>
                    <img src="../assets/img/logo.ico" height="100" alt="logo">
                </div>
                <div class="login-container">
                    <label for="email"><b>Email or Username</b></label>
                    <div class="input-container">
                        <i class="fa fa-envelope form-icon"></i>
                        <input type="text" placeholder="Enter Email or Username" name="username" required>
                    </div>
                    <label for="psw"><b>Password</b></label>
                    <div class="input-container">
                        <i class="fa fa-key form-icon"></i>
                        <input type="password" placeholder="Enter Password" name="password" required>
                    </div>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>
                <div class="login-container" style="background-color:#f1f1f1">
                    <div class="row">
                        <div class="col-md-8 ms-sm-auto my-1"><button class="submitlog-btn my-auto" type="submit" name="login">Login</button></div>
                        <div class="col-md-4 ms-sm-auto my-1"><a type="button" href="/" class="cancelbtn my-auto text-center">Cancel</a></div>
                    </div>
                </div>
            </form>
        </div>
        
        <!-- Bootstrap 5.0.0 JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>