<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>
        Talk
    </title>
    <?php
    session_start();
    require_once("classes.php");
    $user = unserialize($_SESSION["user"]);
    $name = $user->name;
    $posts = $user->showposts();
    $comments = $user->show_all_comments();
    // var_dump($posts);
    // array(1) { [0]=> array(6) { ["id"]=> string(1) "2" ["comment"]=> string(7) "ddddsss" ["post_id"]=> string(1) "6" ["user_id"]=> string(1) "1" ["ceated_at"]=> string(19) "2022-12-31 08:57:19" ["name"]=> string(5) "ahmed" } }

    ?>

    <!-- range selctor slider style -->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css" />
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                    <a class="navbar-brand" href="#">
                        <span>
                            Talk
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">

                                <li class="nav-item">
                                    <a class="nav-link" href="profile.php">
                                        profile
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="userHome.php">
                                        Home
                                    </a>
                                </li>

                            </ul>
                            <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                            </form>
                        </div>
                        <div class="quote_btn-container ml-0 ml-lg-4 d-flex justify-content-center">
                            <a href="logout.php">
                                logout
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class=" slider_section ">
            <div class="container">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="slider_container">
                                <div class="box">
                                    <div class="detail-box">
                                        <h1>
                                            Talk
                                        </h1>
                                        <h2>
                                            A
                                            Human
                                            Explostion
                                        </h2>
                                    </div>
                                    <div class="img-box">
                                        <div class="play_btn">
                                            <a href="">
                                                <img src="images/play.png" alt="">
                                            </a>
                                        </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="slider_container">
                                <div class="box">
                                    <div class="detail-box">
                                        <h1>
                                            TripBiz
                                        </h1>
                                        <h2>
                                            A
                                            Human
                                            Explostion
                                        </h2>
                                    </div>
                                    <div class="img-box">
                                        <div class="play_btn">
                                            <a href="">
                                                <img src="images/play.png" alt="">
                                            </a>
                                        </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="slider_container">
                                <div class="box">
                                    <div class="detail-box">
                                        <h1>
                                            TripBiz
                                        </h1>
                                        <h2>
                                            A
                                            Human
                                            Explostion
                                        </h2>
                                    </div>
                                    <div class="img-box">
                                        <div class="play_btn">
                                            <a href="">
                                                <img src="images/play.png" alt="">
                                            </a>
                                        </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom_carousel-control">
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- end slider section -->
    </div>

    <!-- trip section -->


    <!-- end trip section -->


    <!-- package section -->



    <!-- end package section -->

    <!-- service section -->


    <!-- end service section -->

    <!-- blog section -->


    <div>
        <div class="container" style="margin: 100px auto;">
            <div class="heading_container">
                <h2>
                    Welcome <b><?php echo $name ?> </b>
                </h2>
                <p>
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                </p>
            </div>
        </div>

        <?php
        foreach ($posts as $key => $post) {

        ?>
            <center>

                <div style="background-color: white; width: 600px; border-radius:20px; margin: 100px auto; padding: 20px; ">
                    <div style="display: flex; justify-content: space-between;">
                        <h3> <?php echo $post["name"]  ?> </h3>
                        <p> <?php echo $post["creaded_at"]  ?> </p>
                        <a href="deletepost.php?post_id=<?= $post["id"] ?>"> Delete </a>
                        <a href="updatepost.php?post_id=<?= $post["id"] ?>"> update </a>
                    </div>
                    <img width="70%" src="<?= $post['image'] ?>" alt="">
                    <h1> <?php echo $post["title"]  ?> </h1>
                    <p> <?php echo $post["body"]  ?> </p>
                    <form action="addcomment.php" method="get">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <img src="images/location.png" alt="" />
                                    </div>
                                </div>
                                <input type="hidden" name="post_id" value="<?= $post["id"] ?>">
                                <input type="text" name="comment" class="form-control" id="inputLocation" placeholder="Enter Your comment" name="text" />
                                <input type="submit" value="add comment">
                            </div>
                        </div>
                    </form>
                    <p> comments </p>
                    <?php
                        foreach ($comments as $key => $comment) {
                            if ($post["id"]==$comment["post_id"]) {
                            ?>
                        <div style="background-color: white; display:flex; justify-content:space-between">
                            <p><?= $comment["name"] ?> </p>
                            <p><?= $comment["comment"] ?> </p>
                            <p><?= $comment["ceated_at"] ?> </p>
                        </div>
                        
                        <?php
                    }
                    }

                    ?>


            </center>

    </div>


<?php
        }
?>

</div>


<!-- end client section -->

<!-- info section -->

<section class="info_section">
    <div class="container">
        <div class="heading_container">
            <h2>
                Contact Us
            </h2>
            <p>
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
            </p>
        </div>
    </div>
    <div class="info_container">
        <div class="container">
            <div class="social_container">
                <div class="info_social">
                    <div>
                        <a href="">
                            <img src="images/facebook-logo-button.png" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="images/twitter-logo-button.png" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="images/linkedin.png" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="images/instagram.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <h5>
                        Subscribe Newsletter
                    </h5>
                    <p>
                        ncididunt ut labore et dolore magna
                        minim veniam, quis nostrud
                    </p>
                    <form action="">
                        <input type="text" placeholder="Enter your email">
                        <div class="">
                            <button>
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
                <div class=" col-lg-4">
                    <div class="info_nav_link">
                        <h5>
                            Useful link
                        </h5>
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#bookTrip">
                                    Book trip
                                </a>
                            </li>
                            <li>
                                <a href="#package">
                                    Packages
                                </a>
                            </li>
                            <li>
                                <a href="#service">
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="#blog">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5>
                        Address
                    </h5>
                    <div class="info_link-box">
                        <a href="">
                            <img src="images/location2.png" alt="">
                            <span> Passages of Lorem Ipsum available</span>
                        </a>
                        <a href="">
                            <img src="images/call.png" alt="">
                            <span>Call : +01234567890</span>
                        </a>
                        <a href="">
                            <img src="images/mail.png" alt="">
                            <span> demo@gmail.com</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- footer section -->
            <section class=" footer_section">
                <p>
                    Copyright &copy; 2021 All Rights Reserved By
                    <a href="https://html.design/">Free
                        Html Templates</a><br>
                <p>
                    Distributed By
                    <a href="https://themewagon.com">Themewagon</a>
                </p>
                </p>
            </section>
            <!-- footer section -->
        </div>
    </div>
</section>

<!-- end info section -->



<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

<!-- range selector slider script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>

<script>
    $(".js-range-slider").ionRangeSlider({
        skin: "round",
        type: "double",
        min: 200,
        max: 10000,
        from: 200,
        to: 500,
        grid: true
    });
</script>

</body>

</html>