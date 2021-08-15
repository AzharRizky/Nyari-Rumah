<?php

include("../assets/includes/auth1.php");

if(isset($_POST['submit'])) {
    $admin = $_POST['admin'];
    $title = $_POST['title'];
    $tanah = $_POST['tanah'];
    $bangunan = $_POST['bangunan'];
    $lokasi = $_POST['location'];
    $harga = $_POST['price'];
    $description = $_POST['description'];
    $arr = explode(" ",$title);
    $url = implode("-",$arr);
    
    /*
    $imgfile = $_FILES["postimage"]["name"];
    $extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
    $allowed_extensions = array(".jpg",".jpeg",".png",".gif");
    if(!in_array($extension, $allowed_extensions)) {
        echo "<script>alert('Invalid format. Only jpg/jpeg/png/gif format allowed');</script>";
    } else {
        $imgnewfile = md5($imgfile).$extension;
        move_uploaded_file($_FILES["postimage"]["tmp_name"],"../assets/post-img/".$imgnewfile);
        $status = 1;
        $query = mysqli_query($kon," INSERT into post(admin, category, title, description, url, Is_Active, image) values ('$admin', '$category', '$title','$description','$url','$status','$imgnewfile')");
        if($query){
            $msg = "Post successfully added ";
        } else {
            $error = "Something went wrong. Please try again.";    
        }
    }
    */
    
    $img[$i] = array();
    $i=1;
    foreach ($_FILES["postimage"]["error"] as $key => $error){
        $img[$i] == "";
        if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["postimage"]["tmp_name"][$key];
            $img[$i] = $_FILES["postimage"]["name"][$key];
            move_uploaded_file($tmp_name, '../assets/post-img/'.$img[$i]);
        }
        $i++;
    }
    
    $status = 1;
    $query = mysqli_query($kon,"INSERT INTO post(admin, title, description, url, Is_Active, location, price, luas_tanah, luas_bangunan, img1, img2, img3, img4, img5, img6, img7, img8, img9, img10) values ('$admin', '$title','$description','$url','$status','$lokasi','$harga','$tanah','$bangunan','$img[1]','$img[2]','$img[3]','$img[4]','$img[5]','$img[6]','$img[7]','$img[8]','$img[9]','$img[10]')");
    
    if($query){
        $msg = "Post successfully added ";
    } else {
        $error = "Something went wrong. Please try again.";    
    }
    
    /*
    $querys = mysqli_query($kon,"SELECT id FROM post WHERE url='$url'");
    $rows = mysqli_fetch_array($querys);
    $id = $rows['id'];
    
    $limit = 10 * 1024 * 1024;
    $ekstensi =  array('png','jpg','jpeg','gif');
    $jumlahFile = count($_FILES['postimage']['name']);
     
    for($x=0; $x<$jumlahFile; $x++){
    	$namafile = $_FILES['postimage']['name'][$x];
    	$tmp = $_FILES['postimage']['tmp_name'][$x];
    	$tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
    	$ukuran = $_FILES['postimage']['size'][$x];	
    	if($ukuran > $limit){
    		$error = "Ukuran Gagal";
    	} else {
    		if(!in_array($tipe_file, $ekstensi)){
    			$error =  "Ekstensi Gagal";
    		} else {		
    			move_uploaded_file($tmp, '../assets/post-img/'.date('d-m-Y').'-'.$namafile);
    			$x = date('d-m-Y').'-'.$namafile;
    			mysqli_query($kon,"INSERT INTO img(name, post_id) VALUES ('$x', '$id')");
    		}
    	}
    }
    
    $msg = "Post successfully added ";
    */
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

        <!-- Bootstrap 5.0.0 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

        <script src="../assets/js/tiny-editor.js"></script>
        
        <!-- Title and Icon -->
        <link rel="shortcut icon" href="../assets/img/logo.ico"/>
        <link rel="apple-touch-icon" href="../assets/img/logo.ico">
        <title>Nyari Rumah | Add Post</title>
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
                            <h2>Add Post</h2>
                        </div>
                    </div>
                    <hr>
                    <!-- Alert -->
                    <?php if($msg){ ?>
                        <div class="alert alert-success" role="alert"><strong>Well done!</strong> <?php echo htmlentities($msg);?></div>
                    <?php } ?>
                    <?php if($error){ ?>
                        <div class="alert alert-danger" role="alert"><strong>Oh snap!</strong> <?php echo htmlentities($error);?></div>
                    <?php } ?>
                    
                    <div class="row">
                        <div class="col-md-12 col-md-offset-1">
                            <div class="p-6">
                                <div class="">
                                    <form name="addpost" method="post" enctype="multipart/form-data">
                                        <div class="form-group mb-3">
                                            <label for="Writer">Writer</label>
                                            <input type="text" class="form-control" name="admin" value="<?= $row['name']?>" placeholder="Enter Admin Name" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="Post Title">Post Title</label>
                                            <input type="text" class="form-control" name="title" placeholder="Enter title" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="Post Title">Luas Tanah</label>
                                            <input type="number" class="form-control" name="tanah" placeholder="Dalam m²" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="Post Title">Luas Bangunan</label>
                                            <input type="number" class="form-control" name="bangunan" placeholder="Dalam m²" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="Post Title">Harga</label>
                                            <input type="number" class="form-control" name="price" placeholder="Enter Price" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="Post Title">Lokasi</label>
                                            <input type="text" class="form-control" name="location" placeholder="Enter Location" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="Post Details">Post Details</label>
                                            <textarea id="editor" name="description"></textarea>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-12">
                                                <div class="card-box">
                                                    <label for="Feature Images">Feature Images</label>
                                                    <input type="file" class="form-control" id="postimage" name="postimage[]" required="required" multiple>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Save and Post</button>
                                            <a type="button" class="btn btn-danger waves-effect waves-light" href="post">Discard</a>
                                        </div>
                                    </form>
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