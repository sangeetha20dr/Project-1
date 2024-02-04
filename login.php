<?php
include ("my.php");
$email=$_POST['email'];
$password=$_POST['password'];#//password_hash($_POST['password'],PASSWORD_BCRYPT);
$query="SELECT email,password FROM register where email = '$email' and password='$password'  ";


#echo "Query : $query ";
$result =  $conn->query($query);
if ($result->num_rows > 0) {
   $message="Login Sucess ";
   
}else{
    $alt="Invalid email or password ";
}
?>
<html>
    <head>
        <title>Alert</title>
</head>
        <body>
            <script>
                var alertmessage = "<?php echo $message; ?>"
                alert (alertmessage);
                window.location.href = "home1.php";
                </script>
               <script>
                var altmessage = "<?php echo $alt; ?>"
                alert (altmessage);
                window.location.href = "login.html";
                </script>
        </body>
</html>       