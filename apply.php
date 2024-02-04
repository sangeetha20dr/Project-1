<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
     <!-- End Bootstrap CSS -->
        <!--Google Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

   

    <!--Custom Css-->
    <link rel="stylesheet" href="style.css">
    <!--End Custom Css-->
</head>

<body>
    <div class="container login-form">
        <div class="row mt-4 justify-content-center">

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="offest-md-4">
                            <h1 class="text-center mt-4 mb-4 fw-bolder">Application Form</h1>
                            <form class="form-login" action="application.php" method="post">
                                <!-- Email input -->
                                 <!-- Email input -->
                                 <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example1">Name</label>
                                    <input type="name" id="form2Example1" name="name" class="form-control" placeholder="Name" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example1">Date Of Birth</label>
                                    <input type="date" id="form2Example1" name="dateofbirth"class="form-control" placeholder="Date Of Birth"/>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example1">Gender : </label>
                                    <label for="male" style="margin-left: 6px;">Male</label>
                                    <input type="radio" id="male" name="gender" value="male">
                                    <label for="female"  style="margin-left: 6px;">Female</label>
                                    <input type="radio" id="female" name="gender" value="female">
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example1">Standard</label>
                                    <input type="standard" id="form2Example1" name="standard"class="form-control" placeholder="standard"/>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example1">Address</label>
                                    <input type="address" id="form2Example1" name="address"class="form-control" placeholder="Address"/>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example1">Adhar Number</label>
                                    <input type="number" id="form2Example1"  name="adhar"class="form-control" placeholder="Adhar Number"/>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example1">Phone Number</label>
                                    <input type="number" id="form2Example1" name="phonenumber"class="form-control" placeholder="Number"/>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example1">Email address</label>
                                    <input type="email" id="form2Example1" name="email" class="form-control" placeholder="Email" />
                                </div>
                                <!-- Password input -->
                                <!-- 2 column grid layout for inline styling -->
                                <div class="row mb-4">
                                    <div class="col d-flex">
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="form2Example31"
                                                checked />
                                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Submit button -->
                                <div class="">
                                    <button type="submit" class="col-12 btn btn-primary btn-block mb-4">Apply Now</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>