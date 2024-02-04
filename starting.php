<!doctype html>
<html lang="en">

<head>


<!-- aos -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--Google Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- End Bootstrap CSS -->

    <!--Custom Css-->
    <link rel="stylesheet" href="./CSS/style.css">
    <!--End Custom Css-->
    <style>
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
.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
    float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
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
            <center><span class="px-3"><i class="bi bi-phone "></i> +91 345 123 45 </span>
          <i class="bi bi-clock"></i> Mon-Sat: 09:00 AM - 20:00 PM</center>
            </div>
            <div class="col-md-6 text-end">
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-google"></i>
                </a>
                <a href="https://instagram.com/ssangeethadr?igshid=MzNlNGNkZWQ4Mg==" class="me-4 text-reset">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
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
                    <h2 class="fw-bold  mb-2 mb-lg-0 mb-sm-0">School</h2>
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
                            <a class="nav-link" href="">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Survey Details</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact us</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mb-2 mb-lg-0 action-menu">
                    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
                    </ul>
            </div>
        </nav>
        <!--Navbar End-->

        
    </header>
    <!--Header End-->
    <div id="carouselExampleCaptions" class="carousel slide mb-3" data-bs-ride="carousel">
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
                    <h5>Shree Suryodaya Secondary School</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid w-100 h-100 overflow-hidden"
                    src="school8.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                    <h5>Shree Suryodaya Secondary School</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid w-100 h-100 overflow-hidden"
                    src="school5.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                    <h5>Shree Suryodaya Secondary School</h5>
                    <p>Some representative placeholder content for the third slide.</p>
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
                                <i class="bi bi-gem me-3"></i>Company name
                            </h6>
                            <p>
                                Here you can use rows and columns to organize your footer content. Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit.
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
                                <a href="https://www.google.com/maps/place/Joythinagar,+Chikkamagaluru,+Karnataka+577101/@13.3285586,75.7724923,17.04z/data=!4m6!3m5!1s0x3bbad9e4041e59d1:0x47628cf07747f5d6!8m2!3d13.3218692!4d75.7763927!16s%2Fg%2F1jky3wggx?entry=ttu" class="text-reset">Chikkmagaluru</a>
                            </p>
                            <p>
                                <a href="https://www.google.com/maps/place/Mysuru,+Karnataka/@12.3106334,76.5532875,12z/data=!3m1!4b1!4m6!3m5!1s0x3baf70381d572ef9:0x2b89ece8c0f8396d!8m2!3d12.2958104!4d76.6393805!16zL20vMGo2MDM?entry=ttu" class="text-reset">Mysore</a>
                            </p>
                            <p>
                                <a href="https://www.google.com/maps/place/Mangaluru,+Karnataka/@12.9229793,74.7696613,12z/data=!3m1!4b1!4m6!3m5!1s0x3ba35a4c37bf488f:0x827bbc7a74fcfe64!8m2!3d12.9141417!4d74.8559568!16zL20vMDFzdjZr?entry=ttu" class="text-reset">Mangalore</a>
                            </p>
                            <p>
                                <a href="https://www.google.com/maps/place/Hassan,+Karnataka/@13.0126205,76.0833851,14z/data=!3m1!4b1!4m6!3m5!1s0x3ba548230ba42747:0xb0db4fb6b7a1f53f!8m2!3d13.0033234!4d76.1003894!16zL20vMDdkMGxo?entry=ttu" class="text-reset">Hassan</a>
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
                            <p><i class="bi bi-phone me-3"></i> + 91 567 234 29</p>
                            <p><i class="bi bi-phone me-3"></i> + 91 567 234 29</p>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


            <!-- aos -->
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

            <script>
              AOS.init();
            </script>

</body>

</html>