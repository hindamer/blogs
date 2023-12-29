<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JoeBLog landing page.">
    <meta name="author" content="Devcrud">
    <title>JoeBLog | Free Bootstrap 4.3.x template</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + JoeBLog main styles -->
    <link rel="stylesheet" href="assets/css/joeblog.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- page First Navigation -->
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/imgs/logo.svg" alt="">
            </a>
            <div class="socials">
                <a href="javascript:void(0)"><i class="ti-facebook"></i></a>
                <a href="javascript:void(0)"><i class="ti-twitter"></i></a>
                <a href="javascript:void(0)"><i class="ti-pinterest-alt"></i></a>
                <a href="javascript:void(0)"><i class="ti-instagram"></i></a>
                <a href="javascript:void(0)"><i class="ti-youtube"></i></a>
            </div>
        </div>
    </nav>
    <!-- End Of First Navigation -->

    <!-- Page Second Navigation -->
    <nav class="navbar custom-navbar navbar-expand-md navbar-light bg-primary sticky-top">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="no-sidebar.html">No Sidebar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="single-post.html">Single Post</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <div class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="components.html" class="ml-4 btn btn-dark mt-1 btn-sm">Components</a>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Of Page Second Navigation -->

    <!-- page-header -->
    <header class="page-header"></header>
    <!-- end of page header -->

    <div class="container">
        <section>
            <div class="feature-posts">
                <a href="single-post.html" class="feature-post-item">
                    <span>Featured Posts</span>
                </a>
                <?php
                include("oop.php");
                $db=new Blog();
                $db->_get();
                $data=$db->select("*","posts");
                $row=$data->fetchAll(PDO::FETCH_ASSOC);
                foreach($row as $fet){?>
                   <a href="single-post.html" class="feature-post-item">
                    <img src="./admin/images/<?php echo $fet['image']?>" class="w-100" alt="" width="130" height="130">
                    <div class="feature-post-caption"><?php echo $fet['title']?></div>
                </a>
              <?php  }
                ?>
             
            </div>
        </section>
        <hr>
        <div class="page-container">
            <div class="page-content">
                <div class="card">
                    <div class="card-header text-center">
                        <h5 class="card-title">Voluptates Corporis Placeat</h5>
                        <small class="small text-muted">January 24 2019
                            <span class="px-2">-</span>
                            <a href="#" class="text-muted">32 Comments</a>
                        </small>
                    </div>
                    <div class="card-body">
                        <div class="blog-media">
                            <img src="assets/imgs/blog-6.jpg" alt="" class="w-100">
                            <a href="#" class="badge badge-primary">#Salupt</a>
                        </div>
                        <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos saepe dolores et nostrum porro odit reprehenderit animi, est ratione fugit aspernatur ipsum. Nostrum placeat hic saepe voluptatum dicta ipsum beatae.</p>
                    </div>

                    <div class="card-footer d-flex justify-content-between align-items-center flex-basis-0">
                        <button class="btn btn-primary circle-35 mr-4"><i class="ti-back-right"></i></button>
                        <a href="single-post.html" class="btn btn-outline-dark btn-sm">READ MORE</a>
                        <a href="#" class="text-dark small text-muted">By : Joe Mitchell</a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <?php
                    // include("oop.php");
                    // $db = new Blog();
                    $db->_get();
                    $data = $db->select("*", "posts");
                    $row = $data->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($row as $post) { ?>
                        <div class="col-lg-6">
                            <div class="card text-center mb-5">
                                <div class="card-header p-0">
                                    <div class="blog-media">
                                        <img src="./admin/images/<?php echo $post['image']?>" alt="" class="w-100" width="100" height="250">
                                        <a href="#" class="badge badge-primary">#Placeat</a>
                                    </div>
                                </div>
                                <div class="card-body px-0">
                                    <h5 class="card-title mb-2"><?php echo $post['title']?></h5>
                                    <small class="small text-muted"><?php echo $post['date']?>
                                        <span class="px-2">-</span>
                                        <a href="#" class="text-muted"><?php echo $post['visits']?> Comments</a>
                                    </small>
                                    <p class="my-2"><?php echo $post['content']?></p>
                                </div>

                                <div class="card-footer p-0 text-center">
                                    <a href="single-post.html" class="btn btn-outline-dark btn-sm">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    <?php  }

                    ?>


                </div>
                <div class="row">


                </div>
                <div class="row">

                </div>
                <button class="btn btn-primary btn-block my-4">Load More Posts</button>
            </div>
        </div>
    </div>

    <div class="instagram-wrapper mt-5">
        <div class="ig-id">
            <a href="javascript:void(0)">Follow @joe_mitchell On Instagram</a>
        </div>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-1.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 23
                </span>
                <span>
                    <i class="ti-comment"></i> 12
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-2.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 23
                </span>
                <span>
                    <i class="ti-comment"></i> 12
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-3.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 23
                </span>
                <span>
                    <i class="ti-comment"></i> 12
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-4.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 23
                </span>
                <span>
                    <i class="ti-comment"></i> 12
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-5.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 23
                </span>
                <span>
                    <i class="ti-comment"></i> 12
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-6.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 23
                </span>
                <span>
                    <i class="ti-comment"></i> 12
                </span>
            </div>
        </a>
    </div>

    <!-- Page Footer -->
    <footer class="page-footer">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-3 text-center text-md-left mb-3 mb-md-0">
                    <img src="assets/imgs/logo.svg" alt="" class="logo">
                </div>
                <div class="col-md-9 text-center text-md-right">
                    <div class="socials">
                        <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-facebook pr-1"></i> 123,345</a>
                        <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-twitter pr-1"></i> 321,534</a>
                        <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-pinterest-alt pr-1"></i> 543,312</a>
                        <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-instagram pr-1"></i> 123,023</a>
                        <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-youtube pr-1"></i> 231,043</a>
                    </div>
                </div>
            </div>
            <p class="border-top mb-0 mt-4 pt-3 small">&copy; <script>
                    document.write(new Date().getFullYear())
                </script>, JoeBlog Created By <a href="https://www.devcrud.com" class="text-muted font-weight-bold" target="_blank">DevCrud.</a> All rights reserved </p>
        </div>
    </footer>
    <!-- End of Page Footer -->

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- JoeBLog js -->
    <script src="assets/js/joeblog.js"></script>

</body>

</html>