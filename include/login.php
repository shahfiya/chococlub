<?php
// require('conn.php');
if(isset($_POST['login'])){

  $email = $_POST['email'];
  $pass = $_POST['pass'];
  // $pass = md5($pass);
  $query= "SELECT * FROM user WHERE email = '$email' AND pass = '$pass'";
  $result = mysqli_query($db,$query);
 
  if (mysqli_num_rows($result) == 1){
    // header('location:profile.php');
    $_SESSION['loggedin'] = TRUE;
    // echo'<script>alert("ok")</script>';
    echo '<script>location.replace("profile.php");</script>';
    while( $userinfo = mysqli_fetch_assoc($result)){
      
      foreach (array_keys($userinfo) as $key){
        $_SESSION[$key] = $userinfo[$key];
      }
    }
  }

}
?>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row">

              <div class="col-lg-6 input-group input-group-sm mb-3" style="border-right:1px solid ">
                    <form action="" method="POST">
                        Username:
                        <div class="input-group input-group-sm mb-3" style="display:">
                                <input name="email" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            Password:
                            <div class="input-group input-group-sm mb-3">
                                <input name="pass" type="password" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            <button name="login" type="submit" class="btn btn-primary" >Login</button>
                            <a href="#">Trouble Loggin in?</a>
                          </div>
                          <div class="col-lg-6 text-center">
                            Or<br>
                            <button type="button" class="btn btn-primary">Sign Up</button>
                          </div>
                        </div>
                        <div class="modal-footer">
          </form>
      </div>
    </div>
  </div>
</div>
</div>



