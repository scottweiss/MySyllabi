<?php
if(isset($_GET['s'])) {
    // id index exists
$success = $_GET["s"];


 echo "<div class='success'>";

switch ($success) {
    case 1:
        echo "Password has been changed!" ;
        break;
    case 2:
        echo "An Assignment has been created!" ;
        break;
    case 3:
        echo "Assignment Updated!";
        break;
    case 4:
        echo "Welcome to MySylla.bi! Join classes to stay up-to-date with your coursework.";
        break;        
}

echo "</div>";

}

?>