<?php
$username = "root";
$password = "root";
$servername="localhost";
$dbname="tanya";
$connc = new mysqli($servername,$username,$password,$dbname);
$stmt = $connc->prepare("DELETE FROM faculty WHERE code=(?)");
$stmt->bind_param("s",$code);
$code=$_POST['remfac'];
$stmt->execute();
echo "<script>alert('Faculty removed successfully')</script>";
echo "<h1>".'PRESS BACK BUTTON TO GO TO THE ADMIN PANEL'."<h1>";

?>