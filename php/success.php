<?php
if(isset($_GET['s'])) {
    // id index exists
$success = $_GET["s"];


 echo "<div class='success'>";

switch ($success) {
    case 1:
        echo "Password has been changed!" ;
        break;

}

echo "</div>";

}

?>