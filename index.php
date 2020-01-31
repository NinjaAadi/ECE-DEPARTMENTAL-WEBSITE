<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="index.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap"rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed|Montserrat:900|Overpass&display=swap"rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla|Lora&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans|Noto+Serif|Raleway|Lato|Oswald&display=swap" rel="stylesheet">
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
            <a href="#notice-board" style=" text-decoration: none;"><li>NOTICE</li></a>
            <a href="gallery.html" style=" text-decoration: none;"><li>GALLERY</li></a>
            <a href="faculty.php" style=" text-decoration: none;"><li>FACULTY</li></a>
            <a href="student.php" style=" text-decoration: none;"><li>COUNCIL</li> </a>
            <a href="https://www.applysmit.in" style=" text-decoration: none;" target="_blank"><li>APPLY FOR SMIT</li></a>
            <a href="#aboutus" style=" text-decoration: none;"><li>ABOUT US</li></a>  
            <a href="facilities.html" style=" text-decoration: none;"><li>FACILITIES</li></a>
            <a href="login.php"target="_blank" style=" text-decoration: none;"><li>LOGIN</li></a>
        </ul>
    </div>
    </nav>
    <br/><br/><br/><br/>
        <!--Navigation Bar End-->
    <!--Carousel slides-->
    <div id="slide" class="carousel slide" data-ride="carousel">
        <div id="background-slide"></div>
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#slide" data-slide-to="0" class="active"></li>
            <li data-target="#slide" data-slide-to="1"></li>
            <li data-target="#slide" data-slide-to="2"></li>
        </ul>
    
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img id="slideimage"src="images/ece-2.webp">
            </div>
            <div class="carousel-item">
                <img id="slideimage" src="images/slide2.png">
            </div>
            <div class="carousel-item">
                <img id="slideimage" src="bluetooth/IMG-20200128-WA0044.jpg">
            </div>
        </div>
        <div class="carousel-text">
            <h1 class="text-inner">Electronics Communication<br/></h1>
            <h1 class="text-inner-2">And Student Association</h1>
            <img id="icon" src="images/bulb.png">
        </div>
    </div>   
    <div class="container d-flex"style="justify-content:center;padding:30px;font-family: 'Montserrat', sans-serif;padding:34px;">
        <h1 id="event"style="font-size:5vw;opacity:90%;"> NOTICE</h1>
    </div>
    <!--notice-board-->
<div class="container" id="notice-board">
    <div class="row">
        <div class="col-sm-6">
            <h3 id="notice-heading">Recent Events</h3>
            <!--php-->
         <?php
        $username = "root";
        $password = "root";
        $servername="localhost";
        $dbname="tanya";
        $connc = new mysqli($servername,$username,$password,$dbname);
        $sql = "SELECT name,date,time FROM event";
        $result = $connc->query($sql);
         echo "<ul>";
        if($result->num_rows > 0)
            { 
                while($row = $result->fetch_assoc()){
                    
                        echo "<li id='redcolor'style='font-size:18px;'>".$row['name']."<br/>";
                        echo "<p style='color:rgb(128,0,0);font-size:13px;'>".$row['date']."<br/>";
                        echo $row['time']."</p>";
                }
            }
           echo "</ul>";
       
        ?>
        </div>
        <div class="col-sm-6" style="padding-left:30px">
            <h3 id="notice-heading">Notices</h3>
            <!--php-->
       <?php
        $username = "root";
        $password = "root";
        $servername="localhost";
        $dbname="tanya";
        $connc = new mysqli($servername,$username,$password,$dbname);
        $sql = "SELECT note FROM notice";
        $result = $connc->query($sql);
        if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc()){
                    echo "<ul>";
                        echo "<li id='redcolor'>".$row['note']."</li>";
                    echo "</ul>";
                }
            }
       
        ?>
        </div>
    </div>
