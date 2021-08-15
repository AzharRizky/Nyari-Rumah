<?php

if(!isset($_SESSION)) {
    session_start();
}

include_once("assets/includes/function.php");

if (isset($_POST['btn-send'])) {
    if(msg($_POST) != 0){
        $_SESSION['berhasil-tambah'] = true;
    } else {
        echo mysqli_error($kon);
    }
}

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
        <title>Nyari Rumah | Home</title>
    </head>
    <body>
        <?php if(isset($_SESSION['berhasil-tambah'])) : ?>
        <div class="alert alert-success text-center" role="alert">Pesan Berhasil dikirim</div></div>
        <?php unset($_SESSION['berhasil-tambah']) ?>
        <?php endif ?>
        
        <!-- Nav Bar -->
        <?php include("assets/includes/header.php"); ?>
        
        <!-- Content -->
        <section>
            <!-- Artikel -->
            <div class="bg-white pt-3">
                <div class="container">
                    <div class="row" style="margin-top: 4%">
                    <!-- Blog Entries Column -->
                        <div class="col-md-12">
            
                        <!-- Blog Post -->
                        <?php
                                if (isset($_GET['pageno'])) {
                                    $pageno = $_GET['pageno'];
                                } else {
                                    $pageno = 1;
                                }
                                $no_of_records_per_page = 8;
                                $offset = ($pageno-1) * $no_of_records_per_page;
                                
                                $total_pages_sql = "SELECT COUNT(*) FROM post";
                                $result = mysqli_query($kon,$total_pages_sql);
                                $total_rows = mysqli_fetch_array($result)[0];
                                $total_pages = ceil($total_rows/$no_of_records_per_page);
                                
                                $query=mysqli_query($kon,"SELECT post.id AS pid, post.title AS posttitle, post.img1, post.price, post.luas_tanah, post.luas_bangunan, post.location, LEFT(post.description, 300) AS postdetails, post.PostingDate AS postingdate, post.url AS url FROM post WHERE post.Is_Active=1 ORDER BY post.id DESC LIMIT $offset, $no_of_records_per_page");
                                while ($rowpost=mysqli_fetch_array($query)) {
                                    $url_link = $rowpost['url'].".html";
                            ?>
            
                        <div class="card mb-4">
                            <img class="card-img-top" src="../assets/post-img/<?php echo htmlentities($rowpost['img1']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
                            <div class="card-body">
                                <h2 class="card-title"><?php echo htmlentities($rowpost['posttitle']);?></h2>
                                <p><b>Luas Tanah: </b><?php echo $rowpost['luas_tanah'];?> m² | <b> Luas Bangunan: </b><?php echo $rowpost['luas_bangunan'];?> m²</p>
                                <p><b>Lokasi: </b><?php echo $rowpost['location'];?> | <b> Harga: </b>Rp.<?php echo $rowpost['price'];?>,-</p>
                                <p class="card-text"><?php echo $rowpost['postdetails'];?>...</p>
                                <a href="<?php echo $url_link;?>" class="btn btn-primary">Read More &rarr;</a>
                            </div>
                            <div class="card-footer text-muted">
                                Posted on <?php echo htmlentities($rowpost['postingdate']);?>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- Pagination -->
                        <ul class="pagination justify-content-center mb-4">
                            <li class="page-item"><a href="?pageno=1"  class="page-link">First</a></li>
                            <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
                                <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
                            </li>
                            <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
                                <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>" class="page-link">Next</a>
                            </li>
                            <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Hubungi Kami, Nama, Email, No Telp, Subject, Pesan -->
            <div class="bg-light border-top">
                <div class="container pt-3 pb-5">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h2>Ask Us</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="ask-title">Ask Us Anything.</h1>
                            <h1 class="ask-title">Anytime.</h1>
                        </div>
            
                        <div class="col-md-6">
                            <div class="form contact-form">
                                <form action="" method="post">
                                    <div class="row mb-4">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Name" name="name" required>
                                        </div>
                                        <div class="col">
                                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Phone Number" name="telp" required>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Subject" name="subject" required>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col">
                                            <textarea type="text" class="form-control tell-us-form" placeholder="Tell us more" name="msg" required></textarea>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" style="width: 7rem;" class="btn btn-primary" name="btn-send">Send</button>
                                    </div>
                                </form>
                            </div>
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