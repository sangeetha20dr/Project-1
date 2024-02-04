<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
$mysql_name="1.project";
$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_name);
if(!$conn)
{
    die("connection falied:".mysqli_connect_error());
}