</div>
<!--end of notice_board-->
<div class="container d-flex"style="justify-content:center;padding:30px;font-family: 'Montserrat', sans-serif;padding:34px;">
        <h1 id="event"style="font-size:5vw;opacity:90%;">OVERVIEW</h1>
    </div>
    <div class="container" style="line-height: 2.0">
        <p style="font-family: 'Karla', sans-serif;font-weight:400;">The B.Tech program in Electronics and Communication Engineering involves subjects which imparts the state of the art knowledge to the students to learn about design, analysis & application of electronics & communication circuits and allied areas.</p>
        <h5 style="color:#FF7F50">PROGRAM EDUCATIONAL OBJECTIVES</h5>
        <ul id="list">
            <li style="font-family: 'Karla', sans-serif;font-weight:400;">Ability to carry out challenging works and formulate suitable solution in the field of Electronics & Communication Engineering.</li>
            <li style="font-family: 'Karla', sans-serif;font-weight:400;">To exhibit good spirit of team work and able to lead the team.</li>
            <li style="font-family: 'Karla', sans-serif;font-weight:400;">To train students with high ethical, moral and special values such that there is beneficial contribution to the society.</li>
            <li style="font-family: 'Karla', sans-serif;font-weight:400;">Ability to work in multidisciplinary fields and a strong desire to learn and pursue research work.</li>
            <li style="font-family: 'Karla', sans-serif;font-weight:400;">Ability to apply knowledge of mathematics, science and engineering for finding solution to the real problems.</li>
        </ul>
        <h5 style="color:#FF7F50;">PROGRAM EDUCATIONAL OBJECTIVES</h5>
        <ul id="list">
        <li style="font-family: 'Karla', sans-serif;font-weight:400;">Ability to apply knowledge of mathematics, science and engineering for finding solution to the real problems.</li>
        <li style="font-family: 'Karla', sans-serif;font-weight:400;">Ability to design and conduct experiments, as well as to analyse and interpret data and infer the results especially in the field of Electronics and Communication Engineering.</li>
        <li style="font-family: 'Karla', sans-serif;font-weight:400;">Ability to function on multidisciplinary teams cohesively and develop team building and leadership qualities in order to communicate with the peer groups effectively.</li>
        <li style="font-family: 'Karla', sans-serif;font-weight:400;">Ability to identify, formulate and solve engineering problems.</li>
        <li style="font-family: 'Karla', sans-serif;font-weight:400;">The broad education necessary to understand the impact of engineering solutions in a global, economic, environmental and societal context and exhibiting of professionalism and ethical responsibility.</li>
        <li style="font-family: 'Karla', sans-serif;font-weight:400;">To motivate the learner to pursue higher education and get himself/herself engage in life-long learning.</li>
        <li style="font-family: 'Karla', sans-serif;font-weight:400;"> Knowledge of contemporary issues related to area of expertise.</li>
        <li style="font-family: 'Karla', sans-serif;font-weight:400;">Ability to use the techniques, skills, and modern engineering tools necessary for engineering practice.</li>
        <li style="font-family: 'Karla', sans-serif;font-weight:400;">Ability to identify different communication techniques and implement in their professional life.</li>
        <li style="font-family: 'Karla', sans-serif;font-weight:400;">To inculcate sound knowledge about various engineering technologies like Microwaves, Antenna, Satellite and Optical Communication.</li>
        <li style="font-family: 'Karla', sans-serif;font-weight:400;">Motivate the students to participate in various types of competitive examination.</li>
        </ul>
        <h5 style="color:#FF7F50;">PROGRAM SPECIFIC OUTCOMES</h5>
        <ul id="list">
             <li style="font-family: 'Karla', sans-serif;font-weight:400;">To inculcate sound knowledge about various engineering technologies like Electronics Devices, VLSI and Embedded System, Analog & Digital Electronics, Digital Signal Processing, Microwave, Antenna, Mobile, Satellite and Optical Communication.</li>
             <li style="font-family: 'Karla', sans-serif;font-weight:400;">Ability to use the techniques, skills and modern engineering tools like EDA (Electronic Design and Automation) necessary for engineering practice.</li>
        </ul>
        <h5 style="color:#FF7F50;">COURSE OUTCOME, PROGRAM OUTCOME AND COURSE SYLLABUS</h5>
        <ul id="list">
             <li style="font-family: 'Karla', sans-serif;font-weight:400;"><a href="https://smu.edu.in/content/dam/manipal/smu/smit/documents/coursedetail/ece/btech_ece_co.pdf" target="_blank">Click Here</a> for Course Outcome
