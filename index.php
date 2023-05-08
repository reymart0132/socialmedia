<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/socialmedia/resource/php/class/core/init.php';
isLogin();
$viewtable = new viewtable();
$user = new user();

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"  href="resource/css/styles.css">

    <title><?php echo $user->data()->name; ?> Profile</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-primary bg-light">
      <img src="resource/img/header.png" height="50" class="d-inline-block align-top"
        alt="mdb logo">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto align-middle">
        <a class="nav-link active ml-5 align-middle" href="#">  <?php profilePic();  ?>  ,</b> </a>
        <a class="nav-link active ml-5 align-middle" href="#"> <?php echo $user->data()->name; ?>  , </a>
        <a class="nav-link" href="logout.php"><b>Logout</b></a>
      </div>
    </div>
  </nav>
      <div class="container-fluid border border-light">
        <div class="row">
          <div class="col-md-3 border border-light">
            <div class="card" style="width: auto;">
              <?php profilePic3(); ?>
              <div class="card-body">
                <h5 class="card-title text-center"><?php echo $user->data()->name; ?></h5>
                <p class="card-text text-center text-muted"><b>@<?php echo $user->data()->email; ?></b></p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item text-center text-muted"><b><?php echo $user->data()->colleges; ?></b></li>
                <li class="list-group-item text-center text-muted">Join Date : <b><?php echo $user->data()->joined; ?></b></li>
                <li class="list-group-item text-center text-light bg-primary"><a href="updateprofile.php" class="text-light">Update Profile</a></li>
                <li class="list-group-item text-center text-light bg-primary"><a href="changepassword.php" class="text-light">Change Password</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-5 border border-light">
            <div class="card mb-5">
              <div class="card-header">
                <h6 class="text-primary">What is on your mind?</h6>
              </div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <form action ='insert.php' method="GET">
                    <input type="text" name="status" class="col-12" value="">
                  <footer class=""><input class="btn btn-primary mt-1 ml-auto" type="submit" value="Post"/></cite></small>.</footer>
                </form>
                </blockquote>
              </div>
            </div>

            <?php $viewtable->viewStatus();  ?>
          </div>
          <div class="col-md-4 border border-light">
            <div class="row">
              <div class="col-12 chatbox">
                <h6 class="text-center my-4">Chat Box</h6>
                  <div class="row">
                    <div class="col-12">
                      <div class="card text-white bg-secondary mb-3">
                        <div class="card-header">Reymart Bolasoc - <small>4/17/23 04:42PM</small></div>
                        <div class="card-body">
                          <p class="card-text">Test Chat here</p>
                        </div>
                      </div>
                      <div class="card text-white bg-secondary mb-3">
                        <div class="card-header">Bong Revilla Jr - <small>4/17/23 04:35PM</small></div>
                        <div class="card-body">
                          <p class="card-text">Team Budotz 2023!</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>

              <div class="col-12">
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <form action ='insert.php' method="GET">
                      <input type="text" name="status" class="col-12" value="">
                    <footer class=""><input class="btn btn-primary mt-1 ml-auto" type="submit" value="Send Message"/></cite></small>.</footer>
                  </form>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>
