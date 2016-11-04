<?php
session_start();
if(!isset($_SESSION["n"]))
{
header("location:Login.html");	
}
?>

<?php

$host="localhost";
$username="root";
$password="";
$db_name="project";
$tbl_name="users";

$con=mysqli_connect($host, $username, $password, $db_name)or die("cannot connect");

//mysql_select_db($db_name , $con)or die("cannot select DB");

$name=$_SESSION["n"];

$sql="Delete from $tbl_name where Name='$name'";
$result = mysqli_query($con,$sql);
$sql="insert into $tbl_name (Name,Blood_group,Age,Sex,Phone_no,Address,Password) values('$name','$bloodGroup','$age','$Sex','$Phone_no','$Address','$Password')";
$result = mysqli_query($con,$sql1);

mysqli_close($con);
?>