<?php
session_start();
require 'functions.php';
if(!isset($_SESSION['user_id'])){
    
header('location:login.php');
}else{
 $p_id = $_GET['p_id']; 
 $c_id = $_GET['c_id'];
 

    $delWishlist = "DELETE FROM fav WHERE p_id='$p_id' AND c_id='$c_id'";   
	if(mysqli_query($conn, $delWishlist)){
        header('location:fav.php');

    }
 









}

?>