 <?php
session_start();
if( !isset($_SESSION["login"]) ) {
   header("Location: login.php");
   exit;
}
include("../functions.php");
error_reporting(0);
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$dress_id=$_GET['dress_id'];
///////picture delete/////////
$result=mysqli_query($conn,"select dress_image from dress where dress_id='$dress_id'")
or die("query is incorrect...");

list($picture)=mysqli_fetch_array($result);
$path="../dress_images/$picture";

if(file_exists($path)==true)
{
  unlink($path);
}
else{}
/*this is delet query*/
mysqli_query($conn,"delete from dress where dress_id='$dress_id'")or die("query is incorrect...");
}

///pagination

$page=$_GET['page'];

if($page=="" || $page=="1")
{
$page1=0;	
}
else
{
$page1=($page*10)-10;	
} 
include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
        
        
         <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"> dress List</h4>
                
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter " id="page1">
                    <thead class=" text-primary">
                      <tr><th>Image</th><th>Name</th><th>Description</th><th>Keywords</th><th>
	<a class=" btn btn-primary" href="adddress.php">Add New</a></th></tr></thead>
                    <tbody>
                      <?php 

                        $result=mysqli_query($conn,"select dress_id,dress_image, dress_title, dress_desc, dress_keywords from dress  where  dress_cat=1 or dress_cat=2 or dress_cat=3 or dress_cat=4 or dress_cat=5 or dress_cat=6 Limit $page1,12")or die ("query 1 incorrect.....");

                        while(list($dress_id,$image,$dress_title,$dress_desc,$dress_keywords)=mysqli_fetch_array($result))
                        {
                        echo "<tr><td><img src='../dress_images/$image' style='width:50px; height:50px; border:groove #000'></td><td>$dress_title</td><td>$dress_desc</td><td>$dress_keywords</td>
                        <td>
                        <a href='editdress.php?dress_id=$dress_id' type='button' rel='tooltip' title='' class='btn btn-info btn-link btn-sm' data-original-title='Edit Dress'>
                        <i class='material-icons'>edit</i>
                        <div class='ripple-container'></div></a>
                        <a href='dresslist.php?dress_id=$dress_id&action=delete' type='button' rel='tooltip' title='' class='btn btn-danger btn-link btn-sm' data-original-title='Delete Dress'>
                        <i class='material-icons'>close</i>
                        </td></tr>";
                        }

                        ?>
                    </tbody>
                  </table>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                 <?php 
//counting paging

                $paging=mysqli_query($conn,"select dress_id,dress_image, dress_title from dress");
                $count=mysqli_num_rows($paging);

                $a=$count/10;
                $a=ceil($a);
                
                for($b=1; $b<=$a;$b++)
                {
                ?> 
                <li class="page-item"><a class="page-link" href="dresslist.php?page=<?php echo $b;?>"><?php echo $b." ";?></a></li>
                <?php	
}
?>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
            
           

          </div>
          
          
        </div>
      </div>