</li>
             <li style="font-family: 'Karla', sans-serif;font-weight:400;"><a href="https://smu.edu.in/content/dam/manipal/smu/smit/documents/coursedetail/ece/btech_ece_po.pdf"target="_blank">Click Here</a> for Program Outcome
</li>
             <li style="font-family: 'Karla', sans-serif;font-weight:400;"><a href="https://smu.edu.in/content/dam/manipal/smu/smit/documents/coursedetail/ece/BE_syllabus.pdf"target="_blank">Click Here</a> for B.Tech Basic Electronics Syllabus
</li>
             <li style="font-family: 'Karla', sans-serif;font-weight:400;"><a href="https://smu.edu.in/content/dam/manipal/smu/smit/documents/coursedetail/ece/B.tech_syllabus%20ECE.pdf"target="_blank">Click Here</a> for B.Tech E&C Syllabus
</li>
        </ul>
        <h5 style="color:#FF7F50;">CAREER OPPORTUNITY</h5>
        <ul id="list">
             <li style="font-family: 'Karla', sans-serif;font-weight:400;">Industrial training is a part of the curriculum where students have to work in an industry which is related to their area of interest for a minimum period of 4 weeks. Essentially, this gives them an exposure to the technology in practice and industrial environment.
</li>
             <li style="font-family: 'Karla', sans-serif;font-weight:400;">Seminars included in the curriculum helps them to experience self-learning and develop communication and interpersonal skills.
</li>
             <li style="font-family: 'Karla', sans-serif;font-weight:400;">Various clubs operated at the department level train the students on various aspects related to the industrial requirements such as technical projects and opportunity to participate in competitions.
</li>
             <li style="font-family: 'Karla', sans-serif;font-weight:400;">Research activity in the department encourages them for innovations and lifelong learning.
</li>
                <li style="font-family: 'Karla', sans-serif;font-weight:400;">Workshops & conferences held at the department and institution level provides them with the relevant exposure.
</li>
             <li style="font-family: 'Karla', sans-serif;font-weight:400;">There are opportunities for students in technical activities through technical clubs such as IEEE student branch.
</li>
             <li style="font-family: 'Karla', sans-serif;font-weight:400;">Some of the departmental Labs are World Class like Advanced Communication LAB at 7<sup>th</sup> Semester Level which is being upgraded on regular basis to make the students industry ready. Students prefers to use those Labs as carrier opportunity for them.
</li>
        </ul>
        <p style="font-family: 'Karla', sans-serif;font-weight:400;">Some of the major companies where the students get placed are Dell India, Nexgen, Solarize Global, Sprinklr, Zebronics, Ags, Click on Care, Rechner Software, Shriram Finance, Mage, Ericsson, Bureau Varitas, karvy, Amazon Support, Fl Smidth, Amazon Development, Cummins, Asahi India Glass, Intel, Safran, Zaloni, Just Dial, ITC Infotech, CGI, IXIA, ThoughtWorks, Bosch, Poornam Infovision, Tech Mahindra, Wipro, Think & Learn, Wells Fargo.</p>
    </div>

    <div class="container d-flex"style="justify-content:center;padding:30px;font-family: 'Montserrat', sans-serif;padding:34px;">
        <h1 style="font-size:5vw;opacity:90%;">ABOUT US</h1>
    </div>
    <div class="container d-flex" style="justify-content:center">
            <img src="images/smit.jpg"id="smit-logo">
    </div>
    <!--about us content-->
    <div class="container"id="aboutus">
            <div class="container d-flex"style="justify-content:center;"><h4 id="smitheading">About SMIT</h4></div>
            <p style="font-family: 'Karla', sans-serif;font-weight:400;line-height: 2.0">The Sikkim Manipal Institute of Technology is a constituent college of Sikkim Manipal University located in Tadong, Gangtok. Established in 1997, SMIT is part of the renowned Manipal Group that has made its mark in the field of education and health services in India and abroad. SMIT enjoys approval by All India Council of Technical Education (AICTE) and University Grants Commission (UGC). It is also accredited by NAAC. In addition, it also holds ISO 9001 accreditation vide NS-EN ISO 9001:2000.

