<?php
session_start();
$username = "root";
$password = "root";
$servername="localhost";
$dbname="tanya";
$connc = new mysqli($servername,$username,$password,$dbname);
$_SESSION['user']=hash('sha512',$_POST['user']);
$_SESSION['password']=hash('sha512',$_POST['pass']);
$sql = "SELECT username,password FROM eceadmin";
  $result = $connc->query($sql);
  $data = $result->fetch_assoc();
  if($_SESSION['user']==$data["username"] && $data['password']==$_SESSION['password'])
    {
        header('Location:admin.php');
    }
  else{ 
    echo "<script type='text/javascript'>alert('Wrong credentails')</script>";
    echo "<h1> Press back to go back to the login page and input correct credentials </h1>";
  }