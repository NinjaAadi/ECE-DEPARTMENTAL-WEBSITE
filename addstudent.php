<?php
$username = "root";
$password = "root";
$servername="localhost";
$dbname="tanya";
$connc = new mysqli($servername,$username,$password,$dbname);
$stmt = $connc->prepare("INSERT INTO student (post,regnum,name) VALUES (?, ?, ?)");
$stmt->bind_param("sss",$post,$regnum,$name);
$post=$_POST['post'];
$regnum=$_POST['regnum'];
$name=$_POST['name'];
$stmt->execute();
echo "<script>alert('Member added successfully')</script>";
echo "<h1>".'PRESS BACK BUTTON TO GO TO THE ADMIN PANEL'."<h1>";

?>