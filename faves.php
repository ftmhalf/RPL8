<?php
session_start();
require 'functions.php';
if(!isset($_SESSION['login'])){
    
header('location:login.php');
}else{
 $c_id = $_SESSION['user_id']; 
 $p_id = $_GET['dress_id']; 
	
    $insertfavorite = "INSERT INTO fav (p_id, c_id) VALUES ('$p_id', '$c_id')";   
	if(mysqli_query($conn, $insertfavorite)){
        header('location:fav.php');
    }

 }

?>
