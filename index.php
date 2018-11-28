<?php 
require('include/conn.php')
;?>
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

    <header class="bg-primary text-white" style="background-color:none">
      <div class="container text-center" style="background-color:none">
      
        <h1>Welcome to Choco Club</h1>
        <p class="lead">The first rule of Choco Club: You go on and on about it!</p>
      </div>
    </header>
    <div class="container-fluid marquee">

      </ul>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 mb-4">
          <?php include('./include/carousel.php')?> <!--col-lg-6-->
          <?php include('include/featuredarticle.html')?>
        </div>
        
        <div class="col-lg-6 col-md-6 mb-4">
            <h3>Top Products</h3>
            <hr>
            <div class="row">
                <?php include('./include/homecards.php')?>
            </div>
        
        </div>
      </div>
      <div class="row">
          <div class="col-lg-12 col-md-6 mb-4">
              <?php include('./include/randomcards.php')?>
          </div>
      </div>
      
<!-- Button trigger modal -->

<!-- Modal -->
<?php include('include/login.php')?>
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
