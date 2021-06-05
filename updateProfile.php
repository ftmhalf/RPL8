<?php
session_start();

   require 'functions.php';
if(isset($_POST['update'])){

 
         $userNewName  =    $_POST['username'];
         $userNewEmail =    $_POST['user_email'];

        if(!empty($userNewName)){
            $loggedInUser = $_SESSION['username'];
                        
            $sql = "UPDATE users SET username = '$userNewName' WHERE username = '$loggedInUser'";

            $results = mysqli_query($conn,$sql);

                header('Location: home_registered.php');
                exit;
        }else{
            header('Location: home_registered.php');
            exit;
        }
    
}

?>