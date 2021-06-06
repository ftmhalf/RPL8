 <?php
session_start();
if( !isset($_SESSION["login"]) ) {
   header("Location: login.php");
   exit;
}
include("../functions.php");

include "sidenav.php";
include "topheader.php";
if(isset($_POST['btn_save']))
{
$username=$_POST['username'];
$user_email=$_POST['user_email'];
$user_password=$_POST['user_password'];


mysqli_query($conn,"insert into users(username,user_email,user_password) values ('$username','$user_email','$user_password')") 
			or die ("Query 1 is inncorrect........");
header("location: manageuser.php"); 
mysqli_close($conn);
}


?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Users</h4>
                  <p class="card-category">Complete User profile</p>
                </div>
                <div class="card-body">
                  <form action="" method="post" name="form" enctype="multipart/form-data">
                    <div class="row">
                      
                      <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">First Name</label>
                          <input type="text" id="username" name="username" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" name="user_email" id="email" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" id="password" name="user_password" class="form-control" required>
                        </div>
                      </div>
                    </div>
                  
                      
                    </div>
                    
                    <button type="submit" name="btn_save" id="btn_save" class="btn btn-primary pull-right">Update User</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>
      <?php
?>
