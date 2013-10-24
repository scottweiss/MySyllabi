<?php
if(isset($_GET['e'])) {
    // id index exists
$error = $_GET["e"];
if(isset($_POST['email'])) {
	$email = $_POST['email'];
}
if(isset($_POST['username'])) {
	$username = $_POST['username'];
}
 echo "<div class='error'>";

switch ($error) {
    case 0:
        echo "That username is already taken. Please choose a new username" ;
        break;
    case 1:
        echo "That email address is already taken. Please use a different email address";
        break;
    case 2:
        echo "Invalid username, email, or password.";
        break;
    case 3:
        echo "Sorry, that function hasn't been created yet.";
        break;
    case 4:
        echo "Congratulations! Your account has been created and you may now login.";
        break;
    case 5:
        echo "User has been deleted.";
        break;
    case 6:
        echo "You cannot delete an Administrative User.";
        break;
    case 7:
        echo "Class has been deleted.";
        break;  
    case 8:
        echo "You have enrolled. <a href=myClasses.php>View Classes</a>";
        break;       
    case 9:
        echo "You have dropped the class. <a href=myClasses.php>View Classes</a>";
        break;  
    case 10:
        echo "Current password is incorrect";
        break;  
    case 11:
        echo "Password has been changed!";
        break; 
    case 12:
        echo "No user found with that email";
        break; 
    case 13:
        echo "Email been sent!";
        break; 
    case 14:
        echo "Passwords did not match";
        break; 
}

echo "</div>";

}

?>