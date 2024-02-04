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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--Custom Css-->
    <link rel="stylesheet" href="login.css">
    <!--End Custom Css-->
</head>

<body>
    <div class="container login-form">
        <div class="row mt-4 justify-content-center">

            <div class="col-md-4">
                <div class="contact-form">
                    <div class="card-body">
                        <div class="offest-md-4">
                            <h1 class="text-center mb-4 fw-bolder">ADMIN</h1>
                            <form class="form-login" action="adminlog.php" method="post">
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example1" style="color: white;">Username</label>
                                    <input type="text" id="form2Example1" name="name" class="form-control" placeholder="Username" />
                                </div>
                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example2"  style="color: white;">Password</label>
                                    <!-- Simple link -->
                                    <input type="password" id="form2Example2" name="password" class="form-control" placeholder="Password"/>
                                </div>
                                <!-- 2 column grid layout for inline styling -->
                                <div class="row mb-4">
                                    <div class="col d-flex">
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="form2Example31"
                                                checked />
                                            <label class="form-check-label" for="form2Example31"  style="color: white;"> Remember me </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit button -->
                                <div class="col-md-12">
                                    <button type="submit" class="col-12 btn btn-primary btn-block mb-4">Sign
                                        in</button>
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

<?php
include ("my.php");
$name=$_POST['name'];
$password=$_POST['password'];#//password_hash($_POST['password'],PASSWORD_BCRYPT);
$query="SELECT username,password FROM admin where username = '$name' and password='$password'  ";


#echo "Query : $query ";
$result =  $conn->query($query);
if ($result->num_rows > 0) {
   echo "login Sucess ";
    header("Location: admin.php");
}else{
    $alt="login failed ";
}
?>
<html>
    <body>
        <script>
            var altmsg = "<?php echo $alt?>";
            window.location.href = "adminlog.php";
        </script>
   </body>
</html>