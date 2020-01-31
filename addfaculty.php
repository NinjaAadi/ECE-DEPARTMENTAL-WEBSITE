<?php
$username = "root";
$password = "root";
$servername="localhost";
$dbname="tanya";
$connc = new mysqli($servername,$username,$password,$dbname);
$stmt = $connc->prepare("INSERT INTO faculty (post,code,name) VALUES (?, ?, ?)");
$stmt->bind_param("sss",$post,$code,$name);
$post=$_POST['post'];
$code=$_POST['code'];
$name=$_POST['name'];
$stmt->execute();
echo "<script>alert('Faculty added successfully')</script>";
echo "<h1>".'PRESS BACK BUTTON TO GO TO THE ADMIN PANEL'."<h1>";

?>