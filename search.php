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
        <title>Nyari Rumah | Search</title>
    </head>
    <body>
        <!-- Nav Bar -->
        <?php include("assets/includes/header.php"); ?>
        
        <!-- Content -->
        <section>
            <!-- Post -->
            <div class="pt-3 bg-white">
                <div class="container post-content">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <?php
                            if(isset($_GET['search'])){
                        $cari = htmlspecialchars($_GET['search']);
	                    $query = mysqli_query($kon, "SELECT post.img1, post.title, post.PostingDate AS postingdate, post.price, post.luas_tanah, post.luas_bangunan, post.location, LEFT(post.description, 100) AS description, post.url FROM post WHERE title LIKE '%".$cari."%' AND Is_Active=1");
	                    if ($query === FALSE) {
                            die(mysqli_error());
                        } else {
	                        $rowcount = mysqli_num_rows($query);
                            if($rowcount!=0){
                            ?>
                            <h1 class="pl-3">Terdapat <?php echo $rowcount;?> hasil dari pencarian <?php echo $_GET['search'];?>:</h1>
	                        <?php while($row = mysqli_fetch_array($query)) { 
	                        $url_link = $row['url'].".html";
	                        ?>
	                        <br>
        	                <div class="card">
                                <div class="img"><img src="assets/post-img/<?php echo htmlentities($row['img1']);?>" alt="<?php echo htmlentities($row['title']);?>"></div>
                                <div class="content card-body">
                                    <h3 class="title text-center"><?php echo htmlentities($row['title']);?></h3>
                                    <hr>
                                    <p><b>Luas Tanah: </b><?php echo $row['luas_tanah'];?> m² | <b> Luas Bangunan: </b><?php echo $row['luas_bangunan'];?> m²</p>
                                    <p><b>Lokasi: </b><?php echo $row['location'];?> | <b> Harga: </b>Rp.<?php echo $row['price'];?>,-</p>
                                    <div class="card-text mt-3"><?php 
                                    $pt = $row['description'];
                                    echo substr($pt, 0);?>...
                                    </div>
                                    <p>Posted on <?php echo htmlentities($row['postingdate']);?></p>
                                    <a href="<?php echo $url_link;?>" class="btn btn-primary text-white">Read More &rarr;</a>
                                </div>
                            </div>
                            <?php }
                            } else { ?>
                                <div class="alert alert-danger mt-5" role="alert"><strong>Maaf Post Tidak Dapat Ditemukan!</strong> Silahkan Gunakan Kata Kunci Lain</div>
                        <?php } 
                        } 
                    }
                    ?>
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