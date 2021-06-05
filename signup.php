<?php 
require 'functions.php';

if( isset($_POST["register"]) ) {

    if( signup($_POST) > 0 ) {
        echo "<script> alert('New user successfully added!') </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel = "stylesheet" href = "assets/css/login.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>

    <body>
        <div class = "container1">
            <image class="bg" src="assets/img/signup-bg.png" height="600px"></image>        
            <div id="content">
                <form action=""  method="post">
                <a href="index.php" class="logo">
                            <div class=pickdress>
                                <image src = assets/img/pickdress.svg height="50px"></image>
                            </div>
                        </a>
            <form action=""  method="post">
                <div class="avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                </div>
                <div class="field-group">
                    <span id="fg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                    </span>
                    <div class="wthree-field">
                            <input name="username" id="username" type="text" value="" placeholder="Username" required="">
                    </div>
                </div>
                <div class="field-group">
                    <span id="fg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                        </svg>
                    </span>
                    <div class="wthree-field">
                            <input name="user_email" id="user_email" type="email" value="" placeholder="Email address" required="">
                    </div>
                </div>
                <div class="field-group">
                    <span id="fg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                        </svg>
                    </span>
                    <div class="wthree-field">
                            <input name="user_password" id="user_password" type="Password" placeholder="Password">
                    </div>
                </div>
                <div class="field-group">
                    <span id="fg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                        </svg>
                    </span>
                    <div class="wthree-field">
                            <input name="user_password2" id="user_password2" type="Password" placeholder="Re-enter password">
                    </div>
                </div>
                <div class="wthree-field">
                    <button type="submit" class="btnn field-group" name="register" >Sign Up</button>
                </div>
                <div class ="signup">
                    Already have an account ?</br>
                    <a href = "login.php">Log in</a>
                </div>
            </form>
        </div>

    </body>
</html>
