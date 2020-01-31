
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
$username = "root";
$password = "root";
$servername="localhost";
$dbname="tanya";
$connc = new mysqli($servername,$username,$password,$dbname);
$connc = new mysqli($servername,$username,$password,$dbname);
$stmt = $connc->prepare("INSERT INTO event (code,name,date,time) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss",$code,$name,$date,$time);
$code = $_POST['code5'];
$name = $_POST['event1'];
$date = $_POST['date1'];
$time = $_POST['time1'];
$stmt->execute();


$code = $_POST['code6'];
$name = $_POST['event2'];
$date = $_POST['date2'];
$time = $_POST['time2'];
$stmt->execute();

$code = $_POST['code7'];
$name = $_POST['event3'];
$date = $_POST['date3'];
$time = $_POST['time3'];
$stmt->execute();


$code = $_POST['code8'];
$name = $_POST['event4'];
$date = $_POST['date4'];
$time = $_POST['time4'];
$stmt->execute();
echo "<script>alert('Events added successfully')</script>";
echo "<h1>".'PRESS BACK BUTTON TO GO TO THE ADMIN PANEL'."<h1>";
?>