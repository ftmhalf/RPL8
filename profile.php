<?php
session_start();
require 'functions.php';

if( !isset($_SESSION["login"]) ) {
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/login.css">
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>PickDress | Home</title>
      </head>
    
      <body>
        <header style= "display:flex;">
        <div class="l">
                <button class="openbtn" onclick="openNav()">
                <svg viewBox="0 0 100 80" width="28" height="28">
                  <rect width="100" height="10"></rect>
                  <rect y="30" width="100" height="10"></rect>
                  <rect y="60" width="100" height="10"></rect>
                </svg>
                </button>
                <a href="home_registered.php" class="logo">

                    <div class=pickdress>
                    <image src = assets/img/pickdress.svg height="50px"></image>
                    </div>
                </a>
            </div>
          <div class="reg">
            <ul>
                <a class="ic" href="fav.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                    </svg>
                </a>
                <a class="ic" href="profile.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                </a>
            </ul>
        </div>
        </header>
    
        <!--Sidebar-->
        <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <ul>
        <li class="no">
          <a href="#" class="collapsible">Categories</a>
          <div class="subitems">
            <ul >
              <li><a href="category1.php">Beach</a></li>
              <li><a href="category2.php">Picnic</a></li>
              <li><a href="category3.php">Work</a></li>
              <li><a href="category4.php">College</a></li>
              <li><a href="category5.php">Daily</a></li>
            </ul>
          </div>            
        </li>
        <li><a href="fav.php">Favorites</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="aboutus.php">About Us</a></li>
      </ul>
    </div>
          
    <div class = "container1 prof">
            <image class="bg" src="assets/img/profile-bg.png" height="500px"></image>
        <div id="content">
            <form action="updateProfile.php"  method="post">
            <div class="col">
                <div class="avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                </div>
                <?php
                        $currentUser = $_SESSION['username'];

                        $gotResults = mysqli_query($conn, "SELECT * FROM users WHERE username = '$currentUser'");

                        if($gotResults){
                            if(mysqli_num_rows($gotResults)>0){
                                while($row = mysqli_fetch_array($gotResults)){
                                    ?>
                <div class="field-group">
                    <span id="fg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                    </span>
                    <div class="wthree-field">
                        <input name="username" id="username" type="text" value="<?php echo $row["username"]; ?>">
                    </div>
                </div>
                <div class="field-group">
                    <span id="fg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                        </svg>
                    </span>
                    <div class="wthree-field">
                            <input name="user_email" id="user_email" type="email" value="<?php echo $row["user_email"]; ?>">
                    </div>
                </div>
<?php }}} ?>
            
                <div class="wthree-field">
                    <button type="submit" name= "update" class="btnn field-group" value="Update" >Edit my profile</button>
                </div>
                    <div class="wthree-field">
                    <button  class="btnn logout" formaction="logout.php">Log Out</button>
                </div>
                </div>
            </form>
            </div> 
        </div>
        <script>
      function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.getElementById("category").style.marginLeft = "250px";
        document.getElementById("about").style.marginLeft = "250px";
      }
                
      function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.getElementById("category").style.marginLeft= "0";
        document.getElementById("about").style.marginLeft= "0";
      }
    </script>

    
    <script>
      var coll = document.getElementsByClassName("collapsible");
      var i;
      
      for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var content = this.nextElementSibling;
          if (content.style.maxHeight){
            content.style.maxHeight = null;
          } else {
            content.style.maxHeight = content.scrollHeight + "px";
          } 
        });
      }
      </script>

    </body>
</html>