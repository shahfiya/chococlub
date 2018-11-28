<?php
require('include/conn.php');?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Choco Club</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

  </head>

  <body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Choco Club</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="store.php">Store</a>
            </li>
            <li class="nav-item">
            <?php 
                if(isset($_SESSION['loggedin'])){  echo '<a class="nav-link js-scroll-trigger" href="profile.php" >My Account</a>
                  </li><li><a class="nav-link js-scroll-trigger" href="include/logout.php">Logout</a>';}
                else{
                  echo '<a class="nav-link js-scroll-trigger" href="profile.php" data-toggle="modal" data-target="#exampleModal">Login</a>
                ';}?>
                </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Checkout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<div class="container-fluid store">

        <div class="row">
            <div class="col-lg-2">
                <div class="my-4">
                    <b class="my-4">Search</b>
                    <form>
                            <div class="input-group input-group-sm mb-3">
                             <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                             </div>
                            <button class="btn btn-primary btn-sm"> Search</button>     
                    </form>
                </div>
                        <b class="my-4">Categories</b>
                        <div class="list-group">
                          <a href="#" class="list-group-item">Category 1</a>
                          <a href="#" class="list-group-item">Category 2</a>
                          <a href="#" class="list-group-item">Category 3</a>
                        </div>

                </div>

                <div class="col-lg-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Showing: <?php if(isset($_GET['cat'])){echo($_GET['cat']);}else{echo' All';}?></li>
                    </ol>
                </nav>
                        <?php include('listitems.php')?> 
                </div>

                <div class="col-lg-2">
                    <div class="row ">
                        Social Media
                      </div>
                      <hr>
                    <div class="row">
                        Ads
                    </div>
                </div>
        </div>
</div>
<?php include('include/login.php')?>
        <!-- Bootstrap core JavaScript -->
        <script
                  src="https://code.jquery.com/jquery-3.3.1.min.js"
                  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                  crossorigin="anonymous"></script>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    
        <!-- Custom JavaScript for this theme -->
        <script src="js/scrolling-nav.js"></script>
    
      </body>
    
    </html>