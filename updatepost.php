<?php


session_start();
require_once("classes.php");
$user =  unserialize($_SESSION["user"]);
$post_id = $_GET["post_id"];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css"
    />
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- fonts style -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap"
      rel="stylesheet"
    />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
  </head>

  <body>
    <header>
      <!-- place navbar here -->
    </header>
    <main>
      <section class="trip_section layout_padding" id="bookTrip">
        <div class="container">
          <div class="heading_container">
            <h1>
              <b style="font-size: 300px"> TALK </b>

              <br />
              <br />
              <br />
            </h1>
            <h2>edit your post</h2>
          </div>
        </div>
        <div class="container">
          <div class="box container-bg">
            <div class="">
              <img
                src="images/edit.png"
                style="width: 50%; display: block; margin: 0 auto"
                alt=""
              />
            </div>
            <div class="form_container">
              <form method="POST" action="manage_edit_posts.php">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <img src="images/location.png" alt="" />
                      </div>
                    </div>
                    <input
                      type="text"
                      class="form-control"
                      id="inputDestination"
                      placeholder="update title "
                      name="newtitle"
                    />
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <img src="images/location.png" alt="" />
                      </div>
                    </div>
                    <input
                      type="text"
                      class="form-control"
                      id="inputLocation"
                      placeholder="update body"
                      name="newbody"
                    />
                    <input type="hidden" name="post_id" value="<?=$_GET["post_id"]?>">
                  </div>
                </div>
          
                <p>
                  <center>
                    are you new user ? <a href="register.php">Register</a> now
                  </center>
                </p>
                <div class="btn-box">
                  <button type="submit" class="">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
     
    </main>
    <footer>
      <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>







<?php
// var_dump($_POST);
if (empty($id)) 
{
    header("location:userHome.php?erorr=empty_field");
}
else{
    $rslt = $user->updatepost($post_id,$newbody,$newtitle);
    header("location:userHome.php?done");
} 

?>
