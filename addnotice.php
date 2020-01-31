
<?php
$username = "root";
$password = "root";
$servername="localhost";
$dbname="tanya";
$connc = new mysqli($servername,$username,$password,$dbname);
$stmt = $connc->prepare("INSERT INTO notice (code,note) VALUES (?, ?)");
$stmt->bind_param("ss",$code,$note);

$code=$_POST['code1'];
$note=$_POST['notice1'];
$stmt->execute();

$code=$_POST['code2'];
$note=$_POST['notice2'];
$stmt->execute();

$code=$_POST['code3'];
$note=$_POST['notice3'];
$stmt->execute();

$code=$_POST['code4'];
$note=$_POST['notice4'];
$stmt->execute();
echo "<script>alert('Notice added successfully')</script>";
echo "<h1>".'PRESS BACK BUTTON TO GO TO THE ADMIN PANEL'."<h1>";

?>

