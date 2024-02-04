<?php
include 'my.php';
$username=$_POST['name'];
$password= $_POST['password'] ; #//password_hash($_POST['password'],PASSWORD_BCRYPT);
$query="SELECT Username,Password FROM login where username = '$username' and password='$password'  ";
#echo "Query : $query ";
$result =  $conn->query($query);
if ($result->num_rows > 0) {
   echo "login Sucess ";
    header("Location: login.html");
}else{
    $alt="login failed ";
}
?>
<html>
    <body>
        <script>
            var altmsg = "<?php echo $alt?>";
            window.location.href = "registeration.php";
        </script>
    </body>
</html>