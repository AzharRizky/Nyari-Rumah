<?php

include("../assets/includes/auth1.php");

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
        <title>Nyari Rumah | Pesan</title>
    </head>
    <body>
        <!-- Nav Bar -->
        <?php include("../assets/includes/header-admin.php"); ?>
        
        <!-- Side Bar -->
        <?php include("../assets/includes/sidebar-admin.php"); ?>
        
        <!-- Post -->
        <section class="container-fluid">
            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 kanan">
                <div class="container-fluid mb-5 pt-5">
                    <div class="row">
                        <div class="col">
                            <h2>Pesan</h2>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <div class="table-responsive">
                                    <table class="table table-colored table-centered table-inverse m-0 bg-light">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>No Telp</th>
                                                <th>Subjek</th>
                                                <th>Pesan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $query=mysqli_query($kon,"SELECT name AS name, email AS email, subject AS subject, message AS message, phone AS phone FROM msg");
                                                $rowcount=mysqli_num_rows($query);
                                                if($rowcount==0){
                                            ?>
                                            <tr>
                                                <td colspan = "5" align="center"><h3 style="color:red">No record found</h3></td>
                                            </tr>
                                            <?php 
                                                } else {
                                                    while($row = mysqli_fetch_array($query))
                                                {
                                            ?>
                                            <tr>
                                                <td><?php echo htmlentities($row['name']);?></td>
                                                <td><?php echo htmlentities($row['email']);?></td>
                                                <td><?php echo htmlentities($row['phone']);?></td>
                                                <td><?php echo htmlentities($row['subject']);?></td>
                                                <td><?php echo htmlentities($row['message']);?></td>
                                            </tr>
                                            <?php } }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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