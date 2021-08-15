<?php

if(!isset($_SESSION)) {
    session_start();
}

include_once("assets/includes/function.php");

$url = $_GET['url'];
$querys = mysqli_query($kon, "SELECT post.title as title, post.admin as admin, post.img1, post.img2, post.img3, post.img4, post.img5, post.img6, post.img7, post.img8, post.img9, post.img10, post.price, post.luas_tanah, post.luas_bangunan, post.location, post.description as description, post.PostingDate as postingdate, post.url as url FROM post WHERE post.url='$url' AND Is_Active=1");
$rows = mysqli_fetch_array($querys);

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
        
        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="../assets/lib/owlcarousel/owl.carousel.min.css">
        <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
        
        <!-- Venobox -->
        <link rel="stylesheet" href="../assets/lib/venobox/venobox.css" type="text/css" media="screen" />
        
        <!-- Title and Icon -->
        <link rel="shortcut icon" href="../assets/img/logo.ico"/>
        <link rel="apple-touch-icon" href="../assets/img/logo.ico">
        <title>Nyari Rumah | <?php echo htmlentities($rows['title']);?></title>
    </head>
    <body>
        <!-- Nav Bar -->
        <?php include("assets/includes/header.php"); ?>
        
        <!-- Content -->
        <section>
            <!-- Carousel -->
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/post-img/<?php echo htmlentities($rows['img1']);?>" class="d-block w-100" alt="<?php echo htmlentities($row['title']);?>">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/post-img/<?php echo htmlentities($rows['img2']);?>" class="d-block w-100" alt="<?php echo htmlentities($row['title']);?>">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/post-img/<?php echo htmlentities($rows['img3']);?>" class="d-block w-100" alt="<?php echo htmlentities($row['title']);?>">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/post-img/<?php echo htmlentities($rows['img4']);?>" class="d-block w-100" alt="<?php echo htmlentities($row['title']);?>">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/post-img/<?php echo htmlentities($rows['img5']);?>" class="d-block w-100" alt="<?php echo htmlentities($row['title']);?>">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/post-img/<?php echo htmlentities($rows['img6']);?>" class="d-block w-100" alt="<?php echo htmlentities($row['title']);?>">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/post-img/<?php echo htmlentities($rows['img7']);?>" class="d-block w-100" alt="<?php echo htmlentities($row['title']);?>">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/post-img/<?php echo htmlentities($rows['img8']);?>" class="d-block w-100" alt="<?php echo htmlentities($row['title']);?>">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/post-img/<?php echo htmlentities($rows['img9']);?>" class="d-block w-100" alt="<?php echo htmlentities($row['title']);?>">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/post-img/<?php echo htmlentities($rows['img10']);?>" class="d-block w-100" alt="<?php echo htmlentities($row['title']);?>">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
            
            <!-- Post -->
            <div class="my-5 pt-3 bg-white">
                <div class="container post-content">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <?php
                            $query = mysqli_query($kon, "SELECT post.title as title, post.admin as admin, post.img1, post.img2, post.img3, post.img4, post.img5, post.img6, post.img7, post.img8, post.img9, post.img10, post.price, post.luas_tanah, post.luas_bangunan, post.location, post.description as description, post.PostingDate as postingdate, post.url as url FROM post WHERE post.url='$url' AND Is_Active=1");
                            
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
        	                <div class="card">
                                <div class="content card-body">
                                    <h3 class="title text-center"><?php echo htmlentities($row['title']);?></h3>
                                    <hr>
                                    <p><b>Luas Tanah: </b><?php echo $row['luas_tanah'];?> m² | <b> Luas Bangunan: </b><?php echo $row['luas_bangunan'];?> m²</p>
                                    <p><b>Lokasi: </b><?php echo $row['location'];?> | <b> Harga: </b>Rp.<?php echo $row['price'];?>,-</p>
                                    <div class="card-text mt-3"><?php 
                                    $pt = $row['description'];
                                    echo (substr($pt, 0));?>
                                    </div>
                                    <p><b>Posted on </b><?php echo htmlentities($row['postingdate']);?> | <b>Posted by </b><?php echo htmlentities($row['admin']);?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Footer -->
        <?php include("assets/includes/footer.php"); ?>
        
        <!-- Main JavaScript -->
        <script src="assets/js/main.js"></script>

        <!-- Venobox -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>
        <script src="assets/lib/venobox/venobox.js"></script>
        
        <!-- Venobox JavaScript -->
        <script src="assets/js/main-venobox.js"></script>
    </body>
</html>