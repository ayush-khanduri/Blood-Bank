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
function age_validate()
{ 
if(document.getElementById('TF2').value >99 || document.getElementById('TF2').value<18 || isNaN(document.getElementById('TF2').value))    
{ 
document.getElementById('age_error').innerHTML='&nbsp;Invalid Age';  
document.myForm.age.focus();  
document.getElementById('TF2').value="";
return false;
}
else
document.getElementById('age_error').innerHTML='&nbsp;OK';  
return true;
}

</script>
<style>
body { background-image:url(Images/BloodViscosity.jpg); background-repeat:no-repeat; background-position:center; background-size:cover}
</style>
<body style="font-family:'Comic Sans MS', cursive; color:#FFF; font-size:large"><p align="right"><?php echo "Welcome ! ".$_SESSION["n"]."<br>".date("d/m/Y");?></p>
<p align="right"><input name="Log_out" type="button" value="Log_out" onClick="Log_out()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:larger; background-color:#FF3333"></p>
<center>
<form action="uAge2.php" method="post" onSubmit="return age_validate()" name="myForm">
<table width="237" height="91" border="0">
  <tr>
    <td width="53" height="44">Age:&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td width="149"><input type="text"  id="TF2" name="age" required style="background-color:#F66; border:1px solid #F00; border-radius:10px;" onBlur="age_validate()"><h7 id="age_error"></h7>
  </tr>
  <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
  <tr>
    <td height="41" style="font-size:20px;"><input name="Search" type="button" value="Back" onClick="Back()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:larger; background-color:#FF3333"> </td>
    <td style="font-size:20px;" align="center"><input name="Update" type="submit" value="Update" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:larger; background-color:#FF3333"></td>
  </tr>
</table>
</form>

</center>
</body>
</html>
