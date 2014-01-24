<!-- <nav>
	<ul>
		<li><a href="myClasses.php">My Classes</a></li>
		<li><a href="#">Calendar View</a></li>
		<li><a href="browseClasses.php">Browse Classes</a></li>
		<li><a href="#">Account Settings</a></li>
	</ul>
</nav> -->


<div id='cssmenu'>
<ul>

   <?php
$flagCount = getFlagNumber();

if ($flagCount != 0){

   echo "<li class='active'><a href='notifications.php'><span class='flagNotification'>".$flagCount." Notificaions</span></a></li>";
   
}
if ($flagCount == 0)

   echo "<li class='active'><a href='notifications.php'><span>No New Notifications</span></a></li>";
   
?>
<?php


$result77=mysqli_query($con, "SELECT * FROM `admin` WHERE userID='" . $_SESSION["ID"] . "'");
if (
$count=mysqli_num_rows($result77) == 1)


echo "<li class='has-sub'><a href='admin.php'><span>Admin Settings</span></a>
<ul>
            <li><a href='?e=3''><span>Create Admin User</span></a></li>
            <li><a href='admin.php#viewUsers'><span>View Users</span></a></li>
            <li class='last'><a href='admin.php#viewFlags'><span>Active Flags</span></a></li>
         </ul>
         </li>";
   

?>

   <li class='active'><a href='myClasses.php'><span>My Classes</span></a></li>
   <li class='has-sub'><a href='browseClasses.php'><span>Join a  Class</span></a>
      <ul>
            <li class='last'><a href='addClasses.php'><span>Create a Class</span></a></li>
         </ul>
      </li>
   <li class='has-sub'><a href='?e=3'><span>Calendar View</span></a>
      <ul>
         <li><a href='?e=3'><span>Term</span></a></li>
         <li><a href='?e=3'><span>Weekly</span></a></li>
         <li class='last'><a href='?e=3'><span>Adgenda</span></a></li>
      </ul>
   </li>
   <li><a href='accountSettings.php'><span>Account Settings</span></a></li>
   <li class='last'><a href='logout.php'><span>Logout</span></a></li>
</ul>
</div>