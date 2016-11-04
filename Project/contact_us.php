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
		window.location="first_page.php";
}
</script>
<style>
body { background-image:url(Images/BloodViscosity.jpg); background-repeat:no-repeat; background-position:center; background-size:cover}
</style>
<body style="font-family:'Comic Sans MS', cursive; color:#FFF;">

<table width="1350" border="0">
  <tr>
    <td width="1083"><marquee behavior="alternate"><img src="Images/2716.png" width="179" height="196"></marquee></td>
    <td width="257"><p align="right"><?php echo "Welcome ! ".$_SESSION["n"]."<br>".date("d/m/Y");?></p>
<p align="right"><br><br><br><br><br><br></p></td>
  </tr>
</table>


<center><br><br>
<table width="1167" height="282" border="0">
  <tr>
    <td width="232" ><img src="Images/Rishabh.jpg" width="195" height="195"></td>
    <td width="228" ><img src="Images/Sarthak.jpg" width="195" height="195"></td>
    <td width="227" ><img src="Images/Khanduri..jpg" width="195" height="195"></td>
    <td width="238" ><img src="Images/Nilesh.jpg" width="195" height="195"></td>
    <td width="215" ><img src="Images/Aashay.jpg" width="195" height="195"></td>
    
  </tr>
  <tr>
    <td><br>Rishabh Jain<br>Btech,CSE,Student<br><u>Rishabh.89@gmail.com</u><br>+91-9634913387</td>
    <td><br>Sarthak Kulshreshtha<br>Btech,CSE,Student<br>
      <u>kulshreshtha@gmail.com</u><br>+91-9971339984</td>
    <td><br>Ayush Khanduri<br>Btech,CSE,Student<br><u>Akchampu@gmail.com</u><br>+91-8527854374</td>
    <td><br>Nilesh Kumar<br>Btech,CSE,Student<br><u>Nilesh.Kumar@gmail.com</u><br>+91-9212334550</td>
    <td><br>Aashay Kumar<br>Btech,CSE,Student<br>aashaykumarrocks@gmail.com<br>+91-9643880655</td>
  </tr>
  </table>
  <br><br>

<input name="Search" type="button" value="Back" onClick="Back()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:larger; background-color:#FF3333">
</center>
</body>
</html>