<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $project = $_POST['mob'];
    $message = $_POST['message'];

    // echo 'Your Entry has been submitted Successfully';

    //Connecting to the Database
    $servername = "sql112.epizy.com";
    $username = "epiz_31416189";
    $password = "AmHMTlvXQpD";
    $database = "epiz_31416189_Akportfolio";

    //Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    //Die if connection was not successful
    if (!$conn) {
        die("SORRY we failed the connection :" . mysqli_connect_error());
    } else {
        // echo "connection was Successful";

        //  Submit these to database

        $sql = "INSERT INTO `portfoliotable` (`NAME`, `EMAIL`, `PROJECT`, `MESSAGE`, `Date`) VALUES 
                ('$name', '$email', '$project', '$message', current_timestamp())";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            // echo'SUCCESS! Information is Post Successfully.';
            // echo '<div class="alert" id="success">
            //         <span class="closebtn" name ="success" onclick="this.parentElement.style.display="none";">&times;</span>
            //         <strong>Success! </strong> Message Posted Successfully.
            //         </div>';
            echo '<script type="text/javascript">';
            echo ' alert("Success! Your Message is Posted Successfully")';
            echo '</script>';
        } else {
            // echo'ERROR! Information is Not Post Successfully.';
            // echo 'ERROR'.mysqli_error($conn);
            // echo '<div class="alert" id="failure">
            //         <span class="closebtn" name ="danger" onclick="this.parentElement.style.display="none">&times;</span>
            //         <strong>Failure! </strong> Message Not Posted Successfully.
            //         </div>';

            echo '<script type="text/javascript">';
            echo ' alert("Failure! Your Message is Not Posted Successfully!")';
            echo '</script>';
        }
    }
}
?>


<!-- HTML file -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website-Akshay Kumar Hiran</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- w3 icons link -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

</head>

