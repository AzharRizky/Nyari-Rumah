<?php

include("../assets/includes/auth1.php");

if($_GET['action']='del') {
    $postid = intval($_GET['id']);
    $query = mysqli_query($kon, "UPDATE post set Is_Active=0 where id='$postid'");
    if($query) {
        $msg = "Post deleted ";
    } else {
        $error = "Something went wrong. Please try again.";
    } 
}

if($_GET['action']='restore'){
    $postid = intval($_GET['rid']);
    $query = mysqli_query($kon, "UPDATE post set Is_Active=1 where id='$postid'");
    if($query){
        $msg = "Post restored successfully ";
    } else {
        $error = "Something went wrong. Please try again.";    
    } 
}


if($_GET['presid']){
    $id = intval($_GET['presid']);
    $query = mysqli_query($kon, "DELETE FROM post WHERE id='$id'");
    $delmsg = "Post deleted forever";
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
        
        <!-- Title and Icon -->
        <link rel="shortcut icon" href="../assets/img/logo.ico"/>
        <link rel="apple-touch-icon" href="../assets/img/logo.ico">
        <title>Nyari Rumah | Post Management</title>
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
                            <h2>Post</h2>
                        </div>
                        <div class="col-md-2 col-4">
                            <a class="btn btn-primary" style="width: 100%;" href="add-post">Add Post</a>
                        </div>
                    </div>
                    <hr>
                    <!-- Alert -->
                    <?php if($delmsg){ ?>
                    <div class="alert alert-danger" role="alert"><strong>Oh snap!</strong> <?php echo htmlentities($delmsg);?></div>
                    <?php } ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <div class="table-responsive">
                                    <table class="table table-colored table-centered table-inverse m-0 bg-light">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Admin</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $query=mysqli_query($kon,"SELECT id as id, admin as admin, title as title FROM post WHERE post.Is_Active=1");
                                                $rowcount=mysqli_num_rows($query);
                                                if($rowcount==0){
                                            ?>
                                            <tr>
                                                <td colspan = "3" align="center"><h3 style="color:red">No record found</h3></td>
                                            </tr>
                                            <?php 
                                                } else {
                                                    while($row = mysqli_fetch_array($query))
                                                {
                                            ?>
                                            <tr>
                                                <td><?php echo htmlentities($row['title']);?></td>
                                                <td><?php echo htmlentities($row['admin']);?></td>
                                                <td><a href="edit-post?id=<?php echo htmlentities($row['id']);?>"><i class="fa fa-pencil" style="color: #29b6f6;"></i></a> 
                                                    &nbsp;<a href="post?id=<?php echo htmlentities($row['id']);?>&&action=del" onclick="return confirm('Do you reaaly want to delete?')"> <i class="fa fa-trash-o" style="color: #f05050"></i></a> </td>
                                            </tr>
                                            <?php } }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <h2>Trash Post</h2>
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
                                                <th>Title</th>
                                                <th>Admin</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $query=mysqli_query($kon,"SELECT id as id, admin as admin, title as title FROM post WHERE post.Is_Active=0");
                                                $rowcount=mysqli_num_rows($query);
                                                if($rowcount==0){
                                            ?>
                                            <tr>
                                                <td colspan = "3" align="center"><h3 style="color:red">No record found</h3></td>
                                            </tr>
                                            <?php 
                                                } else {
                                                    while($row = mysqli_fetch_array($query))
                                                {
                                            ?>
                                            <tr>
                                                <td><?php echo htmlentities($row['title']);?></td>
                                                <td><?php echo htmlentities($row['admin']);?></td>
                                                <td><a href="post?rid=<?php echo htmlentities($row['id']);?>&&action=restore" onclick="return confirm('Do you really want to restore?')"> <i class="fa fa-pencil" style="color: #29b6f6;" title="Restore this Post"></i></a>
                                                    &nbsp;<a href="post?presid=<?php echo htmlentities($row['id']);?>&&action=perdel" onclick="return confirm('Do you reaaly want to delete?')"> <i class="fa fa-trash-o" style="color: #f05050" title="Permanently delete this post"></i></a> </td>
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