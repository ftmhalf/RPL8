  <?php
session_start();
if( !isset($_SESSION["login"]) ) {
   header("Location: login.php");
   exit;
}
include("../functions.php");


if(isset($_POST['btn_save']))
{
$dress_title=$_POST['dress_title'];
$dress_desc=$_POST['dress_desc'];
$dress_cat=$_POST['dress_cat'];
$dress_keywords=$_POST['dress_keywords'];

//picture coding
$picture_name=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['type'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_size=$_FILES['picture']['size'];

if($picture_type=="image/svg+xml")
{
	if($picture_size<=50000000000)
	
		$pic_name=time()."_".$picture_name;
		move_uploaded_file($picture_tmp_name,"../dress_images/".$pic_name);
		
mysqli_query($conn,"insert into dress (dress_cat, dress_title, dress_desc, dress_image, dress_keywords) values ('$dress_cat','$dress_title','$dress_desc','$pic_name','$dress_keywords')") or die ("query incorrect");

 header("location: sumit_form.php?success=1");
}

mysqli_close($conn);
}
include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <form action="" method="post" type="form" name="form" enctype="multipart/form-data">
          <div class="row">
          
                
         <div class="col-md-7">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Add dress</h5>
              </div>
              <div class="card-body">
                
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>dress Title</label>
                        <input type="text" id="dress_title" required name="dress_title" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="">
                        <label for="">Add Image</label>
                        <input type="file" name="picture" required class="btn btn-fill btn-success" id="picture" >
                      </div>
                    </div>
                     <div class="col-md-12">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea rows="4" cols="80" id="dress_desc" required name="dress_desc" class="form-control"></textarea>
                      </div>
                    </div>
                  </div>
                 
                  
                
              </div>
              
            </div>
          </div>
          <div class="col-md-5">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Categories</h5>
              </div>
              <div class="card-body">
                
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>dress Category</label>
                        <input type="number" id="dress_cat" name="dress_cat" required="[1-6]" class="form-control">
                      </div>
                    </div>
                    
                     
                  
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>dress Keywords</label>
                        <input type="text" id="dress_keywords" name="dress_keywords" required class="form-control" >
                      </div>
                    </div>
                  </div>
                
              </div>
              <div class="card-footer">
                  <button type="submit" id="btn_save" name="btn_save" required class="btn btn-fill btn-primary">Update dress</button>
              </div>
            </div>
          </div>
          
        </div>
         </form>
          
        </div>
      </div>
      <?php
?>
