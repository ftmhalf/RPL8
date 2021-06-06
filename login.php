<?php
session_start();
require 'functions.php';

if( isset($_POST["login"]) ) {

    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $user_password = mysqli_real_escape_string($conn, $_POST["user_password"]);

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    if( mysqli_num_rows($result)===1) {

        $row = mysqli_fetch_assoc($result);
        if(password_verify($user_password, $row["user_password"]) ) {
            $_SESSION["login"] = true;
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
            header("Location: home_registered.php");
            exit;
        }
    }
    else{
        $username = mysqli_real_escape_string($conn,$_POST["username"]);
        $user_password =md5($_POST["user_password"]) ;
        $sql = "SELECT * FROM admin WHERE admin_name = '$username' AND admin_password = '$user_password'";
        $run_query = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($run_query);

    //if user record is available in database then $count will be equal to 1
    if($count === 1){
        $row = mysqli_fetch_array($run_query);
        $_SESSION["user_id"] = $row["admin_id"];
        $_SESSION["username"] = $row["admin_name"];
        //we have created a cookie in login_form.php page so if that cookie is available means user is not login


            //if user is login from page we will send login_success
            echo "login_success";

            echo "<script> location.href='admin/index.php'; </script>";
            exit;

        }else{
            echo "<span style='color:red;'>Please register before login..!</span>";
            echo "<script> location.href='login.php'; </script>";
            exit();
        }

    $error = true;
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
            <image class="bg" src="assets/img/login-bg.png" height="600px"></image>
            <div id="content">
                <form action=""  method="post">
                <div class="col">
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
                        <input name="username" id="text1" type="text" value="" placeholder="Username" required="">
                    </div>
                </div>
                <div class="field-group">
                    <span id="fg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                        </svg>
                    </span>
                    <div class="wthree-field">
                        <input name="user_password" id="myInput" type="Password" placeholder="Password" required="">
                    </div>    
                </div>
                    <div class="wthree-field">
                    <button type="submit" class="btnn field-group" name="login">Log in</button>
                </div>
                <div class ="signup">
                    Don't have an account ?</br>
                    <a href = "signup.php">Sign Up</a>
                </div>
            </form>
        </div>

        <?php if( isset($error) ) : ?>
            <script> alert('Username or password wrong!') </script>;
        <?php endif; ?>
         
    </body>
</html>
