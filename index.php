<?php
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con) {
        die("connection to this database failed due to" .
        mysqli_connect_error());

    }
    // echo "Success connecting to the db";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $emailSub = $_POST['emailSub'];
    $mess = $_POST['mess'];
    // $sql = "INSERT INTO `detail` (`NAME`, `EMAIL`, `NUMBER`, `TEXT`, `MESSAGE`) VALUES ('$name', '$email', '$phone', '$emailSub', '$mess');";
 
    $sql = "INSERT INTO `contact`.`detail` (`name`, `email`, `phone`, `emailSub`, `mess`) VALUES ('$name', '$email', '$phone', '$emailSub', '$mess');";

    // echo $sql;

    if($con->query($sql) == true) {
        // echo "Successfully inserted";
    }
    else {
        echo "ERROR: $sql <br> $con->error";
    }
    
    $con->close();
}
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abhishek Swami</title>
    <link rel="stylesheet" href="style.css">

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

    <!-- Header Design  -->
    <header class="header">
        <a href="#home" class="logo">Abhishek. <span class="animate" style="--i:1;"></span></a>

        <div class="bx bx-menu" id="menu-icon">
            <span class="animate" style="--i:2;"></span>
        </div>
        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#education">Education</a>
            <a href="#skills">Skills</a>
            <a href="#contact">Contact</a>

            <span class="active-nav"></span>
            <span class="animate" style="--i:2;"></span>
        </nav>
    </header>

    <!-- Home Section Design -->
    <section class="home show-animate" id="home">
        <div class="home-content">
            <h1>Hi, I'm <br> Abhishek Swami<span class="animate" style="--i:2;"></span> </h1>
            <div class="text-animate">
                <h3>Frontend Developer</h3>
                <span class="animate" style="--i:3;"></span>
            </div>
            <p>I'm a web designer and front-end developer focused on crafting clean & user-friendly experiences, I am
                passionate about building excellent software that improves the lives of those around me.
                <span class="animate" style="--i:4;"></span>
            </p>
            <div class="btn-box">
                <a href="cv.txt" target="_blank" class="btn">Download CV</a>
                <a href="#contact" class="btn">Contact Me</a>
                <span class="animate" style="--i:5;"></span>
            </div>

        </div>

        <div class="home-sci">
            <!-- <a href="#"><i class='bx bxl-facebook'></i></a> -->
            <a href="https://github.com/swamiabhishek45" target="_blank"><i class='bx bxl-github'></i></a>
            <a href="https://www.linkedin.com/in/abhishek-swami-781516244/" target="_blank"><i
                    class='bx bxl-linkedin'></i></a>
            <a href="https://twitter.com/swamiabhishek45" target="_blank"><i class='bx bxl-twitter'></i></a>
            <span class="animate" style="--i:6;"></span>
        </div>
        <div class="home-imgHover"></div>
        <span class="animate home-img" style="--i:7;"></span>

    </section>

    <!-- About Section Design -->
    <section class="about" id="about">
        <h2 class="heading">About <span>Me</span><span class="animate scroll" style="--i:1;"></span></h2>

        <div class="about-img">
            <img src="me5.png" alt="">
            <span class="circle-spin"></span>
            <span class="animate scroll" style="--i:2;"></span>
        </div>

        <div class="about-content">
            <h3>Frontend Developer!<span class="animate scroll" style="--i:3;"></span></h3>
            <p>"Hello, I'm Swami Abhishek Baswaraj, a frontend developer with a strong passion for crafting intuitive
                and visually appealing web experiences. I have honed my skills in HTML, CSS, and JavaScript, allowing me
                to bring designs to life and create seamless user interactions. I am a kind of person who never gives
                up, whatever I want, I gives my best to achieve that. This is my strength really helps me to learn new
                things. I am Self-motivated person that's why I have an ability to replace my "weakness" into the my
                "strengths".
                <span class="animate scroll" style="--i:4;"></span>
            </p>
            <p> As a frontend developer, I thrive in collaborative environments where I can contribute my technical
                expertise and creative problem-solving skills. I enjoy working closely with designers to transform their
                visions into functional and visually appealing interfaces.
                <span class="animate scroll" style="--i:4;"></span>
            </p>
            <p>
                I am excited about the opportunity to leverage my skills and contribute to projects that make a
                meaningful impact. If you are looking for a frontend developer who is passionate about creating seamless
                and engaging web experiences, I would love to connect and discuss how I can contribute to your team or
                project."
                <span class="animate scroll" style="--i:4;"></span>
            </p>
            <div class="btn-box btns">
                <a href="aboutMe.txt" class="btn">Read More</a>
                <span class="animate scroll" style="--i:5;"></span>
            </div>
        </div>
    </section>

    <!-- Education Section Design  -->
    <section class="education" id="education">
        <h2 class="heading">My <span>Journey</span><span class="animate scroll" style="--i:1;"></span></h2>
        <div class="education-row">
            <div class="education-column">
                <h3 class="title">Education<span class="animate scroll" style="--i:2;"></span></h3>

                <div class="education-box">
                    <div class="education-content">
                        <div class="content">
                            <div class="year">
                                <i class='bx bxs-calendar'></i>
                                2021 - 2025
                            </div>
                            <h3>B. Tech - Dr. Babasaheb Ambedkar Technological University</h3>
                            <p>So far I have completed 2 years at this college. It helped me explore my potential,
                                thanks to the lenient curriculum and no hard attendance rules that I got ample time to
                                dive into new domains and try new ventures.</p>
                        </div>
                    </div>

                    <div class="education-content">
                        <div class="content">
                            <div class="year">
                                <i class='bx bxs-calendar'></i>
                                2019 - 2021
                            </div>
                            <h3>HSC - Shri. Shamgir Kanishta Mahavidyalaya, Shivani Kotal</h3>
                            <p>I shifted to Shri. Shamgir Mahavidyalaya in my Class 11th and Class 12th as a nominal and
                                was doing Coaching in Latur.</p>
                        </div>
                    </div>

                    <div class="education-content">
                        <div class="content">
                            <div class="year">
                                <i class='bx bxs-calendar'></i>
                                2016 - 2019
                            </div>
                            <h3>SSC - Parimal Madhyamik Vidyalaya, Latur</h3>
                            <p>I shifted to Parimal Vidyalaya Latur in Class 7th for a better study environment from
                                village to city.</p>
                        </div>
                    </div>
                    <span class="animate scroll" style="--i:3;"></span>
                </div>
            </div>

            <!-- <div class="education-column">
                <h3 class="title">Experience</h3>

                <div class="education-box">
                    <div class="education-content">
                        <div class="content">
                            <div class="year">
                                <i class='bx bxs-calendar'></i>
                                2017 - 2018
                            </div>
                            <h3>Master Degree</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium ipsam nihil aut
                                alias saepe, praesentium aperiam quae excepturi dolorem adipisci fugiat, eos
                                molestiae.</p>
                        </div>
                    </div>

                    <div class="education-content">
                        <div class="content">
                            <div class="year">
                                <i class='bx bxs-calendar'></i>
                                2017 - 2018
                            </div>
                            <h3>Master Degree</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium ipsam nihil aut
                                alias saepe, praesentium aperiam quae excepturi dolorem adipisci fugiat, eos
                                molestiae.</p>
                        </div>
                    </div>

                    <div class="education-content">
                        <div class="content">
                            <div class="year">
                                <i class='bx bxs-calendar'></i>
                                2017 - 2018
                            </div>
                            <h3>Master Degree</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium ipsam nihil aut
                                alias saepe, praesentium aperiam quae excepturi dolorem adipisci fugiat, eos
                                molestiae.</p>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>
    </section>


    <!-- Skills Section Design -->
    <section class="skills" id="skills">
        <h2 class="heading">My <span>Skills</span> <span class="animate scroll" style="--i:1;"></span></h2>

        <div class="skills-row">
            <div class="skills-column">
                <h3 class="title">Coding Skills<span class="animate scroll" style="--i:2;"></span></h3>

                <div class="skills-box">
                    <div class="skills-content">

                        <div class="progress">
                            <h3>HTML <span>90%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>CSS <span>80%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>JavaScript <span>65%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>Python <span>75%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>
                    </div>

                    <span class="animate scroll" style="--i:3;"></span>
                </div>
            </div>

            <div class="skills-column">
                <h3 class="title">Professional Skills<span class="animate scroll" style="--i:4;"></span></h3>

                <div class="skills-box">
                    <div class="skills-content">

                        <div class="progress">
                            <h3>Web Developement <span>67%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>Web Desin <span>80%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>UI/UX Design <span>55%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>Communication <span>85%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                    </div>
                    <span class="animate scroll" style="--i:5;"></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section Design  -->
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me!</span><span class="animate scroll" style="--i:1;"></span></h2>

        <form action="index.php" method="post">
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="name" placeholder="Full Name" >
                    <span class="focus"></span>
                </div>
                <div class="input-field">
                    <input type="email" name="email" placeholder="Email Address" >
                    <span class="focus"></span>
                </div>
                </span><span class="animate scroll" style="--i:2;"></span>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="phone" placeholder="Mobile Number" >
                    <span class="focus"></span>
                </div>
                <div class="input-field">
                    <input type="text" name="emailSub" placeholder="Email Subject" >
                    <span class="focus"></span>
                </div>
                </span><span class="animate scroll" style="--i:3;"></span>
            </div>

            <div class="textarea-field">
                <textarea name="mess" id="" cols="30" rows="10" placeholder="Your Message" ></textarea>
                <span class="focus"></span>
                <span class="animate scroll" style="--i:4;"></span>
            </div>

            <div class="btn-box btns">
                <button type="submit" name="sb" class="btn">Submit</button>
                <span class="animate scroll" style="--i:5;"></span>
            </div>
        </form>
       
    </section>


    <!-- Footer Section Design  -->
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2023 by Abhi | All Rights Reserved.</p>
            <span class="animate scroll" style="--i:1;"></span>
        </div>

        <div class="footer-iconTop">
            <a href="#"><i class='bx bx-up-arrow-alt'></i></a>
            <span class="animate scroll" style="--i:3;"></span>
        </div>
    </footer>

    <script src="script.js"></script>

   
</body>

</html>
