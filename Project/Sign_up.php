

<html>
<head>
<script>
function redirect()
{
	window.location="Login.html";
}
</script>
</head>
<?php
$host="localhost";
$username="root";
$password="";
$db_name="project";
$tbl_name="users";

$con=mysqli_connect($host, $username, $password, $db_name)or die("cannot connect");

$name = $_POST["name"];
$bloodGroup = $_POST["Blood"];
$age = $_POST["age"];
$Sex = $_POST["sex"];
$Phone_no = $_POST["phone_no"];
$Address = $_POST["address"];
$Password = $_POST["password"];





$sql="insert into $tbl_name (Name,Blood_group,Age,Sex,Phone_no,Address,Password) values('$name','$bloodGroup','$age','$Sex','$Phone_no','$Address','$Password')";

$result = mysqli_query($con,$sql);
if($result)
{
	echo "<center><h3>Thanks for registering. Your effort is apperciated. <br><br>Click on back to login. </h3></center>";
}
else
{
	echo "<center><h3>User name already registered.<br> ".mysqli_error($con)."</h3></center>";	
}

mysqli_close($con);
?>
<style>
body { background-image:url(Images/BloodViscosity.jpg); background-repeat:no-repeat; background-position:center; background-size:cover}
h3 {font-family:"Comic Sans MS", cursive; font-size:24px; color:#FFF;}
</style>
<body>
<center>
<br>
<input name="Back" type="button" value="Back" onClick="redirect()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:24px; background-color:#FF3333" >
</center>
</body>
</html>
