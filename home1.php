<!doctype html>
<html lang="en">

<head>


<!-- aos -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    <!--Google Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- End Bootstrap CSS -->

    <!--Custom Css-->
    <link rel="stylesheet" href="./CSS/style.css">
    <!--End Custom Css-->
    <style>


.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 24
}
        #about_section, #portfolio_section, #team_section, #services_section, #contactus_section {
	font-family: 'Open Sans', sans-serif;
	color: #2E3D49;
	position: relative;
}
.diffSection {
	width: 100%;
	/*position: relative;*/
	justify-content: center;
	align-items: center;
}
.diffSection .content {
	margin: 10px;
	text-align: center;
	padding: 10px 100px;
	font-size:1.1em;
}
.extra {
	width: 100%;
}
.extra p {
	padding: 300px;
	padding-bottom: 150px;
	font-size: 50px;
	text-align: center;
	color: #fff;
	background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0.7)),url("school5.jpg");
	background-size: cover;
	background-attachment: fixed;
	font-family: cursive;
	z-index: -9;
}
.smbox {
	display: flex;
	flex-wrap: wrap;
	transform: translateY(-100px);
	justify-content: center;
}
.smbox span {
	margin: 1%;
	background: #fff;
	box-shadow: inset 0px 0px 25px rgba(0,0,0,0.2),
						0 0 40px rgba(0,0,0,0.3);
	border-radius: 10px;
	padding: 30px 50px;
	cursor: pointer;
}
.smbox span:hover {
	transform: scale(1.3);
	transition: .5s ease;
}
.smbox .data {
	font-size: 80px;
	color: #FA6146;	
}
.smbox .det {
	font-size: 20px;
	color: #272529;
	font-family:cursive;
}
    @keyframes blink {
      0% {
        opacity: 1;
      }
      50% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }

    .blinking-element {
      animation: blink 1s infinite; /* Adjust the duration as needed */
    }

    </style>
</head>
<body>
    <!--Header Start-->
    <header>
         <section id="topbar" class="mb-2 mb-lg-0 mb-sm-0 d-none d-lg-flex align-items-center pt-2 pb-2 bg-primary text-white topbar-transparent">
        <div class="container">
          <div class="row">
            <div class="col-lg-6   text-start">
            <center><span class="px-3"><i class="bi bi-phone "></i> +91 9980275039 </span>
          <i class="bi bi-clock"></i> Mon-Sat: 09:00 AM - 20:00 PM</center>
            </div>
            <div class="col-md-6 text-end">
                <a href="https://m.facebook.com/" class="me-4 text-reset">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://twitter.com/login?lang=en" class="me-4 text-reset">
                    <i class="bi bi-twitter"></i>
                </a>
                <a href="https://familylink.google.com/" class="me-4 text-reset">
                    <i class="bi bi-google"></i>
                </a>
                <a href="https://instagram.com/ssangeethadr?igshid=MzNlNGNkZWQ4Mg==" class="me-4 text-reset">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/help/linkedin/answer/a522735" class="me-4 text-reset">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a href="https://github.com/features/code-search" class="me-4 text-reset">
                    <i class="bi bi-github"></i>
                </a>
            </div>
          </div>
        </div>
      </section>
      
        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <h2 class="fw-bold  mb-2 mb-lg-0 mb-sm-0"><img src="edutech.jpg" width="120px"></h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bi bi-list"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about_section">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#survey_section">Survey Details</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="gallery.html">Facilites</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact_section">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="apply.php"  style=" color: #ff0000;">Application Form</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mb-2 mb-lg-0 action-menu">
                        <li class="nav-item">
                            <a class="nav-link " href="logout.php">Logout
                                <span class="material-symbols-outlined">
                                  logout
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Navbar End-->
    </header>
    <!--Header End-->
    <div id="carouselExampleCaptions" class="carousel slide mb-3 carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid w-100 h-100 overflow-hidden"
                    src="school2.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                <h5>EduTech Institute</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid w-100 h-100 overflow-hidden"
                    src="school8.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                <h5>EduTech Institute</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid w-100 h-100 overflow-hidden"
                    src="school5.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                    <h5>EduTech Institute</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about_section" class="about mt-5"  data-aos="fade-up"
     data-aos-duration="2000">
            <div class="container-fluid">
                <h2 class="h1-responsive font-weight-bold text-center my-2"  data-aos="fade-up"
     data-aos-duration="3000">About</h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-1" data-aos="fade-up"
     data-aos-duration="3000">Do you have any questions? Please do not hesitate to
                    contact us directly. Our team will come back to you within
                    a matter of hours to help you.</p>
                <div class="row  pt-5 pb-5">
    
                    <div class="col-lg-5 align-items-stretch video-box"
                        style='background-image: url("https://cdn.pixabay.com/photo/2018/01/17/07/06/laptop-3087585_960_720.jpg");'>
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4"
                            data-vbtype="video" data-autoplay="true"></a>
                    </div>
    
                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">
    
                        <div class="content"  data-aos="fade-up"
     data-aos-duration="3000">
                            <h3>Literacy in its broadest sense describes<strong>"particular ways of thinking about and doing reading and writing"</strong></h3>
                            <p>
                                Reading, in this view, is always reading something for some purpose; writing is always writing something for someone for some purpose.
                            </p>
                            <p class="font-italic">
                                In other words, humans in literate societies have sets of practices for producing and consuming writing,
                                 and they also have beliefs about these practices.
                            </p>
                            <ul>
                                <li><i class="bx bx-check-double"></i> Beliefs about reading, writing and their value for society and for the individual always influence the ways literacy is taught, learned, and practiced.</li>
                                <li><i class="bx bx-check-double"></i> A person is literate who can 'read and understand everything</li>
                                <li><i class="bx bx-check-double"></i> This definition focuses on comprehension and was created thinking of mother "tongue literacy",
                                     and does not include reciting passages in another language that the person does not understand.
                                </li>
                            </ul>
                            <p>
                                Some researchers suggest that the study of "literacy" as a concept can be divided into two periods: the period before 1950, when literacy was understood solely as alphabetical literacy (word and letter recognition) 
                                and the period after 1950, when literacy slowly began to be considered as a wider concept and process, including the social and cultural aspects of reading and writing and functional literacy.Adult literacy rates, 2015 or most recent observation
                            </p>
                        </div>
    
                    </div>
    
                </div>
    
            </div>
        </section><!-- End About Section -->
        </main>
         <!-- PORTFOLIO -->
