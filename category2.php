<?php

 require 'functions.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/main.css">
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Category</title>
      </head>
    
      <body>
        <header>
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
            <div class="search-icon">
            <form > 
           <input type="text" placeholder="Search.." name="search">
              <button type="submit" value="Search">              
                  <i class="fa fa-search"></i>
              </button>
            </form>
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
              <li><a href="category6.php">Party</a></li>
            </ul>
          </div>            
        </li>
        <li><a href="fav.php">Favorites</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="aboutus.php">About Us</a></li>
      </ul>
    </div>
                
    <div id="content">
        <section id="col">
            <p>Beach</p>
            <div class="container1">
            <a href="#" onclick="openp()" >
            <?php
              $sql = "select dress_id,dress_image, dress_title, dress_desc, dress_keywords from dress  where  dress_cat=3";
              $result = $conn->query($sql);
                while(list($dress_id,$image,$dress_title,$dress_desc,$dress_keywords)=mysqli_fetch_array($result))
                {

            ?>
                  <div class ="cardd">
                   
                   <img class ="modal_image" src="dress_images/<?php echo $image; ?>" width= "300px" alt="<?php echo $dress_desc; ?>">
                   
                    
                   
                   <a href="faves.php?dress_id=<?php echo $dress_id; ?>" class="del">
                   <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="pink" class="bi bi-heart-fill" viewBox="0 0 18 18">
                               <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                           
                   <button type="submit" name= "favorite"value="<?php echo $dress_id; ?>"></button> 
                           </svg>
                           </a>
                     </div>
       </a> 
<!--Modal-->
            <div class="modall" id="myModall">
              <div class="modall-content">
              <img id="img01">

                <div class = "h">
                  <div class = "">
                  
                  
                <a href="javascript:void(0)" id="close" onclick="closem()">×</a>  
                <h2>Outfit Description</h2> 
                </div>
              <div class="desc">
              <div id="caption"></div>          
</div> 
                </div>
              </div>
            </div><?php } ?> 
            </div>
                   
        </section>
        </div>

        <script>
            function openNav() {
              document.getElementById("mySidebar").style.width = "240px";
              document.getElementById("content").style.marginLeft = "240px";
            }

            
            function closeNav() {
              document.getElementById("mySidebar").style.width = "0";
              document.getElementById("content").style.marginLeft= "0";
              
            }
            function openpop() {
              document.getElementById("popc").style.visibility = "visible";
              document.getElementById("popc").style.opacity = "1";

            }
            function closepopc() {
              document.getElementById("popc").style.opacity = "0";

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

                    var modal = document.getElementById("myModall");
                    var img = document.getElementsByClassName('modal_image');
                    for(var i=0; i<img.length; i++){
                      var modalImg = document.getElementById("img01");
                      var captionText = document.getElementById("caption");
                      img[i].addEventListener('click',function(){
                        modal.style.display = "block";
                        modalImg.src = this.src;
                        captionText.innerHTML = this.alt;
                    })
                    }
                      var span = document.getElementById("close");

                    function openp() {
                      modal.style.display="block";
                    }

                    function closem() {
                      modal.style.display="none";
                    }
                    window.onclick = function(event) {
                      if(event.target == modal) {
                        modal.style.display = "none";
                      }
                    }
        </script>
    </body> 
</html>