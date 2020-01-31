<?php 
session_start();
if(!isset($_SESSION['user'])){
    header('location:login.php');
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="admin.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="index.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed|Montserrat:900|Overpass&display=swap"rel="stylesheet">
</script>
</head>
<body>
    <div style="justify-content:center">
        <h1 id="heading1">Welcome to the admin panel</h1>
    </div>
    <form action="logout.php">
    <button type="submit"id="logout">Logout</button></form><br/>
    <br/><br/>
    <h2 id="noticeboard">Add notice</h2>
    <div id="addnotice">
        <form action="addnotice.php" method="POST">
        <input required type="text" placeholder="Enter notice 1" id="notice" name="notice1"><input required type="text" placeholder="Code" id="code"name="code1"><br/>
        <input required type="text" placeholder="Enter notice 2" id="notice" name="notice2"><input required type="text" placeholder="Code" id="code"name="code2"><br />
        <input required type="text" placeholder="Enter notice 3" id="notice" name="notice3"><input required type="text" placeholder="Code" id="code"name="code3"><br />
        <input required type="text" placeholder="Enter notice 4" id="notice"name="notice4"><input required  type="text" placeholder="Code" id="code"name="code4"><br /><br/>
        <button id="btn" name="submit">Submit</button>
        </form>
    </div>
    <h2 id="noticeboard">Add Event</h2>
    <div id="addnotice">
        <form action="addevent.php" method="POST">
            <input required type="text" placeholder="Enter event 1" id="notice1" name="event1"><input required type="text"id="date" placeholder="dd/mm/yyyy"name="date1"><input required type="text" id="date"placeholder="Ex.15:30"name="time1"><input type="text" placeholder="Code" id="code"name="code5"><br />
            <input required type="text" placeholder="Enter event 2" id="notice1"name="event2"><input required type="text" id="date" placeholder="dd/mm/yyyy"name="date2"><input required type="text" id="date" placeholder="Ex.15:30"name="time2"><input type="text" placeholder="Code" id="code"name="code6"><br />
            <input required type="text" placeholder="Enter event 3" id="notice1"name="event3"><input required type="text" id="date" placeholder="dd/mm/yyyy"name="date3"><input required type="text" id="date" placeholder="Ex.15:30"name="time3"><input type="text" placeholder="Code" id="code"name="code7"><br />
            <input required type="text" placeholder="Enter event 4" id="notice1"name="event4"><input required type="text" id="date" placeholder="dd/mm/yyyy"name="date4"><input required type="text" id="date" placeholder="Ex.15:30"name="time4"><input type="text" placeholder="Code" id="code"name="code8"><br />
            <br/>
            <button id="btn" type="submit">Submit</button>
        </form>
    </div>
     <h2 id="noticeboard">Add Student Member</h2>
    <form action="addstudent.php"method="POST">
        <input required id="textbox2"type="text"placeholder="Post"name="post"><input required id="textbox2"type="text" placeholder="Reg. number"name="regnum"><input required id="textbox2"type="text" placeholder="Name"name="name"><button type="submit" id="btn">Add</button>
    </form>
    <h2 id="noticeboard">Add Faculty Member</h2>
    <form action="addfaculty.php"method="POST">
        <input required id="textbox2" type="text" placeholder="Designation"name="post"><input required id="textbox2" type="text"
            placeholder="Employee code"name="code"><input required id="textbox2" type="text" placeholder="Name"name="name"><button
            type="submit" id="btn">Add</button>
    </form>
     <h2 id="noticeboard">Remove Event</h2>
     <form action="removeevent.php" method="POST"id="form">
     <input required type="text"placeholder="Enter the Event Code to be removed" id="textbox"name="eventremove"><button id="btn"type="submit">Remove</button>
     </form>
    <h2 id="noticeboard">Remove Notice</h2>
    <form action="removenotice.php"method="POST" id="form">
        <input required type="text" placeholder="Enter the Notice Code to be removed" id="textbox" name="noticeremove"><button id="btn"
            type="submit">Remove</button>
    </form>
       
    <h2 id="noticeboard">Remove Student Member</h2>
    <form action="removemember.php"method="POST" id="form">
        <input required type="text" placeholder="Enter the Reg.no. of student to be removed" id="textbox" name="registration"><button id="btn"
            type="submit">Remove</button>
    </form>
    <h2 id="noticeboard">Remove Faculty Member</h2>
    <form action="removefaculty.php"method="POST" id="form">
        <input required type="text" placeholder="Enter the Employee Code to be removed" id="textbox" name="remfac"><button id="btn"
            type="submit">Remove</button>
    </form>
</body>
</html>

<script language="javascript" type="text/javascript">
    window.onbeforeunload = function () {   
        // This function does nothing.  It won't spawn a confirmation dialog   
        // But it will ensure that the page is not cached by the browser.
    }  
</script>