SMIT is one of India’s premier technology and management institutes. The campus is home to 3200 students, 220 faculty and industry experts and a large and efficient team of support staff. The institute is reputed for its state of the art infrastructure, well stocked library, and advanced technology laboratories. A number of sponsored projects have also been assigned to SMIT. The faculty members are also selected to do research on different areas and financed by DST, DBT, DRDO and AICTE. As a result, apart from books, a number of papers by the members of the faculty are also published in peer reviewed, high index journals of international repute. The students are also guided and encouraged to participate in research activities.</p>

                  <div class="container d-flex"style="justify-content:center;"><h4 id="smitheading">About ECE department</h4></div>
        <p style="font-family: 'Karla', sans-serif;font-weight:400;line-height: 2.0">ECE Department is one of the largest departments at Sikkim Manipal Institute of Technology, a constituent college under Sikkim Manipal University, Sikkim. The courses, offered by the Department are B.Tech (ECE), M.Tech (DECE) with specialisation in IOT and VLSI, Ph.D. Lots of research works are going on different areas, such as Nanotechnology, Embedded System, Image processing, RADAR, 5G Communication and Satellite Communication ect. A Digital RADAR has been developed by ECE Dept. and introduced in service by DRDO, Govt. of India. SMIT-RADAR is operational at DRDO to “ADD TEETH TO INDIA's GEN-NEXT WEAPON SYSTEMS”.</p>
                </div>
        <!--end of content-->
        <!--start of hod-->
        <div class="container d-flex"style="justify-content:center;padding:30px;font-family: 'Montserrat', sans-serif;padding:34px;">
            <h1 style="font-size:calc(5vw);opacity:90%;">DEPARTMENT HEAD</h1>
        </div>
        <div class="container d-flex"id="hod"style="justify-content:center">
            <p id="hod-para"><span style="font-family: 'Montserrat', sans-serif;font-size:3.1vw;color:rgba(0,0,0,0.9);">PROF (DR.) SOURAV DHAR</span><br/><br/>General Chair and <b>Head of the Department</b>;<br/>