<div class="diffSection" id="survey_section" data-aos="fade-up"
     data-aos-duration="3000">
    <center><p style="font-size: 50px; padding: 100px; padding-bottom: 40px;">Survey Details</p></center>
    <div class="content">
        <p data-aos="fade-up"
     data-aos-duration="3000">
            “Education is the passport to the future, for tomorrow belongs to those who prepare for it today.” “Your attitude, not your aptitude, will determine your altitude.” “If you think education is expensive, try ignorance.” “The only person who is educated is the one who has learned how to learn …and change.”
        </p>
    </div>
</div>
<div class="extra" >
    <?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
$mysql_name="1.project";
$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_name);
if(!$conn)
{
    die("connection failed:".mysqli_connect_error());
}

    $sql1 = "SELECT count(gender) AS gendercount from regi ";
	$sql2 ="SELECT count(gender) AS femalecount from regi where gender='female' ";
    $sql3 = "SELECT count(gender) AS malecount from regi where gender='male' ";
    $sql4 = "SELECT count(gender) AS statuscount from regi where status='completed' ";
    $result = $conn->query($sql1);

	if ($result->num_rows > 0) {
        while($row=$result->fetch_assoc()){
           $genderCount =  $row["gendercount"];
        }
	}

	$result2 = $conn->query($sql2);

	if ($result2->num_rows > 0) {
        while($row=$result2->fetch_assoc()){
           $femaleCount =  $row["femalecount"];
        }
	}

	$result3 = $conn->query($sql3);

	if ($result3->num_rows > 0) {
        while($row=$result3->fetch_assoc()){
           $maleCount =  $row["malecount"];
        }
	}
    $result4 = $conn->query($sql4);

	if ($result4->num_rows > 0) {
        while($row=$result4->fetch_assoc()){
           $statusCount =  $row["statuscount"];
        }
	}
	
	$conn->close();
	?>
    <p>Education Is a Beautiful Art</p>
    <div class="smbox" >
    <span><center><div class="data"><div class="blinking-element"><?php echo $genderCount;?></div></div><div class="det">Enrolled Students</div></center></span>
    <span><center><div class="data"><div class="blinking-element"><?php echo $femaleCount;?></div></div><div class="det">Girls</div></center></span>
    <span><center><div class="data"><div class="blinking-element"><?php echo $maleCount;?></div></div><div class="det">Boys</div></center></span>
    <span><center><div class="data"><div class="blinking-element"><?php echo $statusCount;?></div><div class="det">OutPut Students</div></center></span>
    </div>
