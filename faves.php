<?php
session_start();
require 'functions.php';
if(!isset($_SESSION['user_id'])){
    
header('location:login.php');
}else{
 $c_id = $_SESSION['user_id']; 
 $p_id = $_GET['dress_id'];

 $sql_Check = "SELECT * FROM fav where p_id = $p_id AND c_id = $c_id";
 $result_check = mysqli_query($conn, $sql_Check);

 if (mysqli_num_rows($result_check) > 0 ) { 
    echo 'product already exist in favorite';
    header('location:fav.php');
    
 }else{
    $insertfavorite = "INSERT INTO fav (p_id, c_id) VALUES ('$p_id', '$c_id')";   
	if(mysqli_query($conn, $insertfavorite)){
        header('location:fav.php');

    }

 }
 

//  $total = $total +  ($row_cart['price'] * $value['quantity']);









}

?>