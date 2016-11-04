<html>
<script>

function Back()
{
		window.location="admin_actions.php";
}
</script>
<?php
//Set your variables
$host = "localhost";
$username = "root";
$password = "";
$database = "project";
$table = "users";
echo "<center><br>";
//Make your connection to database
$con = mysql_connect($host,$username,$password);

//Check your connection
if (!$con) {
die("Could not connect: " . mysql_error());
}

//Select your database
$db_selected = mysql_select_db($database, $con);

//Check to make sure the database is there
if (!$db_selected) {
    die ('Can\'t use the db : ' . mysql_error());
}
//echo "I am here";
$result = "SELECT * FROM USERS";
$r=mysql_query($result);

//Check Query
if (!$r) {
die("lid query: " . mysql_error());
}
echo "<p style=\"font-size:34px; align=\"center\"\">Listing all Users</p>";
if(mysql_num_rows($r)>0)
{
	echo "<table border=\"1\" cellspacing=\"5\" cellpadding=\"5\">";
	echo "<tr><th>DID</th><th>Name</th><th>Blood group</th><th>Age</th><th>Phone No.</th><th>Address</th></tr>";
	while($row=mysql_fetch_array($r))
	{
		echo "<tr><td>".$row['Did']."</td><td>".$row['Name']."</td><td>".$row['Blood_group']."</td><td>".$row['Age']."</td><td>".$row['Phone_no']."</td><td>".$row['Address']."</tr><br>";
	}
	echo "</table>";
}
else
{
	echo "0 results";
}
echo "</center>";
mysql_close($con);
?>
</html>
<style>
body { background-image:url(Images/BloodViscosity.jpg); background-repeat:no-repeat; background-position:center; background-size:cover}
</style>
<body style="font-family:'Comic Sans MS', cursive; color:#FFF;">
<center><br>

<input name="Search" type="button" value="Back" onClick="Back()" onMouseOver="this.style.background='#F66'" onMouseOut="this.style.background='#FF3333'" style="border:1px solid #F00; border-radius:10px; font-size:larger; background-color:#FF3333"> 
</Center>
</body>