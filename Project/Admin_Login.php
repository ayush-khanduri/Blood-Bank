<html>
<head>
<script>
function validate()
{
var user=document.getElementById("user");
var pass=document.getElementById("pass");
if(user.value=="admin" && pass.value=="admin")
{
	return true;
}
else
{alert("Wrong Username/Password Combination");
return false;
}
}

function Back()
{
		window.location="Login.html";
}
</script>
</head>
<body background="Images/BloodViscosity.jpg">
<center>
<br>
<h3 style="font-family:'Comic Sans MS', cursive; font-size:40px; color:#FFF">
ADMIN PANEL
</h3>
<br>
<form action="admin_actions.php" onSubmit="return validate()" method="post" name="admin_login">
<table width="200">
  <tr>
    <th scope="row" style="font-family:'Comic Sans MS', cursive; font-size:24px; color:#FFF">Username:&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <td><input name="username" id="user" type="text" size="25" maxlength="25" style="background-color:#F66; height:27;border:1px solid #F00; border-radius:10px;"></td>
  </tr>
  <tr>
    <th scope="row" style="font-family:'Comic Sans MS', cursive; font-size:24px; color:#FFF">Password:&nbsp;&nbsp;&nbsp;&nbsp;</th>
    <td><input name="password" type="password" id="pass" size="25" maxlength="25" style="background-color:#F66;  height:27;border:1px solid #F00; border-radius:10px;"></td>
  </tr>
  <tr>
    <th scope="row">
    <br>
    <input name="Search" type="button" value=" Back  " onClick="Back()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:larger; background-color:#FF3333; height:27;"> </th>
    <td><br>
<input name="Submit" type="submit" value="Submit" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:larger; background-color:#FF3333; height:27;"></td>
  </tr>
</table>
</form>
</center>
</body>
</html>