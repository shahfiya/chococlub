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

<div class= "container-fluid store">
    <div class="row">
        <div class = "col-lg-3">
            <div class="list-group">
                <a  class="list-group-item active"><b>General</b></a>
                <a  class="list-group-item "><?php echo ($_SESSION['f_name']).' '.($_SESSION['l_name']);?></a>
                <a class="list-group-item">Email: <?php echo ($_SESSION['email']);?></a>
            </div>

            <div class="list-group" style="margin-top:10px">
                <a  class="list-group-item active"><b>Contact and Delivery</b></a>
                <a  class="list-group-item "><b>Mobile Phone:</b> <?php echo ($_SESSION['contact_mob']);?></a>
                <a class="list-group-item"><b>Other Phones:</b> <?php echo ($_SESSION['contact_other']);?></a>
                <a class="list-group-item"><b>Address:</b><br> <?php echo ($_SESSION['address_all']);?></a>
            </div>
        </div>
        <div class = "col-lg-7">
                <?php 
                    if($_SESSION['role']==0){
                        echo '<h4>Administrative Tasks</h4> <hr>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
    <a class="nav-link active" id="sales-tab" data-toggle="tab" href="#sales" role="tab" aria-controls="sales" aria-selected="true">Sales</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="inventory-tab" data-toggle="tab" href="#inventory" role="tab" aria-controls="inventory" aria-selected="false">Inventory</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="users-tab" data-toggle="tab" href="#users" role="tab" aria-controls="users" aria-selected="false">Users</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="sales" role="tabpanel" aria-labelledby="sales-tab"><nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item active" aria-current="page">Sales</li>
</ol>
</nav>';
include('include/sales.php');
echo'</div>

<div class="tab-pane fade" id="inventory" role="tabpanel" aria-labelledby="inventory-tab">
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Inventory Management</li>
        </ol>
    </nav>';
include('include/inventory.php');
echo '</div>

<div class="tab-pane fade" id="users" role="tabpanel" aria-labelledby="sales-tab">
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">User Management</li>
        </ol>
    </nav>';
include('include/user.php');
echo '</div>
</div>';
    }
    else{
        echo '<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Purchase History</li>
        </ol>
    </nav>';
    include("include/sales.php");
    }?>

           
        </div>
    </div>
</div>


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