<html>
<head>
<script>
function view_db(){
window.location="view_db.php";
}
function logout(){
window.location="Admin_Login.php";
}
</script>
</head>
<body background="Images/BloodViscosity.jpg">
<center>
<h3 style="font-family:'Comic Sans MS', cursive; font-size:40px; color:#FFF"> Welcome Back, Admin! </h3>
<br>
<table width="174" height="10" cellspacing="0" align="left">
  <tr>
    <td width="106"  align="center" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333' " bgcolor='#FF3333' ><input name="view" type="button" value="View All Users" onClick="view_db()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style=" font-size:larger; border:0pt; background-color:'#FF3333'"></td>
    
    <td width="329" align="center" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" bgcolor='#FF3333'><input name="Log_out" type="button" value="Log out" onClick="logout()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style=" font-size:larger; border:0pt; background-color:'#FF3333';"></td>
    
  </tr>
</table>

<br>
<br>
<br>

<br>
<br>

</center>
</body>
</html>