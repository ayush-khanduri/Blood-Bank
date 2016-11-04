<?php
session_start();
if(!isset($_SESSION["n"]))
{
header("location:Login.html");	
}
?>
<html>
<script>
function Log_out()
{
	window.location="Log_out.php";
}
function Back()
{
		window.location="Update.php";
}
function phone_validate()
{ 
if(document.getElementById('PF3').value.length !=10 || isNaN(document.getElementById('PF3').value) )    
{ 
document.getElementById('phone_error').innerHTML='&nbsp;Invalid Phone No';  
document.myForm.phone_no.focus();  
document.getElementById('PF3').value="";
return false;
}
else
document.getElementById('phone_error').innerHTML='&nbsp;OK';  
return true;
}
</script>
<style>
body { background-image:url(Images/BloodViscosity.jpg); background-repeat:no-repeat; background-position:center; background-size:cover}
</style>
<body style="font-family:'Comic Sans MS', cursive; color:#FFF; font-size:large"><p align="right"><?php echo "Welcome ! ".$_SESSION["n"]."<br>".date("d/m/Y");?></p>
<p align="right"><input name="Log_out" type="button" value="Log_out" onClick="Log_out()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:larger; background-color:#FF3333"></p>
<center>
<form action="uPhone_no2.php" method="post" onSubmit="return phone_validate()" name="myForm">
<table width="251" height="104" border="0">
  <tr>
    <td>Phone no:&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><input type="text"  id="PF3" name="phone_no" required style="background-color:#F66; border:1px solid #F00; border-radius:10px; " onBlur="phone_validate()"><h7 id="phone_error"></h7></td>
  </tr>
  <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
  <tr>
     <td style="font-size:20px;" align="center"><input name="Search" type="button" value="Back" onClick="Back()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:larger; background-color:#FF3333"> </td>
    <td style="font-size:20px; align="center"><input name="Update" type="submit" value="Update" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:larger; background-color:#FF3333"></td>
  </tr>
</table>
</form>
</body>
</html>
