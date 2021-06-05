<?php 

$conn = mysqli_connect('remotemysql.com','PdQsUlVGcv','4GQHQxiaU1','PdQsUlVGcv');



function signup($data) {
	global $conn;

	$username = mysqli_real_escape_string($conn, $data["username"]);
    $user_email = mysqli_real_escape_string($conn, $data["user_email"]);
    $user_password = mysqli_real_escape_string($conn, $data["user_password"]);
    $user_password2 = mysqli_real_escape_string($conn, $data["user_password2"]);

    // check if username already exist
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    if( mysqli_fetch_assoc($result) ) {
    	echo "<script> alert('Username already registered') </script>";
    	return false;
    }

    // password confirmation
    if($user_password !== $user_password2){

    	echo "<script> alert('Confirmation password failed') </script>";
    	return false;
    }

    // hash password
    $user_password = password_hash($user_password, PASSWORD_DEFAULT);

    // insert data to database
    mysqli_query($conn, "INSERT INTO users(username,user_email,user_password) VALUES('$username','$user_email','$user_password')");

    return mysqli_affected_rows($conn);
    $inserted = mysqli_query($conn,$sql);

        if($inserted){

            $_SESSION['username'] = $username;


            header('signup.php?success=userCreated');
            return exit;
        }else{
            header('signup.php?error=userCrateFailed');
            return exit;
        }
}

?>