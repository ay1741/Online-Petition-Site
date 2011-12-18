<?php
mysql_connect("DATABASE LOCATION","DATABASE USERNAME","DATABASE PASSWORD");
mysql_select_db("PUT THE DATABASE NAME HERE");
$name=$_POST['name'];
$comment=$_POST['comment'];
$submit=$_POST['submit'];

$dbLink = mysql_connect("DATABASE LOCATION", "DATABASE  USERNAME", "DATABASE PASSWORD");
	mysql_query("SET character_set_client=utf8", $dbLink);
	mysql_query("SET character_set_connection=utf8", $dbLink);

if($submit)
{
if($name&&$comment)
{
$insert=mysql_query("INSERT INTO TABLE_NAME (name,comment) VALUES ('$name','$comment') ");
}
else
{
echo "please fill out all fields";
}
}
?>

<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/index.css" type="text/css">
<title>Notes</title>

</head>
<body>

<div id="header">
<div id="insideheader">
<p style="font-size: 40px;color:#E6E6DC;">Insert Title Here</p>
</div>
</div>


<div id="nav">
<div id="insidenav">
<a href="index.html" style="text-decoration:none;font-size: 30px;">Home</a> <a href="#" style="text-decoration:none;font-size: 30px;"> | </a>
<a href="sign.php" style="text-decoration:none;font-size: 30px;">Sign the Petition</a>  <a href="#" style="text-decoration:none;font-size: 30px;"> | </a>
<a href="view.php" style="text-decoration:none;font-size: 30px;">View the Petition</a> <a href="#" style="text-decoration:none;font-size: 30px;"> | </a>
<a href="comments.php" style="text-decoration:none;font-size: 30px;">Notes</a>
</div>
</div>

<div id="body">

<p style="font-size: 25px;">What this is for?</p><br>
<p>This part of the site is for anyone to put a comments about the petition or a comment about their support.</p>
<br>


<center>
<form action="comments.php" method="POST">
<table>
<tr><td>Name: <br><input type="text" name="name"/></td></tr>
<tr><td colspan="2">Comment: </td></tr>
<tr><td colspan="5"><textarea name="comment" rows="10" cols="50"></textarea></td></tr>
<tr><td colspan="2"><input type="submit" name="submit" value="Comment"></td></tr>
</table>
</form>
</center>
<br><br>
<hr width="960px"/>

<?php
$dbLink = mysql_connect("DATABASE LOCATION", "DATABASE USERNAME", "DATABASE PASSWORD");
	mysql_query("SET character_set_results=utf8", $dbLink);
	mb_language('uni');
	mb_internal_encoding('UTF-8');

$getquery=mysql_query("SELECT * FROM TABLE_NAME ORDER BY id DESC");
while($rows=mysql_fetch_assoc($getquery))
{
$id=$rows['id'];
$name=$rows['name'];
$comment=$rows['comment'];
echo $name . '<br/>' . '<br/>' . $comment . '<br/>' . '<hr width="960px"/>'
;}
?>

</div>
</body>
</html>