<?php 
session_start();
if(!isset($_SESSION["n"]))
{
header("location:Login.html");	
}
?>
<html>
<head>
<script>
function redirect()
{
	window.location="Update.php";
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

$name=$_POST["age"];
$vae=$_SESSION["n"];

$sql="Update $tbl_name set Age='$name' where Name='$vae'";

$result = mysqli_query($con,$sql);

mysqli_close($con);
?>
<script>
function Log_out()
{
	window.location="Log_out.php";
}
</script>
<style>
body { background-image:url(Images/BloodViscosity.jpg); background-repeat:no-repeat; background-position:center; background-size:cover}
h3 {font-family:"Comic Sans MS", cursive; font-size:24px; color:#FFF;}
</style>
<body>
<p align="right" style="font-family:'Comic Sans MS', cursive; color:#FFF; font-size:large"><?php echo "Welcome ".$_SESSION["n"]."<br>".date("d/m/Y");?></p>
<p align="right"><input name="Log_out" type="button" value="Log out" onClick="Log_out()"onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:24px; background-color:#FF3333"></p>
<center>
<h3>Your Age has been sucessfully changed to <?php echo $name?> 
<br>
<input name="Back" type="button" value="Back" onClick="redirect()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:24px; background-color:#FF3333">
</center>
</body>
</html>