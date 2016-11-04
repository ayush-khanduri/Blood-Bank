
<?php
session_start();
if(!isset($_SESSION["n"]))
{
header("location:Login.html");	
}
?>
<html>
<script>
function About_me()
{
	window.location="About_me.php";
}

function Search()
{
	window.location="Search.php";
}

function Update()
{
	window.location="Update.php ";
}

function Delete()
{	
	var result=confirm("Are you sure you want to delete your account?");
	if(result)
	{
	window.location="Delete.php";
	}
}

function Contact()
{
	window.location="contact_us.php";
}

function Log_out()
{
	window.location="Log_out.php";
}
</script>
<style>
body { background-image:url(Images/BloodViscosity.jpg); background-repeat:no-repeat; background-position:center; background-size:cover}
a:link {color:#FFF;}
a:visited {color:#FFF;}
</style>
<body style="font-family:'Comic Sans MS', cursive; color:#FFF;">
<p align="right"><?php echo "Welcome ! ".$_SESSION["n"]."<br>".date("d/m/Y");?></p>
<p align="right">
<input name="Log_out" type="button" value="Log_out" onClick="Log_out()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:larger; background-color:#FF3333"></p>
<table width="441" height="10" cellspacing="0" align="left">
  <tr>
  <td width="64"  align="center" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333' " bgcolor='#FF3333' ><input name="About" type="button" size="50" value="Details" onClick="About_me()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="font-size:larger; border:0pt; background-color:'#FF3333'"></td>

    <td width="64"  align="center" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333' " bgcolor='#FF3333' ><input name="Search" type="button" value="Search" onClick="Search()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style=" font-size:larger; border:0pt; background-color:'#FF3333'"></td>
    
    <td width="63" align="center" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" bgcolor='#FF3333'><input name="Update" type="button" value="Update" onClick="Update()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style=" font-size:larger; border:0pt; background-color:'#FF3333';"></td>
    
    <td width="58"  align="center" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" bgcolor='#FF3333'><input name="Delete" type="button" value="Delete" onClick="Delete()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style=" font-size:larger; border:0pt; background-color:'#FF3333';"></td>
    <td width="58"  align="center" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" bgcolor='#FF3333'><input name="Delete" type="button" value="Contact Us" onClick="Contact()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style=" font-size:larger; border:0pt; background-color:'#FF3333';"></td>
     </tr>
</table><br>
 <center>
      <!--tableMain-->
<table align="center" width="1441" height="625">
				<tr>
              <td width="500" style="font-size:36px">About Us </td>
              <td width="42" align="center" height="92" style="font-size:36px" style="font-family:'Comic Sans MS', cursive; font-size:27;">	FAQ's</td>
            </tr>
            <tr>
            <b><i>
              <td width="543" style="font-size:20px"><b> As one of the most prominent and comprehensive blood centers in the world, Rakht-Dan operates under a three-part mission. Specifically, Rakht-Dan exists:
                </b><ul style="font-size:18px">
                  <li><b>To provide the highest quality blood and stem cell products and related medical and consultative services to hospitals and patients primarily in the greater Delhi metropolitan area.</b></li>
                  <br>
                  <li><b>To conduct the highest quality, novel and innovative research in the fields of hematology, blood banking and transfusion medicine, and cellular therapies, thus advancing these fields and positively impacting the public health</b></li>
                  <br>
                  <li><b>To train the next generation of leaders in each of these fields.</b></li>
                </ul>
                </i>
                </b>
                </td>
          <td width="553" align="center">
          <ul style="font-size:24px">
          <li><a href="why_donate_blood2.php"> Why donate blood?</a></li>
          <li><a href="External Links/Can I donate blood_ _ New York Blood Center.html"> Am I eligible?</a></li>
          </ul>
          </td>          
</table>
<!--<marquee behavior="alternate">
<img src="Images/blood.jpg" width="443" height="231">&nbsp;<img src="Images/donate_blood_rotator.jpg" width="480" height="231">
</marquee>-->
</body>
</html>