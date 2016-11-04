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
</script>
<style>
body { background-image:url(Images/BloodViscosity.jpg); background-repeat:no-repeat; background-position:center; background-size:cover}
</style>
<body style="font-family:'Comic Sans MS', cursive; color:#FFF; font-size:large"><p align="right"><?php echo "Welcome ! ".$_SESSION["n"]."<br>".date("d/m/Y");?></p>
<p align="right"><input name="Log_out" type="button" value="Log_out" onClick="Log_out()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:larger; background-color:#FF3333"></p>
<center>
<form action="uAddress2.php" method="post">
<table width="200" border="0">
  <tr>
    <td>Address:&nbsp;&nbsp;&nbsp;</td>
    <td><label>
      <textarea name="new_name" id="ta1" cols="45" rows="5" style="background-color:#F66; border:1px solid #F00; border-radius:10px;"></textarea>
    </label></td>
  </tr>
  <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
  <tr>
    <td style="font-size:20px;" align="center"><input name="Search" type="button" value="Back" onClick="Back()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:larger; background-color:#FF3333"> </td>
    <td align="center" style="font-size:20px;"> <input name="Update" type="submit" value="Update" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:larger; background-color:#FF3333"></td>
  </tr>
</table>
</form>
</body>
</html>