Department of Electronics and Communication Engineering;<br/>
Sikkim Manipal Institute of Technology Majitar, Rangpo, Sikkim-737136<br/>
<b>Website</b>:<a href="www.smu.edu.in">www.smu.edu.in</a></p>
</b><a href="https://www.facebook.com/100034117354871/posts/190802982066946/?app=fbl">Follow on facebook</a>
        </div>
        <br/>
        <br/><br/>
        <!--end of hod-->
           <div class="container d-flex"style="justify-content:center;padding:30px;font-family: 'Montserrat', sans-serif;padding:34px;">
            <h1 style="font-size:calc(5vw);opacity:90%;">TESTIMONIALS</h1>
        </div>
        <!--start of testimonials-->
       <div class="container-fluid">
           <div class="row">
               <div class="col-sm-3 d-flex" style="justify-content:center;">
  <div class="card" style="width:300px;border:none;">
    <img class="card-img-top" src="images/testi1.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title" style="font-family: 'Montserrat', sans-serif;">Pushpak Chakraborty</h4>
      <p class="card-text"style="font-family: 'Karla', sans-serif;">Dept is where creativity is amplified to generate ideas that can wonder the technical world. Its known for excelling in field of academics with coordination of teachers and students</p>
    </div>
        </div>
        </div>


        <div class="col-sm-3 d-flex"style="justify-content:center;">
        <div class="card" style="width:300px;border:none;">
    <img class="card-img-top" src="images/testi2.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title"style="font-family: 'Montserrat', sans-serif;">Tanveer Kaur</h4>
      <p class="card-text"style="font-family: 'Karla', sans-serif;">EC Department is where people having different ideas can come together at a same platform to create wonders at technical field like by creating robots ,working on different research works.</p>
    </div>
        </div>
        </div>


            <div class="col-sm-3 d-flex"style="justify-content:center;">
        <div class="card" style="width:300px;border:none;">
    <img class="card-img-top" src="images/testi3.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title"style="font-family: 'Montserrat', sans-serif;">Sampurna Dhar</h4>
      <p class="card-text"style="font-family: 'Karla', sans-serif;">Technologies from 2G to 4G were well-understood and imprinted on our minds thanks to Advanced Communication Lab.</p>
    </div>
        </div>
        </div>
            <div class="col-sm-3 d-flex"style="justify-content:center;">
        <div class="card" style="width:300px;border:none;">
    <img class="card-img-top" src="images/testi4.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title"style="font-family: 'Montserrat', sans-serif;">Shubham Kapoor</h4>
      <p class="card-text"style="font-family: 'Karla', sans-serif;">Hands-on experience imparted through simulating 3G, LTE and other technologies enhanced our knowledge of modern communication systems.Some example text some example text. John Doe is an architect and engineer</p>
    </div>
        </div>
        </div>
        </div>
  </div>
                <!--start of contact us-->
            <div class="container-fluid" id="contact">
                <div class="container pt-3 d-flex"style=";padding-bottom:50px;justify-content:center"><h2 style="color:white;font-family: 'Montserrat', sans-serif;">CONTACT US</h2></div>
                <div class="row">
                        <div class='col-lg-6' id="address"style="font-family: 'Lato', sans-serif;">
                                <p style="font-size:20px;color:white;font-family: 'Montserrat', sans-serif;">DEPARTMENT OF ELETRONICS AND COMMUNICATION ENGINEERING</p><br/>
                               <p style="color:orange;font-family: 'Lato', sans-serif;">Sikkim Manipal Institute of Technology Majitar, Rangpo, Sikkim-737136</p>
                                Mob: 09433745766/08001637184<br/>
                                Ph: 03592-246353-(Ext- 313) Fax: 03592-246112<br/>
                                Email: <a href="mailto:iccdn.ece@smit.smu.edu.in">iccdn.ece@smit.smu.edu.in</a>
                        </div>
                        <div class='col-lg-3'id="imaged">
                            <p style="font-size:20px;color:white;font-family: 'Montserrat', sans-serif;">ORGANIZATIONS</p><br/>
                            <img id="logo2"style="width:250px;"src="images/footer-logo.png">
                            <img id="logo2"style="width:250px;height:70px;margin-top:25px;"src="images/logo.jpeg">
                        </div>
                        <div class='col-lg-3'id="imaged">
                            <p style="font-size:20px;color:white;font-family: 'Montserrat', sans-serif;">FOLLOW US</p><br/>
                           <a href="https://instagram.com/echelon_2k20?igshid=10gk4qdr2z6c" target="_blank"><img id="imagediv"src="images/insta.png"></a>
                            <a href="https://www.facebook.com/302906846406335/posts/2711180775578918/?flite=scwspnss&extid=T5fI2zSrwUWQkZpl"target="_blank"><img id="imagediv"src="images/facebook.png"></a>
                            <a href="https://twitter.com/"target="_blank"><img id="imagediv"src="images/twitter.png"></a>
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
