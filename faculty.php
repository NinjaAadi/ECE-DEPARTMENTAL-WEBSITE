<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="style2.css" rel="stylesheet" type="text/css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="index.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed|Montserrat:900|Overpass&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla|Lora&display=swap" rel="stylesheet">
    <title>Document</title>
  
</head>
<body>
     <!--Navigation Bar-->
    <nav class="fixed-top">
    <div class="navbar">
        <img src="images/logo.jpeg" id="logo">
        <div id="toggle-btn" onclick="change()">
            <span id="side1"></span>
            <span id="side2"></span>
            <span id="side3"></span>
        </div>
            <!--Menu List-->
        <ul id="menu">
           <a href="index.php" style=" text-decoration: none;">
                        <li>NOTICE</li>
                    </a>
                    <a href="gallery.html" style=" text-decoration: none;">
                        <li>GALLERY</li>
                    </a>
                    <a href="faculty.php" style=" text-decoration: none;">
                        <li>FACULTY</li>
                    </a>
                    <a href="student.php" style=" text-decoration: none;">
                        <li>COUNCIL</li>
                    </a>
                    <a href="https://www.applysmit.in" style=" text-decoration: none;"target="_blank">
                        <li>APPLY FOR SMIT</li>
                    </a>
                    <a href="index.php" style=" text-decoration: none;">
                        <li>ABOUT US</li>
                    </a>
                    <a href="facilities.html" style=" text-decoration: none;">
                        <li>FACILITIES</li>
                    </a>
                    <a href="login.php" target="_blank" style=" text-decoration: none;">
                        <li>LOGIN</li>
                    </a>
    </div>
    </nav>
    <br/><br/><br/><br/>
    <div class="smit-image">
        <img src="images/topsmit.jpg"id="img">
</div>
<br/>
 <div class="container d-flex" style="justify-content:center">
            <img src="images/smit.jpg"id="smit-logo">
    </div>
    <div class="container d-flex" style="justify-content:center;font-family: 'Kora', sans-serif;font-size:18px;">
    <p><b>"<i>Welcome to the department of ECE.In this department you’ll be guided and trained to be future technocrats to move the world.</i>"</b></p>
</div>
 <div class="container d-flex"style="justify-content:center;padding:30px;font-family: 'Montserrat', sans-serif;padding:34px;">
            <h1 style="font-size:calc(5vw);opacity:90%;">FACULTY MEMBERS</h1>
        </div>
        <div class="container-fluid">
<table class="table table-striped">
 <thead>
      <tr>
        <th>POST</th>
        <th>CODE</th>
        <th>NAME</th>
      </tr>
    </thead>
    <?php
  $username="root";
  $password="root";
  $servername="localhost";
  $dbname = "tanya";
  $connc = new mysqli($servername,$username,$password,$dbname);
  $sql = "SELECT post,code,name FROM faculty";
  $result = $connc->query($sql);
    if($result->num_rows > 0)
    {
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row["post"]."</td>";
         echo "<td>".$row["code"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "</tr>";
    }
    }
?>
</table>
</div>
  <!--start of contact us-->
                <div class="container-fluid" id="contact">
                    <div class="container pt-3 d-flex" style=";padding-bottom:50px;justify-content:center">
                        <h2 style="color:white;font-family: 'Montserrat', sans-serif;">CONTACT US</h2>
                    </div>
                    <div class="row">
                        <div class='col-lg-6' id="address" style="font-family: 'Lato', sans-serif;">
                            <p style="font-size:20px;color:white;font-family: 'Montserrat', sans-serif;">DEPARTMENT OF ELETRONICS AND
                                COMMUNICATION ENGINEERING</p><br />
                            <p style="color:orange;font-family: 'Lato', sans-serif;">Sikkim Manipal Institute of Technology Majitar,
                                Rangpo, Sikkim-737136</p>
                            Mob: 09433745766/08001637184<br />
                            Ph: 03592-246353-(Ext- 313) Fax: 03592-246112<br />
                            Email: <a href="mailto:iccdn.ece@smit.smu.edu.in">iccdn.ece@smit.smu.edu.in</a>
                        </div>
                        <div class='col-lg-3' id="imaged">
                            <p style="font-size:20px;color:white;font-family: 'Montserrat', sans-serif;">ORGANIZATIONS</p><br />
                            <img id="logo2" style="width:250px;" src="images/footer-logo.png">
                            <img id="logo2" style="width:250px;height:70px;margin-top:25px;" src="images/logo.jpeg">
                        </div>
                        <div class='col-lg-3' id="imaged">
                            <p style="font-size:20px;color:white;font-family: 'Montserrat', sans-serif;">FOLLOW US</p><br />
                            <a href="https://instagram.com/echelon_2k20?igshid=10gk4qdr2z6c" target="_blank"><img id="imagediv"
                                    src="images/insta.png"></a>
                            <a href="https://www.facebook.com/302906846406335/posts/2711180775578918/?flite=scwspnss&extid=T5fI2zSrwUWQkZpl"
                                target="_blank"><img id="imagediv" src="images/facebook.png"></a>
                            <a href="https://twitter.com/" target="_blank"><img id="imagediv" src="images/twitter.png"></a>
                        </div>
                    </div>
                </div>
                <!--end of contact us-->

</body>
</html>
<script>
    /* Script for button toggling*/
$(document).ready(function(){
    $('#toggle-btn').click(function(){
        $('#menu').toggle(300,"swing");
    });
});
</script>