<body>

    <!-- header section starts  -->

    <header>

        <div class="user">
            <img src="Images/user.jpg" alt="">
            <h3 class="name">Akshay Kumar Hiran</h3>
            <p class="post">Front Web/App Developer</p>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#achievements">Achievements</a></li>
                <li><a href="#links">Links</a></li>
                <li><a href="#project">Project</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>

    </header>

    <!-- header section ends -->

    <div id="menu" class="fas fa-bars"></div>

    <!-- home section starts  -->

    <section class="home" id="home">

        <h3>HI THERE !</h3>
        <h1>I'M <span>Akshay Kumar Hiran</span></h1>
        <p>I am from Bhilwara [Raj]. I am studied at Poornima Institute of Engineering and technology for persuing
            B.tech degree.
            I am Front end Developer belongs to middle class family, working with the new framworks and language are
            useful for Development.
            My hobbies is to play cricket and Badminton and interest in visiting new places. I like to work with team.
            Thank you!
        </p>
        <a href="#about"><button class="btn">About me <i class="fas fa-user"></i></button></a>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"> <span>About</span> Me </h1>

        <div class="row">

            <div class="info">
                <h3> <span> Name : </span>Akshay Kumar Hiran</h3>
                <h3> <span> DOB : </span> 4 Decembor 2003 </h3>
                <h3> <span> Qualification : </span> B.Tech(persuing..) </h3>
                <h3> <span> Post : </span> Front Web/App Developer(Fresher) </h3>
                <h3> <span> Language : </span> Hindi,English </h3>
                <a href="Images/Resume.pdf"><button class="btn"> Download RESUME <i class="fas fa-download"></i> </button></a>
                <a href="Images/CV.pdf"><button class="btn"> Download CV <i class="fas fa-download"></i> </button></a>
            </div>

            <div class="counter">

                <div class="box">
                    <span>7+</span>
                    <h3>Works on Technical Certification Courses</h3>
                </div>

                <div class="box">
                    <span>10+</span>
                    <h3>Small Website project completed</h3>
                </div>

                <div class="box">
                    <span>20+</span>
                    <h3>Non Technical Workshop Certification</h3>
                </div>

                <div class="box">
                    <span>15+</span>
                    <h3>Technical Workshop Participation</h3>
                </div>

            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- education section starts  -->

    <section class="education" id="education">

        <h1 class="heading"> My <span>Education</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2015-16</span>
                <h3>Secondary Education Passout</h3>
                <p>In the Year 2016, I have Completed My Class 8th from Govt. Senior Secondary School Nandsha [Jagir],
                    Raipur,Bhilwara[Raj.] with Grade A(88%). I was the Topper of the Class.
                    I got Laptop from Government of Rajasthan through RBSE Board. I am only Student have awarded Laptop
                    form Goverment.</p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2017-18</span>
                <h3>Senior Secondary Passed</h3>
                <p>In the Year 2018 , I have Completed My class 10th from Govt. Senior Secondary School Nandsha[Jagir],
                    Raipur, Bhilwara. I Scored 80.83% with 1st Rank in class. I got Laptop from Government of Rajasthan
                    through RBSE Board and i also got trophy from school on independents day.</p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2019-20</span>
                <h3>Higher Secondary Passed</h3>
                <p>When i completed 10th after much thinking i decided to choose PCM, because in Mathematics interest
                    and get admission in Model School.In
                    the Year 2020,I have completed My class 12th from Swami Vivekanand Govt. Model School
                    Raipur,Bhilwara with CBSE Board. I Scored 74% in PCM.</p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2020-21</span>
                <h3>Attempt in IIT-JEE</h3>
                <p>In the Year 2021, Covid-19 Pandemic are spread over the world and my JEE-MAIN are posponded 2 times.
                    Finally I give exam and Score 76 percentile but due to cast reservation i won't be selected for
                    Advanced and i don't waste time in 2nd Attempt and I got PIET Jaipur through REAP.
                </p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2020-24</span>
                <h3>Bachelor Degree in CSE</h3>
                <p>My Journey in Poornima started in Nov 2020 in online classes due to covid-19 pandemic, In 1st Sem. we
                    are one time going to college and give exam but RTU was not conduct and result is declared according
                    to 10th, 12th and internal marks. I got 9.71 CGPA. </p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2024</span>
                <h3>Developer?</h3>
                <p>In Future, I want to work as a professional Website and Application Developer. So,achieve this
                    position i am works on himself as a developer.</p>
            </div>

        </div>

    </section>

    <!-- education section ends -->

    <!-- portfolio section starts  -->

    <section class="portfolio" id="portfolio">

        <h1 class="heading"> My <span>Portfolio</span> </h1>

        <div class="box-container">

            <div class="box">
                <a href="Images/webdevelopment.jpg"><img src="Images/web2.png" alt=""></a>
                <!-- for any image error use this link -->
                <!-- http://localhost/AkPortfolio_deployed/images/webdevelopment.jpg -->
            </div>

            <div class="box">
                <a href="Images/cybersecurity.jpg"> <img src="Images/bootstrap.jfif" alt=""></a>
            </div>

            <div class="box">
                <a href="Images/googlecloud.png"> <img src="Images/cloud.png" alt=""></a>
            </div>

            <div class="box">
                <a href="Images/kotlin.png"><img src="Images/kt.jfif" alt=""></a>
            </div>

            <div class="box">
                <a href="Images/googlecloud.png"><img src="Images/Clanguage.jfif" alt=""></a>
            </div>

            <div class="box">
                <a href="Images/cybersecurity.jpg"><img src="Images/Cybersecurity-basics-scaled.jpg" alt=""></a>
            </div>

        </div>

    </section>

    <!-- portfolio section ends -->



    <!-- achievements section starts -->

    <section class="achievements" id="achievements">

        <h1 class="heading"> <span>My </span> Achievements </h1>

        <div class="row">

            <div class="content">
                <ul class="points">
                    <li>First Achievements of My Life in study,When i was only 12 and got Laptop(<a href="Images/acerlaptop.jpg" style="text-decoration:underline;">Acer One 14 Z422</a> ) from Rajasthan
                        Board because i Scored 88% with grade A. I am only one from class. </li>
                    <br>
                    <li>My Second Achievements of My life in also study, when i was in class 10th and i got another
                        laptop is (<a href="Images/hplaptop.jpg" style="text-decoration:underline;">HP 245 G6</a>) from
                        Rajasthan Board. I Scored
                        80.83% with 1st position in class.</li>
                    <br>
                    <li>One of the Best moments in class 12th when i was in top-3 in PCM section and Score 74%.</li>
                    <br>
                    <li>In One of the best achievements i can count when i have Participated in 3rd International
                        conference on Smart innovations in Society(ICSIS-2021) and get <a href="Images/icsis.jfif" style="text-decoration:underline;">Participation Certificate</a>, and
                        the paper publish in <a href="Images/stm.jpg" style="text-decoration:underline;">Journal of Telecommunication, Switching System and Network.</a></li>
                    <br>
                    <li>In Poornima i Participated in many Technical workshops(online/offline) and earn certificate. In
                        which one of the my biggest achievements is I completed the task to 2 Tracks in Google cloud
                        Console(organished by GDSC Poornima) and earn google certification and <a style="text-decoration: underline;" href="Images/goodies.jfif">Many Swages</a>. One Another
                        achievements of my life in Pornima is
                        I got certification in Kotlin Basics course by Android.</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- achievements section ends -->


    <!-- links section starts -->

    <section class="links" id="links">

        <h1 class="heading"> <span>My</span> Links </h1>

        <div class="row">
            <div class="content2">
                <h3 class="title2">Technical Links</h3>
                <div class="info2">
                    <h3><i class="fab fa-github"></i><a class="underline" href="https://github.com/Aksh3294">https://github.com/Aksh3294</a></h3>
                    <h3><i class="fab fa-github"></i><a class="underline" href="https://github.com/Ak3294">https://github.com/Ak3294</a></h3>
                    <h3><i class="fab fa-android"></i></i><a class="underline" href="https://g.dev/iAk3294">https://g.dev/iAk3294</a></h3>
                    <h3><i class="fas fa-cloud"></i><a class="underline" href="https://www.qwiklabs.com/public_profiles/36f04194-068b-4ab8-a819-33734e48f08e">https://www.qwiklabs.com/public_profiles/36f04194-068b-4ab8-a819-33734e48f08e</a>
                    </h3>
                    <h3><i class="fas fa-code"></i></i><a class="underline" href="https://www.hackerrank.com/akshaykumarhira1">https://www.hackerrank.com/akshaykumarhira1</a>
                    </h3>
                    <h3><i class="fas fa-code"></i></i><a class="underline" href="https://www.coursera.org/user/449b6c557112072ceed7e0d23633767a">https://www.coursera.org/user/449b6c557112072ceed7e0d23633767a</a>
                    </h3>
                    <h3><i class="fas fa-code"></i></i><a class="underline" href="https://leetcode.com/akshaykumarhiran2/">https://leetcode.com/akshaykumarhiran2/</a>
                    </h3>
                    <h3><i class="fas fa-code"></i></i><a class="underline" href="https://www.udemy.com/user/akshay-kumar-hiran/">https://www.udemy.com/user/akshay-kumar-hiran/</a>
                    </h3>

                </div>
            </div>

        </div>
    </section>
    <!-- links section ends -->

    <!-- project page starts -->

    <section class="links" id="project">

        <h1 class="heading"> <span>My</span> Projects </h1>

        <div class="row">
            <div class="content2">
                <h3 class="title2">Github Hosted Projects</h3>
                <div class="info2">
                    <h3><i class="fab fa-github"></i><a class="underline" href="https://ak3294.github.io/BootstrapWebsite/">Education Website using Bootstrap</a></h3>
                    <h3><i class="fab fa-github"></i><a class="underline" href="https://ak3294.github.io/Windows11/">Windows 11 Clone Page</a></h3>
                    <h3><i class="fab fa-github"></i></i><a class="underline" href="https://aksh3294.github.io/Akshaykumarhiran_Online-Library-Portal/">Online Library
                            using Js</a></h3>
                    </h3>
                    <h3><i class="fab fa-github"></i><a class="underline" href="https://aksh3294.github.io/Akshaykumarhiran_Login-page/">Simple Login Page</a></h3>
                    <h3><i class="fab fa-github"></i><a class="underline" href="https://aksh3294.github.io/Akshaykumarhiran_FitnessHTMLwebsite/">GYM webpage using
                            HTML,CSS</a></h3>
                    <h3><i class="fab fa-github"></i></i><a class="underline" href="https://g.dev/iAk3294">Online
                            Portfolio Website using php</a></h3>
                    </h3>
                    </h3>
                    <h3><i class="fab fa-blogger"></i></i><a class="underline" href="https://akshayadhyapan.blogspot.com/?m=1">Study Blogger Website using google Blogger
                        </a></h3>
                    <h3><i class="fa fa-globe"></i></i><a class="underline" href="http://akwebtech.epizy.com/">CRUD Website using php
                        </a></h3>
                    </h3>
                </div>
            </div>

        </div>
    </section>

    <!-- project page ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>Contact</span> Me </h1>

        <div class="row">

            <div class="content">

                <h3 class="title">Contact Info</h3>

                <div class="info">
                    <h3> <i class="fas fa-envelope"></i> akshaykumarhiran2@gmail.com </h3>
                    <h3> <i class="fas fa-envelope"></i> akshayhiran04@gmail.com </h3>
                    <h3> <i class="fas fa-university"></i> 2020pietcsakshay18@poornima.org </h3>
                    <h3> <i class="fas fa-phone"></i>+91 63678 45659 </h3>
                    <h3> <i class="fas fa-phone"></i>+91 88756 32545 </h3>
                    <h3> <i class="fas fa-map-marker-alt"></i> Bhilwara, india - 311805. </h3>
                    <h3> <i class="fas fa-map-marker-alt"></i> Jaipur, india - 302022. </h3>
                </div>

            </div>
            <!-- connect php and database -->
            <form action="index.php" method="post" id='messageform'>
                <h3 class="title1">Contact Form</h3>
                <input type="text" id='name' name="name" placeholder="name" class="box">
                <input type="email" id='email' name="email" placeholder="email" class="box">
                <input type="number" id='mob' name="mob" placeholder="Mobile" class="box">
                <textarea type="text" id='message' name="message" id="" cols="30" rows="10" class="box message" placeholder="message"></textarea>
                <button name="submit" id="submitmessage" type="submit" class="btn" onclick="message()"> Send <i class="fas fa-paper-plane"></i> </button>
            </form>


        </div>


    </section>

    <!-- This is alert tag using javascript and Jquery -->
    <script>
        $('#messageform').submit(function() {
            if ($('#name').val() == '' || $('#email').val() == '' || $('#mob').val() == '' || $('#message').val() ==
                '') {
                alert('Please Fill the Remaining Blank Spaces')
                return false;
            }

        })
    </script>

    <!-- <section> -->

    <footer>
        <div class="footer-content">
            <h2>Thank You!</h2>
            <p>This Portfolio Website design and developed under the AkPortfolio Group. All the information are
                Verified and Correct. All the data is Open and information are available at open source. All the
                General rules and Guidlines are follows at the time of making website. You can visit my all social media accounts for verify the information and more understanding.Thank You! </p>
            <ul class="socials">
                <li><a href="https://www.facebook.com/akshaykumar.hiran.1"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/akshaykumar_3294/"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/in/akshay-kumar-hiran-61407a209/"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="https://twitter.com/akshay_3294"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy; <a href="https://akshayadhyapan.blogspot.com/?m=1">Akshayadhyapan.blogspot.com</a>
            </p>
        </div>

    </footer>


    <!-- contact section ends -->


    <!-- scroll top button  -->

    <a href="#home" class="top">
        <img src="images/scroll-top-img.png" alt="">
    </a>

    <!-- custom js file link  -->
    <script src="script.js"></script>


</body>

</html>