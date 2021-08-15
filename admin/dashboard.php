<?php

include_once("../assets/includes/auth1.php");

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
        
        <!-- Title and Icon -->
        <link rel="shortcut icon" href="../assets/img/logo.ico"/>
        <link rel="apple-touch-icon" href="../assets/img/logo.ico">
        <title>Nyari Rumah | Admin Panel</title>
    </head>
    <body>
        <!-- Nav Bar -->
        <?php include("../assets/includes/header-admin.php"); ?>
        
        <!-- Side Bar -->
        <?php include("../assets/includes/sidebar-admin.php"); ?>
        
        <!-- Dashboard -->
        <section class="container-fluid">
            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 kanan">
                <div class="container-fluid mb-5 pt-5">
                    <div class="row">
                        <div class="col">
                            <h2>Selamat Datang <?= $row['name']?></h2>
                        </div>
                    </div>
                    <hr>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col">
                            <h2>Dashboard</h2>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <a class="dashboard-card" href="post">
                                <div class="card">
                                    <div class="card-body mx-0 row">
                                        <i class="icon mx-0 fa fa-folder col-5"></i>
                                        <div class="col-7">
                                            <p class="text-left row col-md-12" title="Statistics">POST</p>
                                            <?php $query = mysqli_query($kon, "SELECT * FROM post WHERE Is_Active=1");
                                            $jml = mysqli_num_rows($query); ?>
                                            <h2 class="text-left row col-md-12"><?php echo htmlentities($jml);?><small></small></h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 mb-3">
                            <a class="dashboard-card" href="pesan">
                                <div class="card">
                                    <div class="card-body mx-0 row">
                                        <i class="icon mx-0 fa fa-envelope col-5"></i>
                                        <div class="col-7">
                                            <p class="text-left row col-md-12" title="Statistics">PESAN</p>
                                            <?php $query = mysqli_query($kon, "SELECT * FROM msg");
                                            $jml = mysqli_num_rows($query); ?>
                                            <h2 class="text-left row col-md-12"><?php echo htmlentities($jml);?><small></small></h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Footer -->
        <?php include("../assets/includes/footer-admin.php"); ?>
    
        <!-- Bootstrap 5.0.0 JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>