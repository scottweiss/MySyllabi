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
        echo "Invalid username, email, or passowrd.";
        break;
    case 3:
        echo "Sorry, that function hasn't been created yet.";
        break;
}

echo "</div>";

}

?>