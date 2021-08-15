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
        <title>Nyari Rumah | Team</title>
    </head>
    <body>
        <?php if(isset($_SESSION['berhasil-tambah'])) : ?>
        <div class="alert alert-success text-center" role="alert">Pesan Berhasil dikirim</div></div>
        <?php unset($_SESSION['berhasil-tambah']) ?>
        <?php endif ?>
        
        <!-- Nav Bar -->
        <?php include("assets/includes/header.php"); ?>
        
        <!-- Team Content -->
        <section class="section-pad contact">
            <div class="container">
                <!-- Heading -->
                <div class="row mb-4">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 text-center">
                        <h1 data-aos-delay="400" data-aos-duration="800" data-aos="fade-down">Our Team</h1>
                    </div>
                    <div class="col-md-4"> </div>
                </div>
                <!-- Content -->
                <div class="row text-center team">
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="card bg-light p-4">
                            <img src="../assets/img/huala.jpeg" class="card-img-top" alt="Huala">
                            <div class="card-body">
                                <h5 class="card-title">Huala Manurung</h5>
                                <p class="card-text">Founder of Nyari Rumah</p>
                            </div>
                            <div class="row">
                                <a href="mailto:%3CHuala%3Ehualamanurung568@gmail.com?%20subject=Hello%20Pak%20Huala"><p>hualamanurung568@gmail.com</p></a>
                            </div>
                            <div class="row" id="contact">
                                <div class="text-center">
                                    <a href="https://facebook.com/huala.manurung.50" class="fa fa-facebook"></a>
                                    <a href="https://wa.me/+6281314870333" class="fa fa-whatsapp"></a>
                                    <a href="https://wa.me/+6281213278333" class="fa fa-whatsapp"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-light p-4">
                            <img src="../assets/img/ivana.jpeg" class="card-img-top" alt="Ivana">
                            <div class="card-body">
                                <h5 class="card-title">Ivana Gabriela Manurung</h5>
                                <p class="card-text">Co-Founder of Nyari Rumah</p>
                            </div>
                            <div class="row">
                                <a href="mailto:%3CIvana%3Ejustmevan19@gmail.com?%20subject=Hello%20Ivana"><p>justmevan19@gmail.com</p></a>
                            </div>
                            <div class="row" id="contact">
                                <div class="text-center">
                                    <a href="https://wa.me/+6281296932033" class="fa fa-whatsapp"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
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