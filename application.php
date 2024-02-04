<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $name=$_POST['name'];
    $dateofbirth=$_POST['dateofbirth'];
    $gender=$_POST['gender'];
    $standard=$_POST['standard'];
    $address=$_POST['address'];
    $adhar=$_POST['adhar'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_POST['email'];
    include 'my.php';
    
    $sql="INSERT INTO regi(name,dateofbirth,gender,standard,address,adhar,phonenumber,email)
    VALUES('$name','$dateofbirth','$gender','$standard','$address','$adhar','$phonenumber','$email')";
    if(mysqli_query($conn,$sql))
{
$alt="$name applied sucessfully";
}
else
{
echo "Error:".$sql."<br>".mysqli_error($conn);
}
    }
mysqli_close($conn);

?>

<html>
    <head>
        <title>Alert</title>
</head>
        <body>
           
               <script>
                var altmessage = "<?php echo $alt; ?>"
                alert (altmessage);
                window.location.href = " ";
                </script>
        </body>
</html>       

