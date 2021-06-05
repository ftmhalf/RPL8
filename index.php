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
    <title>PickDress | Home</title>
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
                <a href="index.php" class="logo">
                    <div class=pickdress>
                        <image src = assets/img/pickdress.svg height="50px"></image>
                    </div>
                </a>
            </div>
          <div class="search-icon">
            <form > 
           <input type="text" placeholder="Search.." name="search">
              <button type="submit">              
                  <i class="fa fa-search"></i>
              </button>
            </form>
          </div>
          <div class="log">
              <a class="login" href="login.php">Log in</a>
              <a class="signup" href="signup.php">Sign Up</a>
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

    <!--Section main-->
    <section class="pt-8 py-lg-0" id="main">
      <div class="container-xxl">
        <div class="row align-items-center min-vh-lg-100">
          <div class="col-lg order-lg-1 text-center">

<!--Slideshow-->
            <div class="slideshow-container">
                  
              <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="dress_images\1621938319_Group 14.svg" style="width:100%">
              </div>
                  
              <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="dress_images\1621940951_Group 16.svg" style="width:100%">
              </div>
                  
              <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="dress_images\1622703431_Group 17.svg" style="width:100%">
              </div>
                  
            </div>
            <br>
                  
            <div style="text-align:center">
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
            </div>
          </div>
          <div class="col-lg mt-5 mt-lg-0">
            <h1>"Style is something each of us already has. All we need to do is find it."
                <br>
                -Diane von Furstenberg
            </h1>
          </div>
        </div>
      </div><!-- end of .container-->
    </section>
      
    <!-- <div class="row align-items-center justify-content-xl-between py-5 border-klean">-->      
     
    <section  id="category">
    <p>Categories</p>
      <div class="container">
        <div class="col-auto col-md-4 col-lg-auto my-3 text-xl-start"><button class="button" ><a href="category1.php"><img src= "assets/img/Group 4.svg"></a></button></div>
        <div class="col-auto col-md-4 col-lg-auto my-3 text-xl-start"><button class="button"><a href="category2.php"><img src= "assets/img/Group 5.svg"></a></button></div>
        <div class="col-auto col-md-4 col-lg-auto my-3 text-xl-start"><button class="button"><a href="category3.php"><img src= "assets/img/Group 6.svg"></a></button></div>
        <div class="col-auto col-md-4 col-lg-auto my-3 text-xl-start"><button class="button"><a href="category4.php"><img src= "assets/img/Group 7.svg"></a></button></div>
        
      </div><!-- end of .container-->
      <div class="container">
      <div class="col-auto col-md-4 col-lg-auto my-3 text-xl-start"><button class="button"><a href="category5.php"><img src= "assets/img/Group 8.svg"></a></button></div>
      <div class="col-auto col-md-4 col-lg-auto my-3 text-xl-start"><button class="button"><a href="category6.php"><img src= "assets/img/Group 9.svg"></a></button></div>
    </div>
    </section>


    <!--Section About Us-->
    
    <section id="how">
      <p>How it Works</p>
      <div class="container2">
      <div class="box">
        <img src="assets/img/step01.png">
        <p>Pick a category you are looking for</p>
      </div>
  
      <div class="box">
        <img src="assets/img/step02.png">
        <p>PickDress will give you amazing outfit ideas</p>
      </div>
      
      <div class="box">
        <img src="assets/img/step03.png">
        <p>You can save your favorite outfit by logging in!</p>
      </div>      
      </div>
    </section>


    <!--Section About Us-->
    <section id="help">
      <h1>Help Us Improve</h1>
      <p>Take a brief survey about your visit</p>
      <a href="https://forms.gle/QWhQ61ZKkd98fLTYA"> Begin Survey</a>
    </section>
   
   
<!--Js slider-->
<script>
      var slideIndex = 0;
      showSlides();
      
      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 3000); // Change image every 2 seconds
      }
    </script>

    <!--Js sidebar-->
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
