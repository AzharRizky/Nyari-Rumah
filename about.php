<?php

if(!isset($_SESSION)) {
    session_start();
}

include_once("assets/includes/function.php");

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

        <!-- Bootstrap 5.0.0 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        
        <!-- Title and Icon -->
        <link rel="shortcut icon" href="../assets/img/logo.ico"/>
        <link rel="apple-touch-icon" href="../assets/img/logo.ico">
        <title>Nyari Rumah | About Us</title>
    </head>
    <body>
        <!-- Nav Bar -->
        <?php include("assets/includes/header.php"); ?>
        
        <!-- Content About -->
        <section id="aboutp">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 text-center align-self-center my-5">
                        <img data-aos="fade-right"  data-aos-delay="200" data-aos-duration="800" src="../assets/post-img/Rumah10.jpeg" alt="gambar" width="500">
                    </div>
                    <div class="col-md-6 col-sm-12 align-self-center p-4" data-aos="fade-left"  data-aos-delay="200" >
                        <h4><b>ABOUT US</b></h4>
                        <hr>
                        <?php
                            $query = mysqli_query($kon, "SELECT about.admin as admin, about.description as description FROM about");
                            
                            while ($row = mysqli_fetch_array($query)) {
                                $pt = $row['description'];
                                echo (substr($pt, 0));
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Footer -->
        <?php include("assets/includes/footer.php"); ?>
    </body>
</html>