<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $name=$_POST['name'];
    $dateofbirth=$_POST['dateofbirth'];
    $gender =$_POST['gender'];#password_hash($_POST['password'],PASSWORD_BCRYPT);
    $address=$_POST['address'];
    $phonenumber=$_POST['phone'];
    $email=$_POST['email'];
    include 'my.php';
    $query = "SELECT * FROM registerr WHERE email = '$email'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) 
    {
        $message="Email is already registered. Please use a different email!";
    }
    else
    {
    $sql="INSERT INTO registerr(name,dateofbirth,gender,address,phone,email)
    VALUES('$name','$dateofbirth','$gender','$address','$phonenumber','$email')";
    if(mysqli_query($conn,$sql))
{
$alt="sucessfully submitted ";
}
else
{
echo "Error:".$sql."<br>".mysqli_error($conn);
}
    }
mysqli_close($conn);
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
                window.location.href = " ";
                </script>
               <script>
                var altmessage = "<?php echo $alt; ?>"
                alert (altmessage);
                window.location.href = " ";
                </script>
        </body>
</html>       