</div>




    <!-- help -->

    <section class="hello">
            
        <div class="container mb-5" id="contact_section" data-aos="fade-up" data-aos-duration="3000">

            <h2 class="h1-responsive font-weight-bold text-center my-4" data-aos="fade-up" data-aos-duration="3000">Contact us</h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-5"data-aos="fade-up" data-aos-duration="3000">Do you have any questions? Please do not hesitate
                    to contact us directly. Our team will come back to you within </p>

            <div class="row">
                <div class="col-md-6">
                    <!--Section heading-->
                
                    <div class="col-md-12 mb-md-0 mb-5">
                        <form id="contact-form" name="contact-form" action="cont.php" method="POST">
                            <div class="row">


                            
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <label for="name" class="">Your name</label>
                                        <input type="text" id="name" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <label for="email" class="">Your email</label>
                                        <input type="email" id="email" name="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <label for="subject" class="">Subject</label>
                                        <input type="text" id="subject" name="subject" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <label for="message">Your message</label>
                                        <textarea type="text" id="message" name="message" rows="2"
                                            class="form-control md-textarea"></textarea>
                                    </div>

                                </div>
                            </div>
                            <!--Grid row-->


                        <fieldset>
                             <button type="submit" name="send" id="contact-submit" style="margin: 30px 260px;" class="btn btn-success">Send</button>
                        </fieldset>
                        <div class="status"></div>
                    </div>
                    
                    </form>
                    <!--Grid column-->

                </div>

                <div class="col-md-6">
                                    
                    <!--Grid column-->
                    <div class="col-md-6 text-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9012.89627647738!2d75.76975555679824!3d13.323387475719082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbad9e4041e59d1%3A0x47628cf07747f5d6!2sJoythinagar%2C%20Chikkamagaluru%2C%20Karnataka%20577101!5e0!3m2!1sen!2sin!4v1700647182146!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <!--Grid column-->
    
                </div>
            </div>


        </div>

    </section>
            <!--help-->






        <!-- Footer -->
        <footer class="text-center text-lg-start bg-primary py-3 text-white">
          
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="bi bi-gem me-3"></i>EduTech
                            </h6>
                            <p>
                            A person is literate who can 'read and understand everything he would have understood if had been spoken top him
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Branchs
                            </h6>
                            <p>
                                <a  >Chikkmagaluru</a>
                            </p>
                            <p>
                                <a  >Mysore</a>
                            </p>
                            <p>
                                <a  >Mangalore</a>
                            </p>
                            <p>
                                <a  >Hassan</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Useful links
                            </h6>
                            <p>
                                <a href="https://www.bing.com/ck/a?!&&p=cff5ec0861593b6bJmltdHM9MTcwMDQzODQwMCZpZ3VpZD0yODJiYjRiNC1hMGIxLTZmZTctM2ViYS1hNjhiYTExYzZlZWUmaW5zaWQ9NTUwMA&ptn=3&ver=2&hsh=3&fclid=282bb4b4-a0b1-6fe7-3eba-a68ba11c6eee&psq=education+website&u=a1aHR0cHM6Ly9kaWtzaGEuZ292LmluL2hlbHAvZ2V0dGluZy1zdGFydGVkL2xvZ2luLw&ntb=1" class="text-reset">Disha.gov.in</a>
                            </p>
                            <p>
                                <a href="https://www.bing.com/ck/a?!&&p=b914e09b741dbd80JmltdHM9MTcwMDQzODQwMCZpZ3VpZD0yODJiYjRiNC1hMGIxLTZmZTctM2ViYS1hNjhiYTExYzZlZWUmaW5zaWQ9NTYyOA&ptn=3&ver=2&hsh=3&fclid=282bb4b4-a0b1-6fe7-3eba-a68ba11c6eee&psq=education+website&u=a1aHR0cHM6Ly93d3cuY291cnNlcmEub3JnL2NvbGxlY3Rpb25zL2ZyZWUtb25saW5lLWNvdXJzZXMtZmluaXNoLWluLWEtZGF5&ntb=1" class="text-reset">Cousera.org</a>
                            </p>
                            <p>
                                <a href="https://www.bing.com/ck/a?!&&p=42c9a1dd8ea412e6JmltdHM9MTcwMDQzODQwMCZpZ3VpZD0yODJiYjRiNC1hMGIxLTZmZTctM2ViYS1hNjhiYTExYzZlZWUmaW5zaWQ9NTY0NA&ptn=3&ver=2&hsh=3&fclid=282bb4b4-a0b1-6fe7-3eba-a68ba11c6eee&psq=education+website&u=a1aHR0cHM6Ly93d3cud2VhcmV0ZWFjaGVycy5jb20vZ29vZ2xlLWNsYXNzcm9vbS1hcHBzLw&ntb=1" class="text-reset">Weareteacher.com</a>
                            </p>
                            <p>
                                <a href="https://www.bing.com/ck/a?!&&p=713e304a3306fa57JmltdHM9MTcwMDQzODQwMCZpZ3VpZD0yODJiYjRiNC1hMGIxLTZmZTctM2ViYS1hNjhiYTExYzZlZWUmaW5zaWQ9NTYyOQ&ptn=3&ver=2&hsh=3&fclid=282bb4b4-a0b1-6fe7-3eba-a68ba11c6eee&psq=education+website&u=a1aHR0cHM6Ly93d3cuZWRzeXMuaW4vNDAtZnJlZS1lZHVjYXRpb25hbC13ZWJzaXRlcy15b3Utc2hvdWxkbnQtbWlzcy8&ntb=1" class="text-reset">Help</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Contact
                            </h6>
                            <p><i class="bi bi-geo-alt"></i> Chikkmagaluru, 577101, India</p>
                            <p>
                                <i class="bi bi-envelope me-3"></i>
                                sangeethadr@gmail.com
                            </p>
                            <p><i class="bi bi-phone me-3"></i> + 91 7019318255</p>
                            <p><i class="bi bi-phone me-3"></i> + 91 9380994064</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center py-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2023 Copyright:
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>


            <!-- aos -->
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

            <script>
              AOS.init();
            </script>

</body>

</html>