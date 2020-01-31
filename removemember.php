<?php
$username = "root";
$password = "root";
$servername="localhost";
$dbname="tanya";
$connc = new mysqli($servername,$username,$password,$dbname);
$stmt = $connc->prepare("DELETE FROM student WHERE regnum=(?)");
$stmt->bind_param("s",$code);
$code=$_POST['registration'];
$stmt->execute();
echo "<script>alert('Member removed successfully')</script>";
echo "<h1>".'PRESS BACK BUTTON TO GO TO THE ADMIN PANEL'."<h1>";

?>