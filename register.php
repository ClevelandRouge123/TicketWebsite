<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */

// Set session variables to be used on profile.php page
if(isset($_SESSION['email'])){
$_SESSION['email'] = $_POST['email'];
}
if(isset($_SESSION['name'])){	
$_SESSION['name'] = $_POST['name'];
}
// Escape all $_POST variables to protect against SQL injections
$name = $mysqli->escape_string($_POST['name']);
$email = $mysqli->escape_string($_POST['email']);
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$hash = $mysqli->escape_string( md5( rand(0,1000) ) );
   
   echo $hash;
// Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'User with this email already exists!';
   // header("location: error.php");
    
}
else { // Email doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO users (name, email, password, hash) " 
            . "VALUES ('$name','$email','$password','$hash')";

    // Add user to the database
    if ( $mysqli->query($sql) ){

        $_SESSION['active'] = 1; //0 until user activates their account with verify.php
        $_SESSION['logged_in'] = true; // So we know the user has logged in
		$_SESSION['message'] = 'Registration Successful! Please login with your set credentials';

    }
    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: error.php");
    }

}