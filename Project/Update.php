<?php
session_start();
if(!isset($_SESSION["n"]))
{
header("location:Login.html");	
}
?>
<html>
<script>
function uName()
{
window.location="uName.php";	
}
function uAge()
{
window.location="uAge.php";	
}
function uPassword()
{
window.location="uPassword.php";	
}
function uPhone_no()
{
window.location="uPhone_no.php";	
}
function uAddress()
{
window.location="uAddress.php";	
}
function Log_out()
{
	window.location="Log_out.php";
}
function Back()
{
		window.location="first_page.php";
}
</script>
<style>
body { background-image:url(Images/BloodViscosity.jpg); background-repeat:no-repeat; background-position:center; background-size:cover}
</style>
<body style="font-family:'Comic Sans MS', cursive; color:#FFF; font-size:large"><p align="right"><?php echo "Welcome ! ".$_SESSION["n"]."<br>".date("d/m/Y");?></p>
<p align="right"><input name="Log_out" type="button" value="Log_out" onClick="Log_out()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:larger; background-color:#FF3333"></p>
<center>
<h2>Which information would you like to update?</h2>
<form name="form1" method="post" action="Update1.php">
  <p>
    <label>
      <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_0" onClick="uName()">
      Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <br>
    <label>
      <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_1" onClick="uAge()">
      Age&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <br>
    <label>
      <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_2" onClick="uPassword()">
      Password&nbsp;</label>
    <br>
    <label>
      <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_3" onClick="uPhone_no()">
      Phone no&nbsp;&nbsp;</label>
    <br>
    <label>
      <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_4" onClick="uAddress()">
      Address&nbsp;&nbsp;&nbsp;</label>
</form>

<br>
<input name="Search" type="button" value="Back" onClick="Back()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:larger; background-color:#FF3333"> 
</center>
</body>
</html>