<?php
session_start();
require 'functions.php';
if(!isset($_SESSION['login'])){
    
header('location:login.php');
}else{
 $c_id = $_SESSION['user_id']; 
 $p_id = $_GET['dress_id'];

 $sql_Check = "SELECT * FROM fav where p_id = $p_id AND c_id = $c_id";
 $result_check = mysqli_query($conn, $sql_Check);

 if (mysqli_num_rows($result_check) == 1 ) { 
    echo 'product already exist in favorite';
    header('location:fav.php');
    
 }else{ 
	if(mysqli_query($conn, "INSERT INTO fav (p_id, c_id) VALUES ('$p_id', '$c_id')"))
 	header("location: fav.php");

    }

 }

?>
