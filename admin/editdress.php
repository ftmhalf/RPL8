
    <?php
session_start();
if( !isset($_SESSION["login"]) ) {
   header("Location: login.php");
   exit;
}
include("../functions.php");
$dress_id=$_REQUEST['dress_id'];

$result=mysqli_query($conn,"select dress_id, dress_cat, dress_title, dress_desc, dress_keywords from dress where dress_id='$dress_id'")or die ("query 1 incorrect.......");

list($dress_id, $dress_cat, $dress_title, $dress_desc, $dress_keywords)=mysqli_fetch_array($result);

if(isset($_POST['btn_save'])) 
{

$dress_cat=$_POST['dress_cat'];
$dress_title=$_POST['dress_title'];
$dress_desc=$_POST['dress_desc'];
$dress_keywords=$_POST['dress_keywords'];

mysqli_query($conn,"update dress set dress_cat='$dress_cat', dress_title='$dress_title', dress_desc='$dress_desc', dress_keywords='$dress_keywords' where dress_id='$dress_id'")or die("Query 2 is inncorrect..........");

header("location: dresslist.php");
mysqli_close($conn);
}
include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
        <div class="col-md-5 mx-auto">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Edit Dress</h5>
              </div>
              <form action="editdress.php" name="form" method="post" enctype="multipart/form-data">
              <div class="card-body">
                
                  <input type="hidden" name="dress_id" id="dress_id" value="<?php echo $dress_id;?>" />
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>Category</label>
                        <input type="text" id="dress_cat" name="dress_cat"  class="form-control" value="<?php echo $dress_cat; ?>" >
                      </div>
                    </div>
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" id="dress_title" name="dress_title"  class="form-control" value="<?php echo $dress_title; ?>" >
                      </div>
                    </div>
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <input type="text"  id="dress_desc" name="dress_desc" class="form-control" value="<?php echo $dress_desc; ?>">
                      </div>
                    </div>
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label >Keywords</label>
                        <input type="text" name="dress_keywords" id="dress_keywords" class="form-control" value="<?php echo $dress_keywords; ?>">
                      </div>
                    </div>
              </div>
              <div class="card-footer">
                <button type="submit" id="btn_save" name="btn_save" class="btn btn-fill btn-primary">Update</button>
              </div>
              </form>    
            </div>
          </div>
         
          
        </div>
      </div>
