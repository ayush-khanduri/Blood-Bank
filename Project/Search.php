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
<center>
<p align="right"><?php echo "Welcome ! ".$_SESSION["n"]."<br>".date("d/m/Y");?></p>
<p align="right"><input name="Log_out" type="button" value="Log_out" onClick="Log_out()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:larger; background-color:#FF3333"></p>
<?php
 echo "<h1>welcome ".$_SESSION["n"]."</h1><br><br><br><br><br><br>"; 
?>
<form action="Search1.php" method="post" name="myFrame">
 <table>
 <TR>
		<TD>BLOOD GROUP: </TD>
        <Td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</Td>
		<TD>
        <SELECT NAME="Blood" style="background-color:#FF3333; border:1px solid #F00;">
<OPTION VALUE="A+"  SELECTED >A+
<OPTION VALUE="A-">A-
<OPTION VALUE="B+">B+
<OPTION VALUE="B-">B-
<OPTION VALUE="AB+">AB+
<OPTION VALUE="AB-">AB-
<OPTION VALUE="O-">O-
<OPTION VALUE="O+">O+
</SELECT>
		</TD>
        <Td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</Td>
        <TD>
        <input name="Search" type="submit" value="Search" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:larger; background-color:#FF3333">
        </TD>
	</TR>
</table>
 </form>
<input name="Search" type="button" value="Back" onClick="Back()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:larger; background-color:#FF3333"> 
</center>
</body>
</html>