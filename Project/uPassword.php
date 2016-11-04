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
}function Back()
{
		window.location="Update.php";
}

function pass_validate()
{
	if(document.getElementById('PF1').value.length<5)
		{
			document.getElementById('pass_error').innerHTML='&nbsp The password is too short(<5).';
			document.myForm.password.focus();  
			document.getElementById('PF1').value="";
			return false;			
		}
		else
		{
		document.getElementById('pass_error').innerHTML='&nbspOK';
		return true;
		}
		
}

</script>
<style>
body { background-image:url(Images/BloodViscosity.jpg); background-repeat:no-repeat; background-position:center; background-size:cover}
</style>
<body style="font-family:'Comic Sans MS', cursive; color:#FFF; font-size:large"><p align="right"><?php echo "Welcome ! ".$_SESSION["n"]."<br>".date("d/m/Y");?></p>
<p align="right"><input name="Log_out" type="button" value="Log_out" onClick="Log_out()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:larger; background-color:#FF3333"></p>
<center>
<form action="uPassword2.php" method="post" onSubmit="return pass_validate()" name="myForm">
<table width="200" border="0">
  <tr>
    <td>Old Password:&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><input type="password" name="old_name" style="background-color:#F66; border:1px solid #F00; border-radius:10px;"></input></td>
  </tr>
  <tr>
    <td>New Password:&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><input type="PASSWORD"  id="PF1" name="password" required style="background-color:#F66; border:1px solid #F00; border-radius:10px;" onBlur="pass_validate()"><h7 id="pass_error"></td>
  </tr>
  <tr>
    <td style="font-size:20px;" align="center"><input name="Search" type="button" value="Back" onClick="Back()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:larger; background-color:#FF3333"> </td>
    <td style="font-size:20px;" align="center"><input name="Update" type="submit" value="Update" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:larger; background-color:#FF3333"></td>
  </tr>
</table>
</form>
</body>
</html>
